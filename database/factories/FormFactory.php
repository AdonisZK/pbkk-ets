<?php

namespace Database\Factories;

use Faker\Factory as Faker;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\form>
 */
class FormFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $condition = \App\Models\Item_Condition::inRandomOrder()->first()->name;
        $category = \App\Models\Category::inRandomOrder()->first()->name;

        return [
            'title' => fake()->text(10),
            'description' => fake()->text(),
            'minus' => fake()->sentence(1),
            'quantity' => fake()->numberBetween(1, 100),
            'condition' => $condition,
            'category' => $category,
            'user_id' => fake()->numberBetween(1, 10),
            'image' => fake()->imageUrl($width = 400, $height = 400)
        ];
    }
}
