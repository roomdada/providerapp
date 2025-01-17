<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->unique()->word();
        $email = $this->faker->safeEmail();
        return [
            'name' => $name,
            'slug' => \Illuminate\Support\Str::slug($name), // Electricite -> electricite
        ];
    }
}