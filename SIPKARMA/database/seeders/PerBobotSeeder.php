<?php

namespace Database\Seeders;

use App\Models\PerBobot;
use Illuminate\Database\Seeder;

class PerBobotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 14; $i < 18; $i++) {
            PerBobot::create([
                'menu_id' => $i,
                'bagus_sekali' => 0,
                'bagus' => 0,
                'cukup' => 0,
                'kurang' => 0,
                'jumlah' => 0,
                'hasil' => 0,
            ]);
        }
    }
}
