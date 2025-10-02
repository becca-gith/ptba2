<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activite>
 */
class ActiviteFactory extends Factory
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
            'montant' => $this->faker->randomFloat(2, 500, 200000),
            'ptba_id' => $this->faker->numberBetween(1, 5),       // lié à ptbas
            'composant_id' => $this->faker->numberBetween(1, 10), // lié à composants
            'utilisateur_id' => $this->faker->numberBetween(1, 10), // lié à utilisateurs
            'etat' => 1,
        ];
    }
}
