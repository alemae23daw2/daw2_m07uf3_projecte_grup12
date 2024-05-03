<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Apartament>
 */
class ApartamentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $numero = $this->faker->numberBetween(1000, 9999);
        $letras = $this->faker->lexify('???');
        $codigo = $numero . $letras;
        return [
            'codiUnic' => $codigo,
            'referencia' => $this->faker->word(),
            'ciutat' => $this->faker->city(),
            'barri' => $this->faker->streetName(),
            'nomCarrer' => $this->faker->streetName(),
            'numCarrer' => $this->faker->buildingNumber(),
            'pis' => $this->faker->numberBetween(1, 20),
            'numLlits' => $this->faker->numberBetween(1, 5),
            'numHabitacions' => $this->faker->numberBetween(1, 5),
            'ascensor' => $this->faker->randomElement(['si', 'no']),
            'calefaccio' => $this->faker->randomElement(['Elèctrica', 'Gas Natural', 'Butá']),
            'aireCondicionat' => $this->faker->randomElement(['si', 'no']),
        ];
    }
}
