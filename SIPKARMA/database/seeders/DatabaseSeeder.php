<?php

namespace Database\Seeders;

use App\Models\Normal_Manajemen;
use App\Models\PerKriteria;
use App\Models\PerManajemen;
use App\Models\Sub_Manajemen;
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
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            KriteriaSeeder::class,
            MenuSeeder::class,
            NormalKriteriaSeeder::class,
            PerKriteriaSeeder::class,
            Sub_KomitmenSeeder::class,
            Normal_KomitmenSeeder::class,
            PerKomitmenSeeder::class,
            Sub_ManajemenSeeder::class,
            Normal_ManajemenSeeder::class,
            PerManajemenSeeder::class,
            Sub_KerjasamaSeeder::class,
            Normal_KerjasamaSeeder::class,
            PerKerjasamaSeeder::class,
            Sub_HasilkerjaSeeder::class,
            Normal_HasilkerjaSeeder::class,
            PerHasilkerjaSeeder::class,
            BobotSeeder::class,
            Normal_BobotSeeder::class,
            PerBobotSeeder::class,
        ]);
    }
}
