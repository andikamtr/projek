<?php

namespace Database\Seeders;

use App\Models\PerKerjasama;
use Illuminate\Database\Seeder;

class PerKerjasamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 9; $i < 12; $i++) {
            PerKerjasama::create([
                'menu_id' => $i,
                'komunikasi' => 0,
                'beradaptasi' => 0,
                'berbagi_informasi' => 0,
                'jumlah' => 0,
                'hasil' => 0,
            ]);
        }
    }
}
