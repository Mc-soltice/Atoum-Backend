<?php

namespace App\Modules\Order\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Order\Requests\CreatePaymentIntentRequest;
use App\Modules\Order\Requests\VerifyPaymentRequest;
use App\Modules\Order\Services\PaymentService;
use App\Modules\Order\Models\Order;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Stripe\Exception\ApiErrorException;

/**
 * Contrôleur pour la gestion des paiements Stripe
 *
 * @OA\Tag(
 *     name="Payments",
 *     description="Gestion des paiements via Stripe"
 * )
 */
class PaymentController extends Controller
{
  public function __construct(private PaymentService $paymentService) {}

  /**
   * Crée un PaymentIntent Stripe pour initialiser le paiement
   *
   * @OA\Post(
   *     path="/api/payments/create-intent",
   *     tags={"Payments"},
   *     summary="Créer un PaymentIntent Stripe",
   *     security={{"bearerAuth":{}}},
   *     @OA\RequestBody(
   *         required=true,
   *         @OA\JsonContent(
   *             type="object",
   *             required={"amount"},
   *             @OA\Property(property="amount", type="number", example=99.99, description="Montant en euros"),
   *             @OA\Property(property="order_id", type="string", format="uuid", description="ID de la commande (optionnel)")
   *         )
   *     ),
   *     @OA\Response(
   *         response=200,
   *         description="PaymentIntent créé avec succès",
   *         @OA\JsonContent(
   *             type="object",
   *             @OA\Property(property="success", type="boolean", example=true),
   *             @OA\Property(property="client_secret", type="string", example="pi_xxx_secret_yyy"),
   *             @OA\Property(property="payment_intent_id", type="string", example="pi_xxx"),
   *             @OA\Property(property="amount", type="number", example=99.99),
   *             @OA\Property(property="currency", type="string", example="eur")
   *         )
   *     ),
   *     @OA\Response(
   *         response=422,
   *         description="Erreur de validation"
   *     ),
   *     @OA\Response(
   *         response=400,
   *         description="Erreur lors de la création du PaymentIntent"
   *     )
   * )
   */
  public function createIntent(CreatePaymentIntentRequest $request): JsonResponse
  {
    try {
      $validated = $request->validated();
      $orderId = $validated['order_id'];

      $order = Order::findOrFail($orderId);

      // Sécurité: Vérifier si la commande est déjà payée
      if ($order->is_paid || $order->payment_status === 'succeeded') {
        return response()->json([
          'success' => false,
          'message' => 'Cette commande a déjà été payée',
        ], 400);
      }

      $amount = (float) $order->total_amount;
      $email = $request->user()?->email ?? $order->customer_email;

      $paymentData = $this->paymentService->createPaymentIntent(
        $amount,
        $orderId,
        $email
      );

      // Mettre à jour la commande avec l'ID du PaymentIntent
      $order->update([
        'stripe_payment_intent_id' => $paymentData['payment_intent_id'],
      ]);

      return response()->json([
        'success' => true,
        'client_secret' => $paymentData['client_secret'],
        'payment_intent_id' => $paymentData['payment_intent_id'],
        'amount' => $amount,
        'currency' => 'eur',
      ]);
    } catch (ApiErrorException $e) {
      Log::error('Erreur Stripe', [
        'error' => $e->getMessage(),
        'type' => $e->getStripeCode(),
      ]);

      return response()->json([
        'success' => false,
        'message' => 'Erreur lors de la création du paiement',
        'error' => $e->getMessage(),
      ], 400);
    } catch (\Exception $e) {
      Log::error('Erreur serveur', ['error' => $e->getMessage()]);

      return response()->json([
        'success' => false,
        'message' => 'Erreur serveur',
      ], 500);
    }
  }

  /**
   * Vérifie et finalise un paiement Stripe
   *
   * @OA\Post(
   *     path="/api/payments/verify",
   *     tags={"Payments"},
   *     summary="Vérifier et finaliser un paiement",
   *     security={{"bearerAuth":{}}},
   *     @OA\RequestBody(
   *         required=true,
   *         @OA\JsonContent(
   *             type="object",
   *             required={"payment_intent_id"},
   *             @OA\Property(property="payment_intent_id", type="string", example="pi_xxx")
   *         )
   *     ),
   *     @OA\Response(
   *         response=200,
   *         description="Paiement vérifiée et commande mise à jour",
   *         @OA\JsonContent(
   *             type="object",
   *             @OA\Property(property="success", type="boolean", example=true),
   *             @OA\Property(property="message", type="string"),
   *             @OA\Property(property="order_id", type="string", format="uuid")
   *         )
   *     ),
   *     @OA\Response(
   *         response=400,
   *         description="Paiement non confirmé ou erreur"
   *     )
   * )
   */
  public function verify(VerifyPaymentRequest $request): JsonResponse
  {
    try {
      $paymentIntentId = $request->validated()['payment_intent_id'];
      $result = $this->paymentService->verifyAndUpdateOrder($paymentIntentId);

      if (!$result['success']) {
        return response()->json($result, 400);
      }

      return response()->json($result);
    } catch (ApiErrorException $e) {
      Log::error('Erreur Stripe vérification', [
        'error' => $e->getMessage(),
        'payment_intent_id' => $request->validated()['payment_intent_id'] ?? null,
      ]);

      return response()->json([
        'success' => false,
        'message' => 'Erreur lors de la vérification du paiement',
        'error' => $e->getMessage(),
      ], 400);
    } catch (\Exception $e) {
      Log::error('Erreur serveur', ['error' => $e->getMessage()]);

      return response()->json([
        'success' => false,
        'message' => 'Erreur serveur',
      ], 500);
    }
  }

  /**
   * Récupère le statut d'un paiement
   *
   * @OA\Get(
   *     path="/api/payments/{payment_intent_id}/status",
   *     tags={"Payments"},
   *     summary="Obtenir le statut d'un paiement",
   *     security={{"bearerAuth":{}}},
   *     @OA\Parameter(
   *         name="payment_intent_id",
   *         in="path",
   *         required=true,
   *         @OA\Schema(type="string"),
   *         description="ID du PaymentIntent Stripe"
   *     ),
   *     @OA\Response(
   *         response=200,
   *         description="Statut du paiement",
   *         @OA\JsonContent(
   *             type="object",
   *             @OA\Property(property="payment_intent_id", type="string"),
   *             @OA\Property(property="status", type="string", enum={"succeeded", "processing", "requires_action", "failed"}),
   *             @OA\Property(property="amount", type="number"),
   *             @OA\Property(property="currency", type="string")
   *         )
   *     )
   * )
   */
  public function getStatus(string $paymentIntentId): JsonResponse
  {
    try {
      $paymentIntent = $this->paymentService->getPaymentIntentDetails($paymentIntentId);

      return response()->json([
        'payment_intent_id' => $paymentIntent->id,
        'status' => $paymentIntent->status,
        'amount' => $paymentIntent->amount / 100, // Convertir de centimes
        'currency' => $paymentIntent->currency,
      ]);
    } catch (ApiErrorException $e) {
      return response()->json([
        'message' => 'PaymentIntent non trouvé',
        'error' => $e->getMessage(),
      ], 404);
    }
  }

  /**
   * Traite les événements envoyés par les webhooks Stripe
   *
   * @param Request $request
   * @return JsonResponse
   */
  public function handleWebhook(Request $request): JsonResponse
  {
    $payload = $request->getContent();
    $sigHeader = $request->header('Stripe-Signature');
    $webhookSecret = config('services.stripe.webhook_secret');

    try {
      $event = \Stripe\Webhook::constructEvent(
        $payload,
        $sigHeader,
        $webhookSecret
      );
    } catch (\UnexpectedValueException $e) {
      Log::error('Erreur Webhook Stripe: Payload invalide', ['error' => $e->getMessage()]);
      return response()->json(['error' => 'Payload invalide'], 400);
    } catch (\Stripe\Exception\SignatureVerificationException $e) {
      Log::error('Erreur Webhook Stripe: Signature invalide', ['error' => $e->getMessage()]);
      return response()->json(['error' => 'Signature invalide'], 400);
    }

    Log::info('Événement Webhook Stripe reçu', ['type' => $event->type]);

    try {
      switch ($event->type) {
        case 'payment_intent.succeeded':
          $paymentIntent = $event->data->object;
          $this->paymentService->verifyAndUpdateOrder($paymentIntent->id);
          break;

        case 'payment_intent.payment_failed':
          $paymentIntent = $event->data->object;
          $this->paymentService->handlePaymentFailed($paymentIntent->id);
          break;

        default:
          Log::info('Événement Webhook Stripe non géré', ['type' => $event->type]);
          break;
      }

      return response()->json(['status' => 'success']);
    } catch (\Exception $e) {
      Log::error('Erreur lors du traitement du Webhook Stripe', [
        'event_type' => $event->type ?? 'unknown',
        'error' => $e->getMessage(),
      ]);
      return response()->json(['error' => 'Erreur interne lors du traitement'], 500);
    }
  }
}
