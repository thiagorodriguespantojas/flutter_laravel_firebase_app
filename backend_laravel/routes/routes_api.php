<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/agendamentos', 'App\Http\Controllers\AgendamentoController@index');
Route::post('/agendamentos', 'App\Http\Controllers\AgendamentoController@store');
