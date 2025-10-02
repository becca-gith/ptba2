<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Utilisateur>
 */
class UtilisateurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom_prenom' => $this->faker->name(),
            'login_utilisateur' => $this->faker->unique()->userName(),
            'telephone' => $this->faker->phoneNumber(),
            'mot_passe' => bcrypt('password'), // mot de passe par défaut hashé
            'role' => $this->faker->numberBetween(1, 3), // adapte selon tes rôles
            'etat' => 1,
        ];
    }
}
