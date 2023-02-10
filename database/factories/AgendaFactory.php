<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agenda>
 */
class AgendaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //crear fecha entre un rango de fechas
            'fecha' => $this->faker->dateTimeBetween('now', '+5 days'),
            //crear hora entre un rango de horas
            'hora' => $this->faker->dateTimeBetween('08:00', '18:00'),
            'medico_id' => $this->faker->numberBetween(2, 10),
            'procedimiento_id' => $this->faker->numberBetween(1, 10),
            'tipo' => $this->faker->numberBetween(1, 2),
            'estado' => $this->faker->numberBetween(1, 3),
        ];
    }
}
