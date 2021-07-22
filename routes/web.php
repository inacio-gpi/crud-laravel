<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes(['register' => true]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'lista'])->name('home');

Route::get('/', [UsuarioController::class, 'listaUsuarios']);
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [UsuarioController::class, 'listaUsuarios']);

    //adciona o /usuario fixo na URL ex: /usuario/editar
    Route::prefix('/usuario')->group(function () {

        Route::get('/novo', function () {
            return view('usuario-novo');
        });
        Route::put('/novo-usuario', [UsuarioController::class, 'salvaNovoUsuario']);

        Route::get('/editar/{id}', [UsuarioController::class, 'editaUsuario']);
        Route::put('/editar/{id}', [UsuarioController::class, 'updateUsuario']);
        Route::delete('/remove/{id}', [UsuarioController::class, 'removeUsuario']);
    });
});
