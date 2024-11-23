<?php

namespace Database\Seeders;

use App\Models\NormalKriteria;
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
            NormalKriteria::create([
                'menu_id' => $i,
                'pendidikan' => 0,
                'absensi' => 0,
                'kedisiplinan' => 0,
                'prestasi' => 0,
                'jumlah' => 0,
                'prioritas' => 0,
            ]);
        }
    }
}
