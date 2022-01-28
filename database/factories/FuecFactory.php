<?php

namespace Database\Factories;

use App\Models\Contrato;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class FuecFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $consecutivo = $this->faker->unique()->numberBetween(1111,9999);
        $ref = '305001316';
        $ano = '2021';
        $contrato = $this->faker->unique()->numberBetween(1111,9999);
        $nrofuec = $ref.$ano.$contrato.$consecutivo;

        return [
            'consecutivo' => $consecutivo,
            'nrofuec' => $nrofuec,
            'fexpedicion' => $this->faker->datetime(),
            'fvencimiento' => $this->faker->datetime(),
            'contrato_id' => Contrato::all()->random()->id
        ];
    }
}
