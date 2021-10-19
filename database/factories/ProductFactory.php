<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'slug' => $this->faker->slug,
            'image' => $this->faker->imageUrl($width = 640, $height = 480),
            'barcode' => $this->faker->ean8,
            'description' => $this->faker->sentence,
            'price' => $this->faker->randomNumber(3),
        ];
    }
}
