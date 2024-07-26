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
            'name' => fake()->name(),
            'description' => fake()->text(),
            'address' => fake()->address(),
            'image' => fake()->imageUrl(),
            'phone' => json_encode([
                $this->faker->phoneNumber,
                $this->faker->phoneNumber,
            ]),
            'website' => json_encode([
                $this->faker->url,
                $this->faker->url,
            ]),
            'opening' => json_encode([
                'Monday' => '09:00 - 18:00',
                'Tuesday' => '09:00 - 18:00',
                'Wednesday' => '09:00 - 18:00',
                'Thursday' => '09:00 - 18:00',
                'Friday' => '09:00 - 18:00',
                'Saturday' => '09:00 - 14:00',
                'Sunday' => '09:00 - 14:00',
            ]),
            'price' => fake()->numberBetween(1000, 10000),
        ];
    }
}
