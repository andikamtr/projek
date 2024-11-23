<?php

namespace Database\Seeders;

use App\Models\Sub_Hasilkerja;
use Illuminate\Database\Seeder;

class Sub_HasilkerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 12; $i < 14; $i++) {
            Sub_Hasilkerja::create([
                'menu_id' => $i,
                'kualitas' => 0,
                'kuantitas' => 0,
                'jumlah' => 0,
            ]);
        }
    }
}
