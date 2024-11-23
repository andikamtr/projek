<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::create([
            'nama' => "Pendidikan"
        ]);
        Menu::create([
            'nama' => "Absensi"
        ]);
        Menu::create([
            'nama' => "Kedisiplinan"
        ]);
        Menu::create([
            'nama' => "Prestasi"
        ]);
    }
}
