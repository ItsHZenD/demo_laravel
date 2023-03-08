<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'level' => $this->faker->boolean,
            'email' => $this->faker->email,
            'password' => $this->faker->password,
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'gender' => $this->faker->boolean,
            'birthdate' => $this->faker->date,
        ];
    }
}
