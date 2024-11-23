<?php

namespace Database\Seeders;

use App\Models\Bobot;
use Illuminate\Database\Seeder;

class BobotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 14; $i < 18; $i++) {
            Bobot::create([
                'menu_id' => $i,
                'bagus_sekali' => 0,
                'bagus' => 0,
                'cukup' => 0,
                'kurang' => 0,
                'jumlah' => 0,
            ]);
        }
    }
}