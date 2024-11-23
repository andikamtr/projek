<?php

namespace Database\Seeders;

use App\Models\PerKriteria;
use Illuminate\Database\Seeder;

class PerKriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 5; $i++) {
            PerKriteria::create([
                'menu_id' => $i,
                'pendidikan' => 0,
                'absensi' => 0,
                'kedisiplinan' => 0,
                'prestasi' => 0,
                'jumlah' => 0,
                'hasil' => 0,
            ]);
        }
    }
}
