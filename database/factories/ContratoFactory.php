<?php

namespace Database\Factories;

use App\Models\Cliente;
use App\Models\Servicio;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ContratoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $consecutivo = $this->faker->unique()->numberBetween(1111,9999);

        return [
            'fexpedicion' => $this->faker->date(),
            'consecutivo' => $consecutivo,
            'servicio_id' => Servicio::all()->random()->id,
            'cliente_id' => Cliente::all()->random()->id,
            'tarifa' => $this->faker->numberBetween(1,99),
            'fsalida' => $this->faker->date(),
            'fregreso' => $this->faker->date(),
            'origen' => $this->faker->word(),
            'destino' => $this->faker->word(),
            'nombreResponsable' => $this->faker->word(),
            'cedulaResponsable' => $this->faker->numberBetween(1111111111,9999999999),
            'contactoResponsable' => $this->faker->numberBetween(1111111111,9999999999),
            'observaciones' => $this->faker->randomElement(['BUENA','MALA']),
            'nrobebes' => $this->faker->numberBetween(1,99),
            'nroniños' => $this->faker->numberBetween(1,99),
            'nroadultos' => $this->faker->numberBetween(1,99),
            'nromayores' => $this->faker->numberBetween(1,99),
            'nroincapac' => $this->faker->numberBetween(1,99),
            'totalpasajeros' => $this->faker->numberBetween(1,99),
            'listapasajeros' => 'pasajeros_contratos/'.$this->faker->image('public/storage/pasajeros_contratos',640,480,null,false),
            'nrovehiculos' => $this->faker->numberBetween(1,99),
            'contratofirmado' => 'NO',
        ];
    }
}
