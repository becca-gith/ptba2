<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProjetFactory extends Factory
{
    public function definition()
    {
        return [
            'libelle' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'etat' => $this->faker->randomElement([0, 1]),
        ];
    }
}

