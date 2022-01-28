<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class TipoClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $tipoCliente = $this->faker->unique()->word();
        return [
            'tipoCliente' => $tipoCliente,
            'slug' => Str::slug($tipoCliente)
        ];
    }
}
