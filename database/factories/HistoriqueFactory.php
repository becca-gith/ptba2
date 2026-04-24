<?php

namespace Database\Factories;


use App\Models\Historique;
use Illuminate\Database\Eloquent\Factories\Factory;

class HistoriqueFactory extends Factory
{
    public function definition()
    {
        return [
            'libelle' => $this->faker->sentence(4),
            'heure_action' => $this->faker->dateTimeThisYear(),

            // Foreign key utilisateur

            'utilisateur_id' => $this->faker->numberBetween(1, 5),

            'etat' => $this->faker->randomElement([0, 1]),
        ];
    }
}
