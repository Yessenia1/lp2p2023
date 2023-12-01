<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PlanInicial>
 */
class PlanInicialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'convocatoria' => $this->faker->sentence,
            'fechainicio' => $this->faker->date,
            'puesto' => $this->faker->jobTitle,
            'jefe' => $this->faker->name,
            'remuneracion' => $this->faker->randomElement(['si', 'no']),
            'monto' => $this->faker->randomFloat(2, 1000, 10000),
            'empresa' => $this->faker->company,
            'fechafinprac' => $this->faker->date,
            'horario' => $this->faker->time,
            'celular' => $this->faker->phoneNumber,
            'adjuntar' => $this->faker->word . '.pdf',
        ];
    }
}
