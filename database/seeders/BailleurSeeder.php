<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bailleur;

class BailleurSeeder extends Seeder
{
    public function run(): void
    {
        Bailleur::factory()->count(10)->create();
    }
}
