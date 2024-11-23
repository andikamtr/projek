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
                'komitmen' => 0,
                'manajemen' => 0,
                'kerja_sama' => 0,
                'hasil_kerja' => 0,
                'jumlah' => 0,
                'hasil' => 0,
            ]);
        }
    }
}
