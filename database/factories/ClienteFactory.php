<?php

namespace Database\Factories;

use App\Models\Cliente;
use App\Models\TipoCliente;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $persona_id_cliente = $this->faker->unique()->numberBetween(1,10);
        return [
            'tipoCliente_id' => TipoCliente::all()->random()->id,
            'persona_id' =>  $persona_id_cliente,
        ];
    }
}
