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
        $this->faker->addProvider(new \Faker\Provider\Lorem($this->faker));

        return [
            'name' => $this->faker->name,
            'description' => $this->faker->sentence(6),
            'price' => $this->faker->randomFloat(2, 10, 1000),
        ];
    }
}