<?php

namespace Database\Factories;

use App\Models\Annee;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnneeFactory extends Factory
{
    protected $model = Annee::class;

    public function definition(): array
    {
        return [
            'libelle' => $this->faker->year(), // ex: "2024", "2025"
            'statut' => $this->faker->numberBetween(0, 2), // ex: 0=fermé, 1=en cours, 2=clôturé
            'etat' => $this->faker->boolean(90) ? 1 : 0, // 90% actif
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    /**
     * Définir un libellé spécifique (ex: "2025").
     */
    public function libelle(string $libelle): static
    {
        return $this->state(fn (array $attributes) => [
            'libelle' => $libelle,
        ]);
    }

    /**
     * Définir un statut particulier.
     */
    public function statut(int $statut): static
    {
        return $this->state(fn (array $attributes) => [
            'statut' => $statut,
        ]);
    }

    /**
     * Année active (état = 1).
     */
    public function actif(): static
    {
        return $this->state(fn (array $attributes) => [
            'etat' => 1,
        ]);
    }

    /**
     * Année inactive (état = 0).
     */
    public function inactif(): static
    {
        return $this->state(fn (array $attributes) => [
            'etat' => 0,
        ]);
    }
}
