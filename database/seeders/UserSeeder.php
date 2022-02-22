<?php

namespace Database\Seeders;

use App\Models\Persona;
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
            'username' => 'admin',
            'status' => 1,
            'password' => bcrypt('123'),
            'persona_id' => 1,
        ])->assignRole('Administrador');
        //User::factory(3)->create();
    }
}
