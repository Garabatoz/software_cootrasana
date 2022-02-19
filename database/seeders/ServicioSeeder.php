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
            'servicio' => 'Empresarial',
            'slug' => 'empresarial'
        ]);
        Servicio::create
        ([
            'servicio' => 'Escolar',
            'slug' => 'escolar'
        ]);
        Servicio::create
        ([
            'servicio' => 'Turismo',
            'slug' => 'turismo'
        ]);
        Servicio::create
        ([
            'servicio' => 'Ocasional',
            'slug' => 'ocasional'
        ]);
        Servicio::create
        ([
            'servicio' => 'Salud',
            'slug' => 'salud'
        ]);

    }
}
