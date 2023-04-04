<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'productName' => fake()->catchPhrase(),
            'quantity' => fake()->biasedNumberBetween($min = 0, $max = 50, $function = 'sqrt'),
            'price' => fake()->randomFloat($nbMaxDecimals = 2, $min = 100, $max = 1000),
        ];
    }
}
