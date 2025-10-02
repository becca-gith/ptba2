<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ptba;

class PtbaSeeder extends Seeder
{
    public function run(): void
    {
        Ptba::factory()->count(2)->create();
    }
}
