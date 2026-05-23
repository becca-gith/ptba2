<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Annee;
use App\Models\Projet;
use App\Models\User;
use App\Models\Ligne;
use App\Models\Ptba;
use App\Models\Composant;
use App\Models\Activite;
use App\Models\Operation;
use App\Models\Bailleur;
use App\Models\Financement;
use App\Models\Depense;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Créer des années budgétaires (ex: 2024,2025,2026)
        Annee::factory()->count(3)->create();

        // 2. Créer des projets
        Projet::factory()->count(5)->create();

        // 3. Créer des utilisateurs (avec rôles variés)
        User::factory()->count(10)->create();

        // 4. Créer des lignes budgétaires (liées à une année et un utilisateur)
        Ligne::factory()->count(20)->create();

        // 5. Créer des PTBA (liés à année, projet, utilisateur)
        Ptba::factory()->count(15)->create();

        // 6. Créer des composants (liés à PTBA et utilisateur)
        Composant::factory()->count(30)->create();

        // 7. Créer des activités (liées à PTBA, composant, utilisateur)
        Activite::factory()->count(40)->create();

        // 8. Créer des opérations (liées à activité et utilisateur)
        Operation::factory()->count(50)->create();

        // 9. Créer des bailleurs de fonds
        Bailleur::factory()->count(8)->create();

        // 10. Créer des financements (liés à bailleur et activité)
        Financement::factory()->count(25)->create();

        // 11. Créer des dépenses (liées à année, ligne budgétaire et utilisateur)
        Depense::factory()->count(30)->create();
    }
}
