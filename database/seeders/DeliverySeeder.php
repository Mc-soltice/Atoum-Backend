<?php

namespace Database\Seeders;

use App\Modules\Delivery\Models\DeliveryOption;
use Illuminate\Database\Seeder;

class DeliverySeeder extends Seeder
{
    public function run(): void
    {
        $options = [
            [
                'name' => 'Livraison Standard',
                'description' => 'Livraison en 72 heures',
                'price' => 10,
                'delay_days' => 2,
                'is_active' => true,
                'order' => 1,
            ],
            [
                'name' => 'Livraison Express',
                'description' => 'Livraison en 24 heures',
                'price' => 50,
                'delay_days' => 1,
                'is_active' => true,
                'order' => 2,
            ],
            [
                'name' => 'Magasin',
                'description' => 'Retrait en Boutique',
                'price' => 0,
                'delay_days' => 0,
                'is_active' => true,
                'order' => 3,
            ],

        ];

        foreach ($options as $option) {
            DeliveryOption::create($option);
        }
    }
}