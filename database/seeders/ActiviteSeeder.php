<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Activite;

class ActiviteSeeder extends Seeder
{
    public function run(): void
    {
        Activite::factory()->count(20)->create();
    }
}
