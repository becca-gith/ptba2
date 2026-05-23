<?php

namespace Database\Factories;

use App\Models\Ligne;
use App\Models\Annee; // suppose que le modèle Annee existe
use Illuminate\Database\Eloquent\Factories\Factory;

class LigneFactory extends Factory
{
    protected $model = Ligne::class;

    public function definition(): array
    {
        return [
            'libelle' => $this->faker->sentence(3), // ex: "Budget marketing"
            'prevision' => $this->faker->randomFloat(2, 1000, 1000000), // 1000 à 1M €
            'taux_autorisation' => $this->faker->numberBetween(0, 100), // 0-100%
            'annee_id' => Annee::factory(), // crée une année associée ou utilise une existante
            'etat' => $this->faker->boolean(80) ? 1 : 0, // 80% actif, 20% inactif
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    /**
     * Indiquer que la ligne est active (état=1).
     */
    public function actif(): static
    {
        return $this->state(fn (array $attributes) => [
            'etat' => 1,
        ]);
    }

    /**
     * Indiquer que la ligne est inactive (état=0).
     */
    public function inactif(): static
    {
        return $this->state(fn (array $attributes) => [
            'etat' => 0,
        ]);
    }

    /**
     * Associer à une année spécifique.
     */
    public function pourAnnee(int $anneeId): static
    {
        return $this->state(fn (array $attributes) => [
            'annee_id' => $anneeId,
        ]);
    }
}
