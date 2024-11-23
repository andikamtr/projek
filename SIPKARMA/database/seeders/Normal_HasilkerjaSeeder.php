<?php

namespace Database\Seeders;

use App\Models\Normal_Hasilkerja;
use Illuminate\Database\Seeder;

class Normal_HasilkerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 12; $i < 14; $i++) {
            Normal_Hasilkerja::create([
                'menu_id' => $i,
                'kualitas' => 0,
                'kuantitas' => 0,
                'jumlah' => 0,
                'prioritas' => 0,
                'sub_prioritas' => 0,
            ]);
        }
    }
}
