<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\MatriculaController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('/curso', CursoController::class);
Route::resource('/disciplina', DisciplinaController::class);
Route::resource('/aluno', AlunoController::class);
// Matrículas: rotas manuais para suportar chave composta (disciplina_id + aluno_id)
Route::get('/matricula', [MatriculaController::class, 'index'])->name('matricula.index');
Route::get('/matricula/create', [MatriculaController::class, 'create'])->name('matricula.create');
Route::post('/matricula', [MatriculaController::class, 'store'])->name('matricula.store');
Route::get('/matricula/{disciplina}/{aluno}', [MatriculaController::class, 'show'])->name('matricula.show');
Route::get('/matricula/{disciplina}/{aluno}/edit', [MatriculaController::class, 'edit'])->name('matricula.edit');
Route::put('/matricula/{disciplina}/{aluno}', [MatriculaController::class, 'update'])->name('matricula.update');
Route::delete('/matricula/{disciplina}/{aluno}', [MatriculaController::class, 'destroy'])->name('matricula.destroy');
