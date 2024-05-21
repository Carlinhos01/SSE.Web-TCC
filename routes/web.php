<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});


Route::get('/calendar', function () {
    return view('calendar');
});

// -----------------------------------------------------------
// Route::get('/formularioCadAluno',[AlunoController::class,'showCadAluno'])->name('formularioCadAluno');
// Route::post('/formularioAluno',[AlunoController::class,'cadAluno'])->name('envia_aluno');