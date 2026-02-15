<?php

namespace Database\Factories\Delivery;

use App\Modules\Delivery\Models\DeliveryOption;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeliveryFactory extends Factory
{
    protected $model = DeliveryOption::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->words(3, true),
            'description' => $this->faker->sentence(),
            'price' => $this->faker->numberBetween(500, 5000),
            'delay_days' => $this->faker->numberBetween(1, 7),
            'is_active' => $this->faker->boolean(80),
            'order' => $this->faker->numberBetween(0, 10),
        ];
    }

    public function active(): self
    {
        return $this->state(['is_active' => true]);
    }

    public function inactive(): self
    {
        return $this->state(['is_active' => false]);
    }
}