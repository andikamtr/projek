<?php

namespace Database\Seeders;

use App\Models\Kriteria;
use Illuminate\Database\Seeder;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 4; $i++) {
            Kriteria::create([
                'menu_id' => $i,
                'pendidikan' => 0,
                'absensi' => 0,
                'kedisiplinan' => 0,
                'prestasi' => 0,
                'jumlah' => 0,
            ]);
        }
    }
}
