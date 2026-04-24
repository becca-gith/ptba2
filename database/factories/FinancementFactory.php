<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FinancementFactory extends Factory
{
    public function definition()
    {
        return [
            'montant' => $this->faker->randomFloat(2, 50000, 5000000),

            // Foreign keys (à adapter selon les données existantes)
            'bailleur_id' => $this->faker->numberBetween(1, 5),
            'activite_id' => $this->faker->numberBetween(1, 5),

            'etat' => $this->faker->randomElement([0, 1]),
        ];
    }
}

