<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PtbaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'annee_id' => $this->faker->numberBetween(1, 3),
            'projet_id' => $this->faker->numberBetween(0, 3),
            'utilisateur_id' => $this->faker->numberBetween(1, 4),
            'etat' => 1,
        ];
    }
}
