<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Historique;

class HistoriqueSeeder extends Seeder
{
    public function run(): void
    {
        Historique::factory()->count(10)->create();
    }
}
