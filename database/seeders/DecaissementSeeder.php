<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Decaissement;

class DecaissementSeeder extends Seeder
{
    public function run(): void
    {
        Decaissement::factory()->count(10)->create();
    }
}
