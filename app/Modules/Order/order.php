<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Configuration du module Commande
    |--------------------------------------------------------------------------
    */
    
    'currency' => env('ORDER_CURRENCY', '€'),
    
    'default_status' => 'pending',
    
    'auto_generate_reference' => true,
    
    'reference_format' => 'ORD-{YEAR}-{NUMBER}',
    
    'notifications' => [
        'enabled' => true,
        'channels' => ['mail', 'database'],
        'send_to_admin' => true,
        'admin_emails' => env('ORDER_ADMIN_EMAILS', 'admin@example.com'),
    ],
    
    'stock' => [
        'auto_manage' => true,
        'allow_negative' => false,
        'restore_on_cancel' => true,
    ],
    
    'delivery' => [
        'default_option' => env('DEFAULT_DELIVERY_OPTION'),
        'free_shipping_threshold' => env('FREE_SHIPPING_THRESHOLD', 50000),
    ],
    
    'pagination' => [
        'per_page' => 15,
        'user_per_page' => 10,
    ],
];