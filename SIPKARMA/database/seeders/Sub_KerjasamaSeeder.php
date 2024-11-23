<?php

namespace Database\Seeders;

use App\Models\Sub_Kerjasama;
use Illuminate\Database\Seeder;

class Sub_KerjasamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 9; $i < 12; $i++) {
            Sub_Kerjasama::create([
                'menu_id' => $i,
                'komunikasi' => 0,
                'beradaptasi' => 0,
                'berbagi_informasi' => 0,
                'jumlah' => 0,
            ]);
        }
    }
}
