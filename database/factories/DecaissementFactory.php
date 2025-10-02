<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Decaissement>
 */
class DecaissementFactory extends Factory
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
            'fichier_justificatif' => $this->faker->filePath(), // simule un chemin de fichier
            'motif' => $this->faker->paragraph(),
            'date_decaissement' => $this->faker->date(),
            'montant' => $this->faker->randomFloat(2, 1000, 500000),

            'utilisateur_id' => $this->faker->numberBetween(1, 10),
            'ptba_id' => $this->faker->numberBetween(1, 5),
            'composant_id' => $this->faker->numberBetween(1, 10),
            'activite_id' => $this->faker->numberBetween(1, 15),

            'etat' => 1,
        ];
    }
}
