<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Client>
 */
final class ClientFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = Client::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'dniClient' => $this->faker->unique()->randomNumber(8),
            'nomCognoms' => $this->faker->name(),
            'edat' => $this->faker->numberBetween(18, 80),
            'telefon' => $this->faker->phoneNumber(),
            'adreca' => $this->faker->streetAddress(),
            'ciutat' => $this->faker->city(),
            'pais' => $this->faker->country(),
            'email' => $this->faker->unique()->safeEmail(),
            'tipusTarjeta' => $this->faker->randomElement(['Dèbit', 'Crèdit']),
            'numeroTarjeta' => $this->faker->creditCardNumber(),
        ];
    }
}
