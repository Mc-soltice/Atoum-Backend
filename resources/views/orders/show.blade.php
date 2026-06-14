<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Confirmation · Commande {{ $order->reference }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            background: #FFFFFF;
            color: #1A2C3E;
            line-height: 1.4;
            padding: 1rem;
        }

        .confirmation-container {
            max-width: 1120px;
            margin: 0 auto;
        }

        /* cartes sobres */
        .card {
            background: #FFFFFF;
            border-radius: 1.5rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.02), 0 1px 2px rgba(0, 0, 0, 0.03);
            border: 1px solid #F0F2F5;
            padding: 1.2rem;
        }

        /* badge statut ambre */
        .badge-status {
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
            padding: 0.2rem 0.75rem;
            background-color: #FFF7ED;
            color: #B45309;
            border-radius: 2rem;
            font-size: 0.7rem;
            font-weight: 500;
            border: 0.5px solid #FFE4C4;
        }

        .grid-details {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .info-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 0.9rem;
        }

        /* tableau compact */
        .table-wrapper {
            overflow-x: auto;
            margin: 1rem 0 0.5rem;
            border-radius: 1rem;
        }

        .order-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.75rem;
        }

        .order-table th {
            text-align: left;
            padding: 0.7rem 0.5rem 0.7rem 0;
            font-weight: 600;
            color: #5A6E87;
            border-bottom: 1px solid #EDF2F7;
            font-size: 0.7rem;
        }

        .order-table td {
            padding: 0.7rem 0.5rem 0.7rem 0;
            border-bottom: 1px solid #F1F5F9;
            color: #1E2F3E;
        }

        .order-table .text-right {
            text-align: right;
        }

        .order-table tfoot td {
            border-top: 1px solid #EDF2F7;
            font-weight: 600;
            padding-top: 0.8rem;
        }

        /* cartes infos */
        .info-card {
            background: #FEFCF8;
            border: 1px solid #F5EDE4;
            border-radius: 1.2rem;
            padding: 1rem;
        }

        .info-card h3 {
            font-size: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: #B87C4F;
            margin-bottom: 0.6rem;
            font-weight: 600;
        }

        .info-card p {
            font-size: 0.85rem;
            margin-bottom: 0.2rem;
            color: #2C3E4E;
        }

        .divider-amber {
            height: 1px;
            background: linear-gradient(90deg, #FDE5C8, #FFE9D4, #FDE5C8);
            margin: 0.8rem 0;
        }

        /* boutons */
        .btn-group {
            display: flex;
            gap: 0.75rem;
            justify-content: flex-end;
            margin-top: 1rem;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.4rem;
            padding: 0.5rem 1.2rem;
            border-radius: 2.5rem;
            font-weight: 500;
            font-size: 0.75rem;
            transition: all 0.2s ease;
            text-decoration: none;
            border: 1px solid transparent;
        }

        .btn-primary {
            background: #D97A0C;
            color: white;
        }

        .btn-primary:hover {
            background: #BF6A0A;
        }

        .btn-secondary {
            background: transparent;
            border-color: #E2E8F0;
            color: #3B4E62;
        }

        .btn-secondary:hover {
            background: #FEF8F0;
            border-color: #E9CFA5;
        }

        /* entête */
        .success-header {
            text-align: center;
            margin-bottom: 1.6rem;
        }

        .success-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: #FFF5EB;
            width: 52px;
            height: 52px;
            border-radius: 999px;
            margin-bottom: 0.75rem;
            border: 1px solid #FFE1B9;
        }

        .success-header h1 {
            font-size: 1.55rem;
            font-weight: 600;
            letter-spacing: -0.3px;
            color: #2C3E4E;
        }

        .success-header p {
            font-size: 0.8rem;
            color: #6C7F8F;
        }

        /* ligne récap */
        .order-summary-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 1rem;
            margin-bottom: 0.5rem;
            padding-bottom: 0.4rem;
        }

        .order-summary-item {
            flex: 1;
            min-width: 80px;
        }

        .order-summary-item .label {
            font-size: 0.65rem;
            text-transform: uppercase;
            color: #A6825A;
            font-weight: 500;
        }

        .order-summary-item .value {
            font-weight: 650;
            font-size: 0.9rem;
            color: #1F2F3C;
        }

        .total-highlight {
            font-weight: 800;
            color: #C8630E;
        }

        .payment-badge {
            display: inline-block;
            background: #FEF7E8;
            padding: 0.2rem 0.6rem;
            border-radius: 20px;
            font-size: 0.7rem;
            font-weight: 500;
            color: #B45309;
        }

        /* layout desktop */
        @media (min-width: 720px) {
            body {
                padding: 1.5rem;
            }
            .main-flex {
                display: flex;
                gap: 1.5rem;
                align-items: stretch;
            }
            .left-col {
                flex: 2.2;
            }
            .right-col {
                flex: 1.2;
            }
            .info-grid {
                grid-template-columns: 1fr;
                gap: 0.9rem;
            }
        }

        .text-right {
            text-align: right;
        }

        footer {
            margin-top: 2rem;
            text-align: center;
            font-size: 0.7rem;
            color: #A78E70;
            border-top: 1px solid #F0E4D6;
            padding-top: 1.5rem;
        }
    </style>
</head>
<body>
<div class="confirmation-container">
    <div class="success-header">
        <div class="success-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#D97A0C" stroke-width="2" stroke-linecap="round">
                <path d="M20 6L9 17L4 12" />
            </svg>
        </div>
        <h1>Commande confirmée</h1>
        <p>Un récapitulatif vous a été envoyé par email.</p>
    </div>

    <div class="main-flex">
        <div class="left-col">
            <div class="card">
                <div class="order-summary-row">
                    <div class="order-summary-item">
                        <div class="label">N° commande</div>
                        <div class="value">{{ $order->reference }}</div>
                    </div>
                    <div class="order-summary-item">
                        <div class="label">Statut</div>
                        <span class="badge-status">{{ ucfirst($order->status->value) }}</span>
                    </div>
                    <div class="order-summary-item">
                        <div class="label">Date</div>
                        <div class="value">{{ $order->created_at->format('d/m/Y') }}</div>
                    </div>
                    <div class="order-summary-item">
                        <div class="label">Total TTC</div>
                        <div class="value total-highlight">{{ number_format($order->total_amount, 2, ',', ' ') }} €</div>
                    </div>
                </div>

                <div>
                    <div style="font-weight: 600; font-size: 0.8rem; margin: 0.25rem 0 0.3rem 0; color:#4A627A;">📦 Articles ({{ $order->items->count() }})</div>
                    <div class="table-wrapper">
                        <table class="order-table">
                            <thead>
                                <tr><th>Produit</th><th class="text-right">Qté</th><th class="text-right">Prix</th><th class="text-right">S/total</th></tr>
                            </thead>
                            <tbody>
                                @foreach($order->items as $item)
                                <tr>
                                    <td style="font-weight: 500;">{{ $item->product_name }}</td>
                                    <td class="text-right">{{ $item->quantity }}</td>
                                    <td class="text-right">{{ number_format($item->unit_price ?? $item->total_price / max($item->quantity, 1), 2, ',', ' ') }} €</td>
                                    <td class="text-right">{{ number_format($item->total_price, 2, ',', ' ') }} €</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr><td colspan="3" class="text-right">Sous-total</td><td class="text-right">{{ number_format($order->items->sum('total_price'), 2, ',', ' ') }} €</td></tr>
                                <tr><td colspan="3" class="text-right">Livraison ({{ $order->deliveryOption->name }})</td><td class="text-right">{{ number_format($order->deliveryOption->price, 2, ',', ' ') }} €</td></tr>
                                <tr style="background:#FFFCF8;"><td colspan="3" class="text-right" style="font-weight: 700;">Total à payer</td><td class="text-right" style="font-weight: 800; color:#C8630E;">{{ number_format($order->total_amount, 2, ',', ' ') }} €</td></tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card" style="margin-top: 1rem;">
                <div style="display: flex; flex-wrap: wrap; justify-content: space-between; gap: 1rem;">
                    <div>
                        <div class="label" style="font-size:0.65rem; color:#A6825A;">Paiement</div>
                        <div style="font-weight: 500; font-size:0.85rem; margin: 4px 0 2px;">{{ ucfirst($order->payment_method) }}</div>
                        <span class="payment-badge">
                            {{ $order->is_paid || $order->payment_status === 'succeeded' ? '✓ Payé' : 'En attente' }}
                        </span>
                    </div>
                    <div>
                        <div class="label" style="font-size:0.65rem; color:#A6825A;">Livraison</div>
                        <div style="font-weight: 500; font-size:0.85rem;">{{ $order->deliveryOption->name }}</div>
                    </div>
                    <div>
                        <div class="label" style="font-size:0.65rem; color:#A6825A;">ID commande</div>
                        <div style="font-weight: 500; font-size:0.8rem;">#{{ $order->id }}</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="right-col">
            <div class="info-grid">
                <div class="info-card">
                    <h3>👤 Client</h3>
                    <p><strong>{{ $order->shipping_address['first_name'] }} {{ $order->shipping_address['last_name'] }}</strong></p>
                    <p style="font-size:0.8rem;">{{ $order->shipping_address['email'] }}</p>
                    <p style="font-size:0.8rem;">{{ $order->shipping_address['phone'] }}</p>
                </div>

                <div class="info-card">
                    <h3>📍 Livraison</h3>
                    <p>{{ $order->shipping_address['address'] }}</p>
                    <p>{{ $order->shipping_address['zip'] ?? '' }} {{ $order->shipping_address['city'] ?? '' }}</p>
                </div>
            </div>

            <div class="card" style="margin-top: 0.9rem;">
                <div style="display: flex; justify-content: space-between; align-items: baseline;">
                    <span style="font-weight: 500; font-size: 0.8rem; color:#5D6F82;">Récapitulatif</span>
                    <span style="font-weight: 800; font-size: 1.35rem; letter-spacing: -0.3px; color:#C8630E;">{{ number_format($order->total_amount, 2, ',', ' ') }} €</span>
                </div>
                <div class="divider-amber"></div>
                <div class="btn-group">
                    <a href="/" class="btn btn-secondary">Accueil</a>
                    <a href="javascript:window.print()" class="btn btn-primary">Imprimer</a>
                </div>
            </div>
        </div>
    </div>

    <footer>
        ✉️ Email envoyé à {{ $order->shipping_address['email'] }}
    </footer>
</div>
</body>
</html>