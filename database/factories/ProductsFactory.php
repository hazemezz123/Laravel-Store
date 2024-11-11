<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(),
            'title' => fake()->sentence(),
            'brand' => fake()->word(),
            'description' => fake()->paragraph(),
            'price' => fake()->randomFloat(2, 0, 100),
            'user_id' => function () {
                return User::inRandomOrder()->first()->id;
            },
            'image' => $this->faker->imageUrl(640, 480, 'products', true, 'Faker'), // Generate fake image URL
        ];
    }
}
