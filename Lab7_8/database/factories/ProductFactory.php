<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'price' => $this->faker->numberBetween(1000, 100000),
            'quantity' => $this->faker->numberBetween(1, 100),
            'content' => $this->faker->paragraph,
            'category_id' => $this->faker->numberBetween(1, 5),
            'views' => 0,
            'is_active' => true,
        ];
    }
}