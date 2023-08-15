<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FilmesController;
use App\Http\Controllers\UsuariosController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::prefix('/usuarios')->middleware("auth")->group(function () {

    Route::get('add', [UsuariosController::class, 'add'])->name('usuarios.add');

    Route::post('add', [UsuariosController::class, 'addSave'])->name('usuarios.addSave');

    Route::get('edit', [UsuariosController::class, 'edit'])->name('usuarios.edit');

    Route::post('editsave', [UsuariosController::class, 'editSave'])->name('usuarios.editSave');

    Route::get('delete/{usuario}', [UsuariosController::class, 'delete'])->name('usuarios.delete');

    Route::delete('delete/{usuario}', [UsuariosController::class, 'deleteForReal'])->name('usuarios.deleteForReal');

});

Route::prefix('/filmes')->group(function () {

    Route::get('index', [FilmesController::class, 'index'])->name('filmes.index');

    Route::get('add', [FilmesController::class, 'add'])->name('filmes.add');

    Route::post('add', [FilmesController::class, 'addsave'])->name('filmes.addsave');

    Route::get('edit/{produto}', [FilmesController::class, 'edit'])->name('filmes.edit');

    Route::post('edit/{produto}', [FilmesController::class, 'editSave'])->name('filmes.editSave');

    Route::get('delete/{produto}', [FilmesController::class, 'delete'])->name('filmes.delete');

    Route::delete('delete/{produto}', [FilmesController::class, 'deleteForReal'])->name('filmes.deleteForReal');

});
