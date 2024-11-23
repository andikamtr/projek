<?php

namespace Database\Seeders;

use App\Models\normal_kriteria;
use Illuminate\Database\Seeder;

class NormalKriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 5; $i++) {
            normal_kriteria::create([
                'menu_id' => $i,
                'komitmen' => 0,
                'manajemen' => 0,
                'kerja_sama' => 0,
                'hasil_kerja' => 0,
                'jumlah' => 0,
                'prioritas' => 0,
            ]);
        }
    }
}
