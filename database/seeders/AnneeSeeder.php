<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Annee;

class AnneeSeeder extends Seeder
{
    public function run(): void
    {
        Annee::factory()->count(2)->create();
    }
}
