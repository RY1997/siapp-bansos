<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InstallSeeder extends Seeder
{
    /**
     * Run the database seeds.
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
