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
            'code' => $this->faker->unique()->bothify('ACT-###'),
            'libelle' => $this->faker->sentence(3),
            'cout' => $this->faker->randomFloat(2, 50000, 2000000),

            'ptba_id' => $this->faker->numberBetween(1, 5),
            'composant_id' => $this->faker->numberBetween(1, 5),
            'utilisateur_id' => $this->faker->numberBetween(1, 5),

            'etat' => $this->faker->randomElement([0, 1]),
        ];
    }
}
