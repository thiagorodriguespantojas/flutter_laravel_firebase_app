<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AgendamentoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'usuario_id' => $this->faker->uuid(),
            'data' => $this->faker->dateTimeBetween('+1 days', '+10 days'),
            'descricao' => $this->faker->sentence(4),
        ];
    }
}
