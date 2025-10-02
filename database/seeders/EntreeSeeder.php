<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Entree;

class EntreeSeeder extends Seeder
{
    public function run(): void
    {
        Entree::factory()->count(10)->create();
    }
}
