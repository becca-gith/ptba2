<?php

namespace Database\Factories;

use App\Models\Composant;
use App\Models\Ptba;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComposantFactory extends Factory
{
    protected $model = Composant::class;

    public function definition(): array
    {
        return [
            'libelle' => $this->faker->sentence(3), // ex: "Infrastructure réseau"
            'ptba_id' => Ptba::factory(),
            'financement' => $this->faker->randomFloat(2, 500, 500000), // entre 500 et 500k
            'user_id' => User::factory(),
            'etat' => $this->faker->boolean(90) ? 1 : 0,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    /**
     * Associer à un PTBA spécifique.
     */
    public function pourPtba(int $ptbaId): static
    {
        return $this->state(fn (array $attributes) => [
            'ptba_id' => $ptbaId,
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
     * Définir un libellé personnalisé.
     */
    public function libelle(string $libelle): static
    {
        return $this->state(fn (array $attributes) => [
            'libelle' => $libelle,
        ]);
    }

    /**
     * Définir un montant de financement précis.
     */
    public function financement(float $montant): static
    {
        return $this->state(fn (array $attributes) => [
            'financement' => $montant,
        ]);
    }

    /**
     * Composant actif.
     */
    public function actif(): static
    {
        return $this->state(fn (array $attributes) => [
            'etat' => 1,
        ]);
    }

    /**
     * Composant inactif.
     */
    public function inactif(): static
    {
        return $this->state(fn (array $attributes) => [
            'etat' => 0,
        ]);
    }
}
