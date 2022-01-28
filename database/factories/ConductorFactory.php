<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ConductorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $numlicencia = $this->faker->unique()->numberBetween(111111,999999);
        $persona_id_conductor = $this->faker->unique()->numberBetween(1,10);
        return [
            'nrolicencia' => $numlicencia,
            'fvencimiento' => $this->faker->date(),
            'fingreso' => $this->faker->date(),
            'persona_id' => $persona_id_conductor,
            'slug' => Str::slug($numlicencia)
        ];
    }
}
