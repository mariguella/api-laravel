<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Car::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'brand' => $this->faker->name,
        'model' => $this->faker->name,
        'description' => $this->faker->text,
        'year' => $this->faker->year,
        'price' => 20.8,
        'image' => $this->faker->image,
        
        ];
    }
}
