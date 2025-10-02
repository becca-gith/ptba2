<?php

namespace Database\Factories;

use App\Models\Operation;
use Illuminate\Database\Eloquent\Factories\Factory;

class OperationFactory extends Factory
{
    protected $model = Operation::class;

    public function definition()
    {
        return [
            'libelle'        => $this->faker->sentence(3), // Exemple : "Paiement facture école"
            'statut'         => $this->faker->numberBetween(0, 2), // Exemple: 0 = en attente, 1 = validée, 2 = rejetée
            'date_operation' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'activite_id'    => \App\Models\Activite::factory(), // relation si Activite existe
            'utilisateur_id' => \App\Models\Utilisateur::factory(), // relation si Utilisateur existe
            'etat'           => 1, // actif par défaut
        ];
    }
}
