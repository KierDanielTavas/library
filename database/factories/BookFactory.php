<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->word(),
            'totalPages'=>fake()->numberBetween($min = 1000, $max = 10000),
            'rating'=>fake()->randomDigit(),
            'isbn'=>fake()->ean8(),
            'publishDate'=>fake()->date($format = 'Y-m-d', $max = 'now'),
        ];
    }
}
