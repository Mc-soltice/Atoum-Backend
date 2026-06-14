<?php

namespace App\Modules\Order\Services;

use App\Modules\Order\Models\Order;
use App\Modules\Order\Enums\OrderStatus;
use App\Modules\Order\Services\NotificationService;
use Illuminate\Support\Facades\Log;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Stripe\Exception\ApiErrorException;

/**
 * Service pour gérer les paiements Stripe
 * 
 * Gère :
 * - Création des PaymentIntent Stripe
 * - Vérification du statut des paiements
 * - Mise à jour des commandes après paiement
 */
class PaymentService
{
  public function __construct(
    private NotificationService $notificationService
  ) {
    Stripe::setApiKey(config('services.stripe.secret'));
  }

  /**
   * Crée un PaymentIntent Stripe pour une commande
   * 
   * @param float $amount Montant en euros
   * @param string|null $orderId ID de la commande (optionnel)
   * @param string|null $email Email client (optionnel)
   * @return array{client_secret:string,payment_intent_id:string} Contenant client_secret et payment_intent_id
   * @throws ApiErrorException
   */
  public function createPaymentIntent(
    float $amount,
    ?string $orderId = null,
    ?string $email = null
  ): array {
    try {
      // Convertir en centimes
      $amountInCents = (int) round($amount * 100);

      /** @var array<string,mixed> $params */
      $params = [
        'amount' => $amountInCents,
        'currency' => 'eur',
        'payment_method_types' => ['card'],
      ];

      // Ajouter les métadonnées si présentes
      if ($orderId) {
        $params['metadata'] = ['order_id' => $orderId];
      }

      // Ajouter l'email de confirmation si présent
      if ($email) {
        $params['receipt_email'] = $email;
      }

      /** @var PaymentIntent $paymentIntent */
      $paymentIntent = PaymentIntent::create($params);

      Log::info('PaymentIntent créé', [
        'payment_intent_id' => $paymentIntent->id,
        'amount' => $amount,
        'order_id' => $orderId,
      ]);

      return [
        'client_secret' => $paymentIntent->client_secret,
        'payment_intent_id' => $paymentIntent->id,
      ];
    } catch (ApiErrorException $e) {
      Log::error('Erreur création PaymentIntent', [
        'error' => $e->getMessage(),
        'amount' => $amount,
      ]);
      throw $e;
    }
  }

  /**
   * Vérifie l'état d'un PaymentIntent et met à jour la commande
   * 
   * @param string $paymentIntentId ID du PaymentIntent Stripe
   * @return array Résultat de la vérification
   * @throws ApiErrorException
   */
  public function verifyAndUpdateOrder(string $paymentIntentId): array
  {
    try {
      $paymentIntent = PaymentIntent::retrieve($paymentIntentId);

      // Si paiement réussi
      if ($paymentIntent->status === 'succeeded') {
        // Chercher la commande par PaymentIntent ID ou par métadonnées
        /** @var Order|null $order */
        $order = Order::where('stripe_payment_intent_id', $paymentIntentId)
          ->first();

        if (!$order && $paymentIntent->metadata?->order_id) {
          $order = Order::where('id', $paymentIntent->metadata->order_id)->first();
        }

        if ($order) {
          // Sécurité: vérifier que le montant Stripe correspond au montant en base de données
          $amountInCents = (int) round($order->total_amount * 100);
          if ($paymentIntent->amount !== $amountInCents) {
            Log::error('Incohérence de montant de paiement', [
              'order_id' => $order->id,
              'order_amount' => $amountInCents,
              'stripe_amount' => $paymentIntent->amount,
            ]);
            throw new \Exception("Le montant du paiement ne correspond pas au total de la commande.");
          }

          $alreadyPaid = $order->is_paid || $order->payment_status === 'succeeded';
          $oldStatus = $order->status;

          $order->update([
            'payment_status' => 'succeeded',
            'stripe_payment_intent_id' => $paymentIntentId,
            'paid_at' => now(),
            'is_paid' => true,
            'status' => OrderStatus::CONFIRMED,
          ]);

          if (! $alreadyPaid) {
            $this->notificationService->notifyOrderStatusUpdated(
              $order,
              $oldStatus,
              OrderStatus::CONFIRMED
            );
          }

          Log::info('Commande mise à jour après paiement', [
            'order_id' => $order->id,
            'payment_intent_id' => $paymentIntentId,
          ]);

          return [
            'success' => true,
            'message' => 'Paiement confirmé et commande mise à jour',
            'order_id' => $order->id,
            'payment_intent_id' => $paymentIntentId,
          ];
        }

        return [
          'success' => true,
          'message' => 'Paiement confirmé',
          'payment_intent_id' => $paymentIntentId,
          'warning' => 'Aucune commande associée trouvée',
        ];
      }

      // Paiement non confirmé
      Log::warning('PaymentIntent non confirmé', [
        'payment_intent_id' => $paymentIntentId,
        'status' => $paymentIntent->status,
      ]);

      return [
        'success' => false,
        'message' => 'Paiement non confirmé',
        'status' => $paymentIntent->status,
      ];
    } catch (ApiErrorException $e) {
      Log::error('Erreur vérification PaymentIntent', [
        'error' => $e->getMessage(),
        'payment_intent_id' => $paymentIntentId,
      ]);
      throw $e;
    }
  }

  /**
   * Récupère le statut d'un PaymentIntent
   * 
   * @param string $paymentIntentId ID du PaymentIntent
   * @return string Statut du paiement
   * @throws ApiErrorException
   */
  public function getPaymentStatus(string $paymentIntentId): string
  {
    $paymentIntent = PaymentIntent::retrieve($paymentIntentId);
    return $paymentIntent->status;
  }

  /**
   * Récupère les détails complets d'un PaymentIntent
   * 
   * @param string $paymentIntentId ID du PaymentIntent
   * @return PaymentIntent Détails du PaymentIntent
   * @throws ApiErrorException
   */
  public function getPaymentIntentDetails(string $paymentIntentId): PaymentIntent
  {
    return PaymentIntent::retrieve($paymentIntentId);
  }

  /**
   * Met à jour la commande lorsque le paiement a échoué
   * 
   * @param string $paymentIntentId ID du PaymentIntent Stripe
   * @return array Résultat de la mise à jour
   * @throws ApiErrorException
   */
  public function handlePaymentFailed(string $paymentIntentId): array
  {
    try {
      $paymentIntent = PaymentIntent::retrieve($paymentIntentId);

      /** @var Order|null $order */
      $order = Order::where('stripe_payment_intent_id', $paymentIntentId)->first();
      if (!$order && $paymentIntent->metadata?->order_id) {
        $order = Order::where('id', $paymentIntent->metadata->order_id)->first();
      }

      if ($order) {
        $order->update([
          'payment_status' => 'failed',
          'stripe_payment_intent_id' => $paymentIntentId,
        ]);

        Log::warning('Paiement échoué pour la commande', [
          'order_id' => $order->id,
          'payment_intent_id' => $paymentIntentId,
        ]);

        return [
          'success' => true,
          'message' => 'Statut de paiement mis à jour (échec)',
          'order_id' => $order->id,
        ];
      }

      return [
        'success' => false,
        'message' => 'Aucune commande trouvée pour cet échec de paiement',
      ];
    } catch (ApiErrorException $e) {
      Log::error('Erreur Stripe lors de l\'échec de paiement', [
        'error' => $e->getMessage(),
        'payment_intent_id' => $paymentIntentId,
      ]);
      throw $e;
    }
  }
}
