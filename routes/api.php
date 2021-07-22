<?php

use App\Http\Controllers\UsarioController;
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

Route::middleware('auth:api')->get('/user',[UsarioController::class,'getUsuarioToken']);
Route::get('/usuarios',[UsarioController::class,'getAllUsuarios'])->name('usuarios');
Route::get('/usuariosToken',[UsarioController::class,'getUsuarioToken'])->name('Tokenusuario');

