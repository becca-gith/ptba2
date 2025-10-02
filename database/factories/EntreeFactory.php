<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Entree>
 */
class EntreeFactory extends Factory
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
            'motif' => $this->faker->paragraph(),
            'date_entre' => $this->faker->date(),
            'utilisateur_id' => $this->faker->numberBetween(1, 10),
            'etat' => 1,
        ];
    }
}
