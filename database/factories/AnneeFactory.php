<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Annee>
 */
class AnneeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'libelle' => $this->faker->unique()->randomElement([
                '2022-2023',
                '2023-2024',
                '2024-2025',
                '2025-2026',
            ]),
            'etat' => $this->faker->randomElement([0, 1]),
        ];
    }
}
