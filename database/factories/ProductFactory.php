<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->name,
            'currency'=> $this->faker->currency,
            'cost'=> $this->faker->cost,
            'tax'=> $this->faker->tax,
            'totalcost'=> $this->faker->totalcost,
            'visibility'=> $this->faker->admin,
        ];
    }
}
