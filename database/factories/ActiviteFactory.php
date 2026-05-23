<?php

namespace Database\Factories;

use App\Models\Activite;
use App\Models\Ptba;
use App\Models\Composant;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActiviteFactory extends Factory
{
    protected $model = Activite::class;

    public function definition(): array
    {
        return [
            'code' => $this->faker->unique()->bothify('ACT-###'), // ex: ACT-001
            'libelle' => $this->faker->sentence(3),
            'cout' => $this->faker->randomFloat(2, 100, 100000),
            'ptba_id' => Ptba::factory(),
            'composant_id' => Composant::factory(),
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
     * Associer à un composant spécifique.
     */
    public function pourComposant(int $composantId): static
    {
        return $this->state(fn (array $attributes) => [
            'composant_id' => $composantId,
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
     * Définir un code personnalisé.
     */
    public function code(string $code): static
    {
        return $this->state(fn (array $attributes) => [
            'code' => $code,
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
     * Définir un coût précis.
     */
    public function cout(float $cout): static
    {
        return $this->state(fn (array $attributes) => [
            'cout' => $cout,
        ]);
    }

    /**
     * Activité active.
     */
    public function actif(): static
    {
        return $this->state(fn (array $attributes) => [
            'etat' => 1,
        ]);
    }

    /**
     * Activité inactive.
     */
    public function inactif(): static
    {
        return $this->state(fn (array $attributes) => [
            'etat' => 0,
        ]);
    }
}
