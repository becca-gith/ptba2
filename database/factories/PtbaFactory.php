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
            'libelle' => $this->faker->sentence(3),
            'annee_id' => $this->faker->numberBetween(1, 5),
            'type' => $this->faker->numberBetween(0, 3),
            'utilisateur_id' => $this->faker->numberBetween(1, 10),
            'etat' => 1,
        ];
    }
}
