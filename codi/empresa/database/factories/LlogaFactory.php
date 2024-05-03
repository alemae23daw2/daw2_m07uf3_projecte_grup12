<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Apartament;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lloga>
 */
class LlogaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dniClient' => factory(Client::class),
            'codiUnic' => factory(Apartament::class),
            'dataInici' => $this->faker->date(),
            'horaInici' => $this->faker->time(),
            'dataFinal' => $this->faker->date(),
            'horaFinal' => $this->faker->time(),
            'lliuramentClaus' => $this->faker->streetName(),
            'devolucioClaus' => $this->faker->streetName(),
            'preuPerDia' => $this->faker->randomFloat(2, 50, 500),
            'diposit' => $this->faker->randomElement(['si', 'no']),
            'dipositQuantitat' => $this->faker->randomFloat(2, 100, 1000),
            'tipusAsseguranca' => $this->faker->randomElement(['Franquícia fins a 1000 Euros', 'Franquícia fins a 500 Euros', 'Sense franquícia']),
        ];
    }
}
