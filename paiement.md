(# Documentation du processus de paiement)

## Résumé

Ce document décrit le flux de paiement Stripe implémenté, les endpoints exposés, les fichiers clés et l'impact sur la `Order` (facturation / statut).

## Flux de paiement

1. Le backend crée un `PaymentIntent` via `PaymentService::createPaymentIntent()` et retourne le `client_secret` au frontend.
2. Le frontend utilise Stripe.js avec le `client_secret` pour compléter le paiement côté client.
3. Après confirmation côté client, le backend peut vérifier le PaymentIntent via `POST /api/payments/verify` ou consulter le statut via `GET /api/payments/{payment_intent_id}/status`.
4. Si le paiement est validé (`succeeded`), le service met à jour la commande (`Order`) avec les champs de paiement.

## Endpoints importants

- `POST /api/payments/create-intent` : création du PaymentIntent.
- `POST /api/payments/verify` : vérification / finalisation du paiement (met à jour la commande si succès).
- `GET /api/payments/{payment_intent_id}/status` : récupération du statut du PaymentIntent.

## Fichiers clés

- `app/Modules/Order/Services/PaymentService.php` : logique Stripe (création PaymentIntent, vérification et mise à jour de la commande). [app/Modules/Order/Services/PaymentService.php](app/Modules/Order/Services/PaymentService.php#L1-L999)
- `app/Modules/Order/Controllers/PaymentController.php` : endpoints exposés. [app/Modules/Order/Controllers/PaymentController.php](app/Modules/Order/Controllers/PaymentController.php#L1-L999)
- `database/migrations/2026_05_04_000000_add_stripe_fields_to_orders_table.php` : champs ajoutés à la table `orders`. [database/migrations/2026_05_04_000000_add_stripe_fields_to_orders_table.php](database/migrations/2026_05_04_000000_add_stripe_fields_to_orders_table.php#L1-L200)
- `app/Modules/Order/Models/Order.php` : propriétés et `$fillable` mis à jour pour inclure `payment_status`, `stripe_payment_intent_id`, `paid_at`, `is_paid`. [app/Modules/Order/Models/Order.php](app/Modules/Order/Models/Order.php#L1-L200)
- `.env` : variables Stripe (`STRIPE_PUBLIC_KEY`, `STRIPE_SECRET_KEY`, `STRIPE_WEBHOOK_SECR

ET`). [.env](.env#L1-L200)

- `STRIPE_IMPLEMENTATION.md` : documentation d'implémentation existante (utile comme référence). [STRIPE_IMPLEMENTATION.md](STRIPE_IMPLEMENTATION.md#L1-L200)

## Impact sur la facture / `Order`

- Champs ajoutés à la table `orders` : `payment_status` (pending|succeeded|failed|cancelled), `stripe_payment_intent_id`, `paid_at`.
- Lorsqu'un `PaymentIntent` a le statut `succeeded`, `PaymentService::verifyAndUpdateOrder()` :
    - met `payment_status` à `succeeded`,
    - enregistre `stripe_payment_intent_id`,
    - met `paid_at` = now(),
    - définit `is_paid` = true,
    - met éventuellement `status` = `paid` sur la commande.
- Un `OrderObserver` marque aussi `is_paid = true` quand le `status` passe à `delivered`.

Conséquence : la logique de facturation (génération de facture/PDF, envoi au client) n'est pas trouvée dans le dépôt — il n'y a pas d'implémentation explicite d'« invoice » ou de génération de facture automatique. Le suivi de paiement est assuré via les champs ci-dessus et le statut de la commande.

## Webhooks

- Le `.env` contient `STRIPE_WEBHOOK_SECRET`, mais je n'ai pas trouvé d'endpoint webhook Stripe implémenté dans `routes` ou un contrôleur dédié. Si vous comptez gérer les événements Stripe (ex. paiement asynchrone, chargebacks), ajouter une route webhook sécurisée et valider le signature header est recommandé.

## Recommandations / prochaines étapes

1. Ajouter un endpoint webhook (par ex. `POST /api/payments/webhook`) pour traiter les événements Stripe et appeler `PaymentService::verifyAndUpdateOrder()` lorsque nécessaire.
2. Implémenter une génération de facture (PDF / HTML) déclenchée après confirmation du paiement (`payment_status` = `succeeded`) ou lors du passage du `status` à `paid`/`delivered`.
3. S'assurer que les montants envoyés à Stripe sont validés côté serveur (déjà partiellement géré dans `PaymentService`).
4. Ajouter des tests automatisés couvrant la création du PaymentIntent, la vérification et la mise à jour de la commande.
