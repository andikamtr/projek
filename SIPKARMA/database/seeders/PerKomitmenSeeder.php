<?php

namespace Database\Seeders;

use App\Models\PerKomitmen;
use Illuminate\Database\Seeder;

class PerKomitmenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 5; $i++) {
            PerKomitmen::create([
                'menu_id' => $i,
                'loyal' => 0,
                'jujur' => 0,
                'tanggung_jawab' => 0,
                'disiplin' => 0,
                'jumlah' => 0,
                'hasil' => 0,
            ]);
        }
    }
}