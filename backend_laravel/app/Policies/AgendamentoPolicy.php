<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Agendamento;

class AgendamentoPolicy
{
    public function view(User $user, Agendamento $agendamento)
    {
        return $user->id === $agendamento->usuario_id;
    }

    public function update(User $user, Agendamento $agendamento)
    {
        return $user->id === $agendamento->usuario_id;
    }

    public function delete(User $user, Agendamento $agendamento)
    {
        return $user->id === $agendamento->usuario_id;
    }
}
