<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ServicioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $servicio = $this->faker->unique()->word();
        return [
            'servicio' => $servicio,
            'slug' => Str::slug($servicio)
        ];
    }
}
