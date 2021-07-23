<?php

use App\Http\Controllers\UsarioController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('checkToken')->group(function () {
    Route::get('/usuarios', [UsuarioController::class, 'getAllUsuarios']);
    Route::delete('/deleteUsuario', [UsuarioController::class, 'deleteUsuarioEmail'])->middleware('is_admin');
    Route::delete('/deleteUsuario/{id}', [UsuarioController::class, 'deleteUsuarioId'])->middleware('is_admin');
});
Route::get('/usuarioToken', [UsuarioController::class, 'getUsuarioToken']);
Route::post('/criarUsuario', [UsuarioController::class, 'postCreateUsuario']);
