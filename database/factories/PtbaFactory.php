<?php

namespace Database\Factories;

use App\Models\Ptba;
use App\Models\Annee;
use App\Models\Projet;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PtbaFactory extends Factory
{
    protected $model = Ptba::class;

    public function definition(): array
    {
        return [
            'annee_id' => Annee::factory(),
            'projet_id' => Projet::factory(),
            'cout' => $this->faker->randomFloat(2, 1000, 1000000), // coût entre 1k et 1M
            'user_id' => User::factory(),
            'etat' => $this->faker->boolean(90) ? 1 : 0, // 90% actif
            'created_at' => now(),
            'updated_at' => now(),
        ];
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
     * Associer à un projet spécifique.
     */
    public function pourProjet(int $projetId): static
    {
        return $this->state(fn (array $attributes) => [
            'projet_id' => $projetId,
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
     * Définir un coût spécifique.
     */
    public function cout(float $cout): static
    {
        return $this->state(fn (array $attributes) => [
            'cout' => $cout,
        ]);
    }

    /**
     * Enregistrement actif (etat = 1).
     */
    public function actif(): static
    {
        return $this->state(fn (array $attributes) => [
            'etat' => 1,
        ]);
    }

    /**
     * Enregistrement inactif (etat = 0).
     */
    public function inactif(): static
    {
        return $this->state(fn (array $attributes) => [
            'etat' => 0,
        ]);
    }
}
