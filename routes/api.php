<?php

use App\Http\Controllers\ProdutosControlle;
use App\Http\Controllers\UsarioController;
use App\Http\Controllers\UsuarioController;
use App\Models\Produtos;
use Illuminate\Http\Request;
use Illuminate\Routing\RouteRegistrar;
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
    Route::middleware('is_admin')->group(function () {
        Route::delete('/Usuario/delete', [UsuarioController::class, 'deleteUsuarioEmail']);
        Route::delete('/Usuario/delete/{id}', [UsuarioController::class, 'deleteUsuarioId']);
        Route::put('/usuarios/{idUser}', [UsuarioController::class, 'updatePutUser']);
        Route::patch('/usuarios/{idUser}', [UsuarioController::class, 'updatePatchUser']);
        Route::get('/usuarios', [UsuarioController::class, 'getAllUsuarios']);
    });
    Route::middleware('is_modified')->group(function () {
        Route::get('/historico', [ProdutosControlle::class, 'getIdProdutoHistorico']);
        Route::get('/historico', [ProdutosControlle::class, 'getAllHistorico']);
        Route::post('/produto/create', [ProdutosControlle::class, 'createProduto']);
        Route::post('/fotos/upload/{idProduto}', [ProdutosControlle::class, 'uploadFotos']);
        Route::post('/fotos/update/all/{idProduto}', [ProdutosControlle::class, 'UpdateAllImagens']);
        Route::post('/fotos/update/{idProduto}/{idImagem}', [ProdutosControlle::class, 'UpdateImagem']);
        Route::put('/produtos/{idProduto}', [ProdutosControlle::class, 'updatePutProdutos']);
        Route::patch('/produtos/{idProduto}', [ProdutosControlle::class, 'updatePatchProdutos']);
        Route::delete('/produtos/delete/{idProduto}', [ProdutosControlle::class, 'deleteProduto']);
        Route::delete('/foto/delete/all/{idProduto}', [ProdutosControlle::class, 'deleteAllImagem']);
        Route::delete('/foto/delete/{idProduto}/{idFoto}', [ProdutosControlle::class, 'deleteImagem']);
    });
});
Route::get('/usuarioToken', [UsuarioController::class, 'getUsuarioToken']);
Route::post('/criarUsuario', [UsuarioController::class, 'postCreateUsuario']);
