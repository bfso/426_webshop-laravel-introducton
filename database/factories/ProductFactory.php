<?php

namespace Database\Factories;

use App\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

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
			'name' => $this->faker->word,
			'price' => $this->faker->randomFloat(2,0.1,100),
		];
	}
};
