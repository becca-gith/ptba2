<?php

namespace Database\Seeders;



// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UtilisateurSeeder::class,
            PtbaSeeder::class,
            ComposantSeeder::class,
            ActiviteSeeder::class,
            AnneeSeeder::class,
            EntreeSeeder::class,
            DecaissementSeeder::class,
            OperationSeeder::class,
        ]);
    }
}
