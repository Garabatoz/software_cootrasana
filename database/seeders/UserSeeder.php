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
        User::create
        ([
            'name' => 'Edison Andres Leon',
            'email' => 'andresleon90s@gmail.com',
            'username' => '1036633625',
            'condition' => '1',
            'password' => bcrypt('123'),
        ])->assignRole('Administrador');
        User::factory(9)->create();
    }
}
