<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\registrarAtividadeController;

Route::get('/', function () {
    return view('paginas/index');
});

Route::get('/index', function(){
    return view('paginas/index');
});

Route::get('/cadastrar', function(){
    return view('paginas/cadastrar');
});

Route::get('/cadastrar',[\App\Http\Controllers\registrarAtividadeController::class, 'index']);
Route::get('/cadastrar/salvar',[\App\Http\Controllers\registrarAtividadeController::class,'store']);
Route::get('/consultar',[\App\Http\Controllers\registrarAtividadeController::class, 'consultar']);
Route::get('/editar/{id}',[\App\Http\Controllers\registrarAtividadeController::class, 'editar']);
Route::get('/atualizar/{id}',[\App\Http\Controllers\registrarAtividadeController::class, 'atualizar']);
Route::get('/excluir/{id}',[\App\Http\Controllers\registrarAtividadeController::class, 'excluir']);
Route::get('/produtos',[\App\Http\Controllers\registrarAtividadeController::class, 'produtos']);
Route::get('/carrinho',[\App\Http\Controllers\registrarAtividadeController::class, 'carrinho']);
Route::get('/editarCarrinho',[\App\Http\Controllers\registrarAtividadeController::class, 'editarCarrinho']);