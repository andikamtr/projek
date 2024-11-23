<?php

namespace Database\Seeders;

use App\Models\Sub_Manajemen;
use Illuminate\Database\Seeder;

class Sub_ManajemenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 9; $i < 13; $i++) {
            Sub_Manajemen::create([
                'menu_id' => $i,
                'kepemimpinan' => 0,
                'perencanaan' => 0,
                'pengorganisasian' => 0,
                'pengarahan' => 0,
                'jumlah' => 0,
            ]);
        }
    }
}
