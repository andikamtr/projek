<?php

namespace Database\Seeders;

use App\Models\Sub_Komitmen;
use Illuminate\Database\Seeder;

class Sub_KomitmenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 5; $i < 9; $i++) {
            Sub_Komitmen::create([
                'menu_id' => $i,
                'loyal' => 0,
                'jujur' => 0,
                'tanggung_jawab' => 0,
                'disiplin' => 0,
                'jumlah' => 0,
            ]);
        }
    }
}
