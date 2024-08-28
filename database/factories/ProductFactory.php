<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Catalog;
use App\Models\Category;
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
            "category_id" => Category::inRandomOrder()->first()->id,
            "brand_id" => Brand::inRandomOrder()->first()->id,
            "catalog_id" => Catalog::inRandomOrder()->first()->id,
            "name" => fake()->name,
            "size" => fake()->randomFloat(),
            "guarantee" => fake()->randomNumber(),
            "weight" => fake()->randomFloat(),
            "description" => fake()->sentence
        ];
    }
}
