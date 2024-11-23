<?php

namespace Database\Seeders;

use App\Models\Normal_Komitmen;
use Illuminate\Database\Seeder;

class Normal_KomitmenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 5; $i++) {
            Normal_Komitmen::create([
                'menu_id' => $i,
                'loyal' => 0,
                'jujur' => 0,
                'tanggung_jawab' => 0,
                'disiplin' => 0,
                'jumlah' => 0,
                'prioritas' => 0,
                'sub_prioritas' => 0,
            ]);
        }
    }
}
