<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BailleurFactory extends Factory
{
    public function definition()
    {
        return [
            'code' => $this->faker->unique()->bothify('BYR-###'),
            'logo' => $this->faker->imageUrl(200, 200, 'business', true),
            'sigle' => strtoupper($this->faker->lexify('???')),
            'nom' => $this->faker->company(),
            'email' => $this->faker->unique()->safeEmail(),

            'utilisateur_id' => $this->faker->numberBetween(1, 5),

            'etat' => $this->faker->randomElement([0, 1]),
        ];
    }
}
