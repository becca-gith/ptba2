<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Composant;

class ComposantSeeder extends Seeder
{
    public function run(): void
    {
        Composant::factory()->count(4)->create();
    }
}
