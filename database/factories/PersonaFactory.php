<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PersonaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $nombre = $this->faker->unique()->word();
        return [
            'cedula' => $this->faker->numberBetween(1111111111,9999999999),
            'nombre' => $nombre,
            'apellido' => $this->faker->word(),
            'fijo' => $this->faker->numberBetween(1111111111,9999999999),
            'celular' => $this->faker->numberBetween(1111111111,9999999999),
            'direccion' => $this->faker->word(),
            'municipio' => $this->faker->word(),
            'barrio' => $this->faker->word(),
            'fechanac' => $this->faker->date(),
            'email' => $this->faker->word()
        ];
    }
}
