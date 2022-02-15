<?php

namespace Database\Seeders;

use App\Models\Servicio;
use Illuminate\Database\Seeder;

class ServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Servicio::create
        ([
            'servicio' => 'Empresarial'
        ]);
        Servicio::create
        ([
            'servicio' => 'Escolar'
        ]);
        Servicio::create
        ([
            'servicio' => 'Turismo'
        ]);
        Servicio::create
        ([
            'servicio' => 'Ocasional'
        ]);
        Servicio::create
        ([
            'servicio' => 'Salud'
        ]);

    }
}
