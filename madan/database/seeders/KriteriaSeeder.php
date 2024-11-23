<?php

namespace Database\Seeders;

use App\Models\Kriteria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kriteria::create([
            'kd_kriteria' => 'K1',
            'kriteria' => 'ATAP',
            'nilai' => 0.2,
        ]);
        Kriteria::create([
            'kd_kriteria' => 'K2',
            'kriteria' => 'LANTAI',
            'nilai' => 0.2,
        ]);
        Kriteria::create([
            'kd_kriteria' => 'K3',
            'kriteria' => 'DINDING',
            'nilai' => 0.2,
        ]);
        Kriteria::create([
            'kd_kriteria' => 'K4',
            'kriteria' => 'TANGGUNGAN',
            'nilai' => 0.2,
        ]);
        Kriteria::create([
            'kd_kriteria' => 'K5',
            'kriteria' => 'PENGHASILAN',
            'nilai' => 0.2,
        ]);
        Kriteria::create([
            'kd_kriteria' => 'K6',
            'kriteria' => 'KEPEMILIKAN RUMAH',
            'nilai' => 0.2,
        ]);
        Kriteria::create([
            'kd_kriteria' => 'K7',
            'kriteria' => 'MANDI CUCI KAKUS',
            'nilai' => 0.2,
        ]);
    }
}
