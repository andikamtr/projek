<?php

namespace Database\Seeders;

use App\Models\Normal_Manajemen;
use Illuminate\Database\Seeder;

class Normal_ManajemenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 9; $i < 13; $i++) {
            Normal_Manajemen::create([
                'menu_id' => $i,
                'kepemimpinan' => 0,
                'perencanaan' => 0,
                'pengorganisasian' => 0,
                'pengarahan' => 0,
                'jumlah' => 0,
                'prioritas' => 0,
                'sub_prioritas' => 0,
            ]);
        }
    }
}
