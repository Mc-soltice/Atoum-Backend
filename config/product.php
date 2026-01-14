<?php

return [
  'stock_low_threshold' => env('PRODUCT_STOCK_LOW_THRESHOLD', 10),

  'default_image' => env('PRODUCT_DEFAULT_IMAGE', 'default-product.png'),

  'promotion' => [
    'default_duration_days' => env('PROMOTION_DEFAULT_DURATION_DAYS', 7),
    'min_discount_percentage' => env('MIN_DISCOUNT_PERCENTAGE', 5),
    'max_discount_percentage' => env('MAX_DISCOUNT_PERCENTAGE', 50)
  ],

  'notifications' => [
    'low_stock' => [
      'enabled' => env('LOW_STOCK_NOTIFICATION_ENABLED', true),
      'email' => env('LOW_STOCK_NOTIFICATION_EMAIL')
    ],
    'out_of_stock' => [
      'enabled' => env('OUT_OF_STOCK_NOTIFICATION_ENABLED', true),
      'email' => env('OUT_OF_STOCK_NOTIFICATION_EMAIL')
    ]
  ]
];