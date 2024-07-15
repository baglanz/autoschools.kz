<?php

namespace Database\Factories;

use App\Models\Instructors;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Instructors>
 */
class InstructorsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->text(100),
            'car' => $this->faker->word(),
            'model' => $this->faker->word(),
            'image' => $this->faker->imageUrl(),
            'website' => $this->faker->url(),
            'price' => $this->faker->numberBetween(1000, 10000),
        ];
    }
}
