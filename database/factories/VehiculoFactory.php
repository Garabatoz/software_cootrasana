<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class VehiculoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $numinterno = $this->faker->unique()->numberBetween(1111,9999);
        return [
            'numinterno' => $numinterno,
            'placa' => $this->faker->numberBetween(111,999),
            'modelo' => $this->faker->numberBetween(1111,9999),
            'marca' => $this->faker->word(),
            'clase' => $this->faker->word(),
            'tarjetaop' => $this->faker->numberBetween(1111,9999),
            'vencrtm' => $this->faker->date(),
            'vencsoat' => $this->faker->date(),
            'vencpreopera' => $this->faker->date(),
            'slug' => Str::slug($numinterno)
        ];
    }
}
