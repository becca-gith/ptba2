<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Financement;

class FinancementSeeder extends Seeder
{
    public function run(): void
    {
        Financement::factory()->count(10)->create();
    }
}
