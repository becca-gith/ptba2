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
            'libelle' => $this->faker->sentence(3),
            'montant' => $this->faker->randomFloat(2, 10000, 500000),
            'statut' => $this->faker->randomElement([0, 1, 2]), // ex: 0=En attente, 1=Validé, 2=Rejeté
            'justificatif' => $this->faker->imageUrl(640, 480, 'business', true),
            'date_operation' => $this->faker->date(),

            // clés étrangères (à adapter selon ce que tu as déjà en BD)
            'activite_id' => $this->faker->numberBetween(1, 5),
            'utilisateur_id' => $this->faker->numberBetween(1, 5),

            'etat' => $this->faker->randomElement([0, 1]),
        ];
    }
}
