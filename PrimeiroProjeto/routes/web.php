<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ExercicioController;

Route::get('/paginainicial', function () {
    return view('welcome');
});

//Rota para abrir o formulário do exercício 1
Route::get('/exercicio', [ExercicioController::class, 'exibirFormulario']);
//Formulario para receber os dados do formulário do exercício 1
Route::post('/resposta', [ExercicioController::class, 'calcularSoma']);

Route::get('/exercicio2', [ExercicioController::class, 'exibirFormulario2']);
Route::post('/resposta2', [ExercicioController::class, 'calcularSub']);

Route::get('/exercicio3', [ExercicioController::class, 'exibirFormulario3']);
Route::post('/resposta3', [ExercicioController::class, 'calcularMult']);

Route::get('/exercicio4', [ExercicioController::class, 'exibirFormulario4']);
Route::post('/resposta4', [ExercicioController::class, 'calcularDiv']);

Route::get('/exercicio5', [ExercicioController::class, 'exibirFormulario5']);
Route::post('/resposta5', [ExercicioController::class, 'calcularMedia']);

Route::get('/exercicio6', [ExercicioController::class, 'exibirFormulario6']);
Route::post('/resposta6', [ExercicioController::class, 'calcularFahrenheit']);

Route::get('/exercicio7', [ExercicioController::class, 'exibirFormulario7']);
Route::post('/resposta7', [ExercicioController::class, 'calcularCelsius']);

Route::get('/exercicio8', [ExercicioController::class, 'exibirFormulario8']);
Route::post('/resposta8', [ExercicioController::class, 'calcularAreaRetangulo']);

Route::get('/exercicio9', [ExercicioController::class, 'exibirFormulario9']);
Route::post('/resposta9', [ ExercicioController::class, 'calcularAreaCirculo']);

Route::get('/exercicio10', [ExercicioController::class, 'exibirFormulario10']);
Route::post('/resposta10', [ExercicioController::class, 'calcularPerimetroRetangulo']);

Route::get('/exercicio11', [ExercicioController::class, 'exibirFormulario11']);
Route::post('/resposta11', [ExercicioController::class, 'calcularPerimetroCirculo']);

Route::get('/exercicio12', [ExercicioController::class, 'exibirFormulario12']);
Route::post('/resposta12', [ExercicioController::class, 'calcularBaseExpoente']);

Route::get('/exercicio13', [ExercicioController::class, 'exibirFormulario13']);
Route::post('/resposta13', [ExercicioController::class, 'calcularCentimetro']);