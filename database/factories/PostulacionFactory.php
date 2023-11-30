<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Postulacion>
 */
class PostulacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nombre = $this->faker->unique()->word(20);

        return [
            'nombre' => $nombre,
            'empresa' => $this->faker->company,
            'maps' => $this->faker->url,
            'agenda' => $this->faker->sentence(),
        ];
    }
}
