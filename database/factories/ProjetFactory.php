<?php

namespace Database\Factories;

use App\Models\Projet;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjetFactory extends Factory
{
    protected $model = Projet::class;

    public function definition(): array
    {
        return [
            'libelle' => $this->faker->unique()->sentence(2), // ex: "Projet Alpha"
            'description' => $this->faker->optional()->paragraph(2), // optionnel, 2 phrases
            'etat' => $this->faker->boolean(90) ? 1 : 0, // 90% actif
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    /**
     * Définir un libellé spécifique.
     */
    public function libelle(string $libelle): static
    {
        return $this->state(fn (array $attributes) => [
            'libelle' => $libelle,
        ]);
    }

    /**
     * Définir une description personnalisée.
     */
    public function description(string $description): static
    {
        return $this->state(fn (array $attributes) => [
            'description' => $description,
        ]);
    }

    /**
     * Projet actif (etat = 1).
     */
    public function actif(): static
    {
        return $this->state(fn (array $attributes) => [
            'etat' => 1,
        ]);
    }

    /**
     * Projet inactif (etat = 0).
     */
    public function inactif(): static
    {
        return $this->state(fn (array $attributes) => [
            'etat' => 0,
        ]);
    }
}
