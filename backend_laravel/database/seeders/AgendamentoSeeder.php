<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Agendamento;

class AgendamentoSeeder extends Seeder
{
    public function run(): void
    {
        Agendamento::factory()->count(10)->create();
    }
}
