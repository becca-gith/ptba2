<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition(): array
    {
        return [
            'nom_prenom' => $this->faker->name(),
            'login' => $this->faker->unique()->userName(),
            'telephone' => $this->faker->optional()->phoneNumber(),
            'mot_passe' => Hash::make('password'), // mot de passe par défaut : 'password'
            'role' => $this->faker->numberBetween(1, 3), // ex: 1=admin, 2=manager, 3=user
            'etat' => $this->faker->boolean(95) ? 1 : 0, // 95% actif
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    /**
     * Définir un rôle spécifique.
     */
    public function role(int $role): static
    {
        return $this->state(fn (array $attributes) => [
            'role' => $role,
        ]);
    }

    /**
     * Rôle administrateur (par exemple 1).
     */
    public function admin(): static
    {
        return $this->state(fn (array $attributes) => [
            'role' => 1,
        ]);
    }

    /**
     * Rôle gestionnaire (2).
     */
    public function gestionnaire(): static
    {
        return $this->state(fn (array $attributes) => [
            'role' => 2,
        ]);
    }

    /**
     * Rôle utilisateur standard (3).
     */
    public function utilisateur(): static
    {
        return $this->state(fn (array $attributes) => [
            'role' => 3,
        ]);
    }

    /**
     * Utilisateur actif (état = 1).
     */
    public function actif(): static
    {
        return $this->state(fn (array $attributes) => [
            'etat' => 1,
        ]);
    }

    /**
     * Utilisateur inactif (état = 0).
     */
    public function inactif(): static
    {
        return $this->state(fn (array $attributes) => [
            'etat' => 0,
        ]);
    }

    /**
     * Définir un login spécifique (utile pour un super-admin).
     */
    public function login(string $login): static
    {
        return $this->state(fn (array $attributes) => [
            'login' => $login,
        ]);
    }

    /**
     * Définir un mot de passe brut (sera hashé automatiquement).
     */
    public function motDePasse(string $plainPassword): static
    {
        return $this->state(fn (array $attributes) => [
            'mot_passe' => Hash::make($plainPassword),
        ]);
    }
}
