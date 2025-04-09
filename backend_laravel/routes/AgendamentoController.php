<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agendamento;

class AgendamentoController extends Controller
{
    public function index()
    {
        return Agendamento::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'usuario_id' => 'required|string',
            'data' => 'required|date',
            'descricao' => 'required|string|max:255',
        ]);

        return Agendamento::create($validated);
    }
}
