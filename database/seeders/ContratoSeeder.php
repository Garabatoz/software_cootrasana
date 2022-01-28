<?php

namespace Database\Seeders;

use App\Models\Contrato;
use Illuminate\Database\Seeder;

class ContratoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contratos = Contrato::factory(10)->create();

        foreach($contratos as $contrato)
        {
            /* $contrato->conductors()->attach
            ([
                rand(1,4),
                rand(5,8)
            ]); */
            $contrato->vehiculos()->attach
            ([
                rand(1,4),
                rand(5,8)
            ]);

        }
    }
}
