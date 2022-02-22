<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\Conductor;
use App\Models\Contrato;
use App\Models\Fuec;
use App\Models\Persona;
use App\Models\Prueba;
use App\Models\Servicio;
use App\Models\TipoCliente;
use App\Models\Vehiculo;
use Database\Factories\PruebaFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Storage::deleteDirectory('pasajeros_contratos');
        Storage::makeDirectory('pasajeros_contratos');
        Persona::factory(10)->create();
        Vehiculo::factory(10)->create();
        TipoCliente::factory(10)->create();
        Cliente::factory(10)->create();
        $this->call(ServicioSeeder::class);
        $this->call(ContratoSeeder::class);
        Fuec::factory(10)->create();
        Prueba::factory(10)->create();
        $this->call(RoleSeeder::class);
        //Conductor::factory(10)->create();
        $this->call(UserSeeder::class);
    }
}
