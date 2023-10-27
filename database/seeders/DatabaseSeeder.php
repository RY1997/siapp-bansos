<?php

namespace Database\Seeders;

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
            DataUserSeeder::class,
            DataBaselineSeeder::class,
            DataOPDSeeder::class,
            DataPemdaSeeder::class,
            DataRekeningSeeder::class,
        ]);
    }
}
