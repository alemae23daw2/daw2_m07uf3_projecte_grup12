<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Usuari;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Usuari>
 */
final class UsuariFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = Usuari::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'nomCognoms' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'contrasenya' => $this->faker->password(),
            'tipus' => $this->faker->randomElement(['treballador', 'cap de departament']),
            'horaEntrada' => $this->faker->time('H:i:s'),
            'horaSortida' => $this->faker->time('H:i:s'),
        ];
    }
}
