<?php

namespace Database\Factories;

use App\Models\Bailleur;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BailleurFactory extends Factory
{
    protected $model = Bailleur::class;

    public function definition(): array
    {
        return [
            'code' => $this->faker->unique()->bothify('BAIL-###'), // ex: BAIL-001
            'logo' => $this->faker->optional(0.7)->imageUrl(100, 100, 'business', true, 'logo'), // 70% de chance
            'sigle' => $this->faker->optional()->lexify('???'), // ex: ABC, XYZ
            'nom' => $this->faker->company(),
            'email' => $this->faker->unique()->safeEmail(),
            'user_id' => User::factory(),
            'etat' => $this->faker->boolean(90) ? 1 : 0, // 90% actif
            'created_at' => now(),
            'updated_at' => now(),
        ];
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
     * Définir un sigle personnalisé.
     */
    public function sigle(string $sigle): static
    {
        return $this->state(fn (array $attributes) => [
            'sigle' => $sigle,
        ]);
    }

    /**
     * Bailleur actif.
     */
    public function actif(): static
    {
        return $this->state(fn (array $attributes) => [
            'etat' => 1,
        ]);
    }

    /**
     * Bailleur inactif.
     */
    public function inactif(): static
    {
        return $this->state(fn (array $attributes) => [
            'etat' => 0,
        ]);
    }

    /**
     * Avec logo (non null).
     */
    public function avecLogo(): static
    {
        return $this->state(fn (array $attributes) => [
            'logo' => $this->faker->imageUrl(100, 100, 'business', true, 'logo'),
        ]);
    }

    /**
     * Sans logo.
     */
    public function sansLogo(): static
    {
        return $this->state(fn (array $attributes) => [
            'logo' => null,
        ]);
    }
}
