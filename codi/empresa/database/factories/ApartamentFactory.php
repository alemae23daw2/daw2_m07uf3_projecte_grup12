<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Apartament;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Apartament>
 */
final class ApartamentFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = Apartament::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'codiUnic' => $this->faker->unique()->uuid(),
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
