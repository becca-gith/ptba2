<?php

namespace Database\Factories;

use App\Models\Financement;
use App\Models\Bailleur;
use App\Models\Activite;
use Illuminate\Database\Eloquent\Factories\Factory;

class FinancementFactory extends Factory
{
    protected $model = Financement::class;

    public function definition(): array
    {
        return [
            'montant' => $this->faker->randomFloat(2, 1000, 1000000),
            'bailleur_id' => Bailleur::factory(),
            'activite_id' => Activite::factory(),
            'etat' => $this->faker->boolean(90) ? 1 : 0,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    /**
     * Associer à un bailleur spécifique.
     */
    public function pourBailleur(int $bailleurId): static
    {
        return $this->state(fn (array $attributes) => [
            'bailleur_id' => $bailleurId,
        ]);
    }

    /**
     * Associer à une activité spécifique.
     */
    public function pourActivite(int $activiteId): static
    {
        return $this->state(fn (array $attributes) => [
            'activite_id' => $activiteId,
        ]);
    }

    /**
     * Définir un montant précis.
     */
    public function montant(float $montant): static
    {
        return $this->state(fn (array $attributes) => [
            'montant' => $montant,
        ]);
    }

    /**
     * Financement actif (etat = 1).
     */
    public function actif(): static
    {
        return $this->state(fn (array $attributes) => [
            'etat' => 1,
        ]);
    }

    /**
     * Financement inactif (etat = 0).
     */
    public function inactif(): static
    {
        return $this->state(fn (array $attributes) => [
            'etat' => 0,
        ]);
    }
}
