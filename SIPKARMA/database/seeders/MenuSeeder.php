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
            'menu' => 'Komitmen'
        ]);
        Menu::create([
            'menu' => 'Manajemen'
        ]);
        Menu::create([
            'menu' => 'Kerja Sama'
        ]);
        Menu::create([
            'menu' => 'Hasil Kerja'
        ]);
        Menu::create([
            'menu' => 'Loyal'
        ]);
        Menu::create([
            'menu' => 'Jujur'
        ]);
        Menu::create([
            'menu' => 'Tanggung Jawab'
        ]);
        Menu::create([
            'menu' => 'Disiplin'
        ]);
        Menu::create([
            'menu' => 'Kepemimpinan'
        ]);
        Menu::create([
            'menu' => 'Perencanaan'
        ]);
        Menu::create([
            'menu' => 'Pengorganisasian'
        ]);
        Menu::create([
            'menu' => 'Pengarahan'
        ]);
        Menu::create([
            'menu' => 'Komunikasi'
        ]);
        Menu::create([
            'menu' => 'Beradaptasi'
        ]);
        Menu::create([
            'menu' => 'Berbagi Informasi'
        ]);
        Menu::create([
            'menu' => 'Kualitas'
        ]);
        Menu::create([
            'menu' => 'Kuantitas'
        ]);
        Menu::create([
            'menu' => 'Bagus Sekali'
        ]);
        Menu::create([
            'menu' => 'Bagus'
        ]);
        Menu::create([
            'menu' => 'Cukup'
        ]);
        Menu::create([
            'menu' => 'Kurang'
        ]);
    }
}
