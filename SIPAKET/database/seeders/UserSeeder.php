<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => "admin",
            'email' => "andiseven17@gmail.com",
            'password' => bcrypt('admin')
        ]);
        User::create([
            'username' => "user",
            'email' => "andiseven17@gmail.com",
            'password' => bcrypt('user')
        ]);
        User::create([
            'username' => "ksdm",
            'email' => "andiseven17@gmail.com",
            'password' => bcrypt('ksdm')
        ]);
    }
}
