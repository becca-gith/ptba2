<?php

namespace Database\Factories;

use App\Models\Depense;
use App\Models\Annee;
use App\Models\Ligne;
use Illuminate\Database\Eloquent\Factories\Factory;

class DepenseFactory extends Factory
{
    protected $model = Depense::class;

    public function definition(): array
    {
        return [
            'motif' => $this->faker->sentence(4), // ex: "Achat fournitures bureau"
            'montant' => $this->faker->randomFloat(2, 10, 50000), // 10 € à 50 000 €
            'date_depense' => $this->faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
            'annee_id' => Annee::factory(), // suppose que AnneeFactory existe
            'ligne_id' => Ligne::factory(), // suppose que LignesFactory existe
            'piece_justificatif' => $this->faker->optional(0.7)->filePath(), // 70% du temps un chemin de fichier
            'etat' => $this->faker->boolean(90) ? 1 : 0, // 90% actif
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    /**
     * Indiquer que la dépense est active (état=1).
     */
    public function actif(): static
    {
        return $this->state(fn (array $attributes) => [
            'etat' => 1,
        ]);
    }

    /**
     * Indiquer que la dépense est inactive (état=0).
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

    /**
     * Associer à une ligne budgétaire spécifique.
     */
    public function pourLigne(int $ligneId): static
    {
        return $this->state(fn (array $attributes) => [
            'ligne_id' => $ligneId,
        ]);
    }

    /**
     * Définir une date de dépense particulière.
     */
    public function dateDepense(string $date): static
    {
        return $this->state(fn (array $attributes) => [
            'date_depense' => $date,
        ]);
    }
}
