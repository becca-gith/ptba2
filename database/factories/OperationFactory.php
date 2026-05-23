<?php

namespace Database\Factories;

use App\Models\Operation;
use App\Models\Activite;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OperationFactory extends Factory
{
    protected $model = Operation::class;

    public function definition(): array
    {
        return [
            'libelle' => $this->faker->sentence(3),
            'montant' => $this->faker->randomFloat(2, 10, 50000), // float avec 2 décimales
            'statut' => $this->faker->numberBetween(0, 3), // ex: 0=brouillon,1=soumis,2=validé,3=rejeté
            'justificatif' => $this->faker->optional(0.6)->filePath(), // 60% de chance d'avoir un justificatif
            'date_operation' => $this->faker->dateTimeBetween('-6 months', 'now')->format('Y-m-d'),
            'activite_id' => Activite::factory(),
            'user_id' => User::factory(),
            'etat' => $this->faker->boolean(90) ? 1 : 0,
            'created_at' => now(),
            'updated_at' => now(),
        ];
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
     * Associer à un utilisateur spécifique.
     */
    public function pourUser(int $userId): static
    {
        return $this->state(fn (array $attributes) => [
            'user_id' => $userId,
        ]);
    }

    /**
     * Définir un statut particulier.
     * @param int $statut 0=brouillon,1=soumis,2=validé,3=rejeté
     */
    public function statut(int $statut): static
    {
        return $this->state(fn (array $attributes) => [
            'statut' => $statut,
        ]);
    }

    /**
     * Opération validée.
     */
    public function validee(): static
    {
        return $this->state(fn (array $attributes) => [
            'statut' => 2,
        ]);
    }

    /**
     * Opération en attente de validation.
     */
    public function soumise(): static
    {
        return $this->state(fn (array $attributes) => [
            'statut' => 1,
        ]);
    }

    /**
     * Opération rejetée.
     */
    public function rejetee(): static
    {
        return $this->state(fn (array $attributes) => [
            'statut' => 3,
        ]);
    }

    /**
     * Avec justificatif obligatoire.
     */
    public function avecJustificatif(): static
    {
        return $this->state(fn (array $attributes) => [
            'justificatif' => $this->faker->filePath(),
        ]);
    }

    /**
     * Sans justificatif.
     */
    public function sansJustificatif(): static
    {
        return $this->state(fn (array $attributes) => [
            'justificatif' => null,
        ]);
    }

    /**
     * Opération active (etat=1).
     */
    public function actif(): static
    {
        return $this->state(fn (array $attributes) => [
            'etat' => 1,
        ]);
    }

    /**
     * Opération inactive (etat=0).
     */
    public function inactif(): static
    {
        return $this->state(fn (array $attributes) => [
            'etat' => 0,
        ]);
    }
}
