<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use function Pest\Laravel\json;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schools>
 */
class SchoolsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
//            'name' => fake()->name(),
//            'description' => fake()->text(),
//            'address' => fake()->address(),
//            'image' => fake()->imageUrl(),
//            'website' => fake()->url(),
//            'price' => fake()->numberBetween(1000, 10000),
        ];
    }
}
