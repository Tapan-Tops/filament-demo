<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
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
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(3),
            'price' => $this->faker->numberBetween(10, 100),
            'image' => $this->faker->imageUrl(640, 480, 'cats'),
            'slug' => $this->faker->slug(),
            'quantity' => $this->faker->numberBetween(1, 10),
            'status' => $this->faker->randomElement([Product::STATUS_ACTIVE, Product::STATUS_INACTIVE]),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
