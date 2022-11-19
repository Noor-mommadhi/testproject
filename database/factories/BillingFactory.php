<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BillingFactory extends Factory
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
            'phone'=> $this->faker->rand(123455,1234567),
            'Pname'=> $this->faker->Pname,
            'payment'=> $this->faker->payment,
            'amount'=> $this->faker->amount,
        ];
    }
}
