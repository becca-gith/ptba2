<?php

namespace Database\Factories;

use App\Models\Composant;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComposantFactory extends Factory
{
    protected $model = Composant::class;

    public function definition()
    {
        return [
            'libelle'        => $this->faker->words(3, true),   // Exemple : "Projet Développement A"
            'ptba_id'        => \App\Models\Ptba::factory(),    // Relation si tu as un modèle Ptba
            'montant'        => $this->faker->randomFloat(2, 1000, 100000), // Montant aléatoire
            'utilisateur_id' => \App\Models\Utilisateur::factory(), // Relation si tu as un modèle Utilisateur
            'etat'           => 1, // Actif par défaut
        ];
    }
}
