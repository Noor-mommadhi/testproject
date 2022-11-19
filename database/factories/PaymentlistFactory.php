<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentlistFactory extends Factory
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
            'email'=> $this->faker->email,
            'phone'=>rand(123456, 123123),
            'date'=>$this->faker->date,
            'branch'=>$this->faker->branch,
        ];
    }
}
