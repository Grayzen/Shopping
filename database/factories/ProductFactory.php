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
          'name' => $this->faker->word(5, 10),
          'type' => 'furniture',
          'price' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 30),
          'image' => $this->faker->image('public/storage/images',640,480, null, false),
        ];
    }
}
