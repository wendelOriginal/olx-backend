<?php

use App\Http\Controllers\CategoriesController;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatesController;
use App\Http\Controllers\UserController;

Route::get('/ping', function() :JsonResponse
{
    return response()->json(['pong' => true]);
});


Route::get('/states', [StatesController::class, 'index']);

Route::get('/categories', [CategoriesController::class, 'index']);


Route::post('/user/sigin', [UserController::class, 'sigin']);

Route::post('/user/signup', [UserController::class, 'signup']);

Route::post('/user/me', [UserController::class, 'me']);

/**
 * rota de usuarios
 *
 * [ ] /user/sigin -- login
 * [ ] /user/signup --registra-se
 *
 * [ ] /user/me -- atualizar informações do usuario
 *
 * rotas gerais
 *
 * [ ] /states --listar estados
 *
 * [ ] /categories -- listar categories
 *
 * rotas de categoria
 *
 * [ ] /ad/list --listar todas os anuncios
 *
 * [ ] /ad/:id -- dados de um unico anuncio
 *
 * [ ] /ad/add -- criar um anuncio
 *
 * [ ] /ad/:id(put) -- editar anuncio
 *
 * [ ] /ad/:id (delete) --deletar um anuncio
 *
 * [ ] /ad/:id/:image (delete) --deletar image do anuncio
 *
 *
 */
