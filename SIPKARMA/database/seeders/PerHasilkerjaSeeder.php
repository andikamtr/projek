<?php

namespace Database\Seeders;

use App\Models\PerHasilkerja;
use Illuminate\Database\Seeder;

class PerHasilkerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 12; $i < 14; $i++) {
            PerHasilkerja::create([
                'menu_id' => $i,
                'kualitas' => 0,
                'kuantitas' => 0,
                'jumlah' => 0,
                'hasil' => 0,
            ]);
        }
    }
}
