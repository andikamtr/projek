<?php

namespace Database\Seeders;

use App\Models\PerManajemen;
use Illuminate\Database\Seeder;

class PerManajemenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 5; $i++) {
            PerManajemen::create([
                'menu_id' => $i,
                'kepemimpinan' => 0,
                'perencanaan' => 0,
                'pengorganisasian' => 0,
                'pengarahan' => 0,
                'jumlah' => 0,
                'hasil' => 0,
            ]);
        }
    }
}
