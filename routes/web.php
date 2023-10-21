<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\AulaController;

Route::get('/',[CategoriaController::class,'index'])->name('index');


Route::get('/cadcategoria',[CategoriaController::class,'mostrarFormCategoria'])->name("form-cadastro-categoria");
Route::post('/cadcategoria', [CategoriaController::class, 'cadastroCategoria'])->name("cadastro-categoria");

Route::get('/cadcurso',[CursoController::class,'mostrarFormCurso'])->name("form-cadastro-curso");
Route::post('/cadcurso', [CursoController::class, 'cadastroCurso'])->name("cadastro-curso");

Route::get('/cadaula',[AulaController::class,'mostrarFormAula'])->name("form-cadastro-aula");
Route::post('/cadaula', [AulaController::class, 'cadastroAula'])->name("cadastro-aula");