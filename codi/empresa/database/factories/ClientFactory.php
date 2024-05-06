<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nums = $this->faker->numberBetween(10000000, 99999999);
        return [
            'dniClient' => $nums,
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
