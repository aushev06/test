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
    public function definition(): array
    {
        return [
            'name'=>fake()->name(),
            'fermer_id'=>fake()->numberBetween(1,10),
            'category_id'=>fake()->numberBetween(1,5),

            'description'=>fake()->realText(),
            'price'=>fake()->numberBetween(1,1000),

        ];
    }
}
