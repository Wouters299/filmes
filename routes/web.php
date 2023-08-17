<?php





use App\Http\Controllers\AdminsController;
use App\Http\Controllers\FilmesController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\LoginController;

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

//Login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::prefix('/usuarios')->group(function () {

    Route::get('index', [UsuariosController::class, 'index'])->name('usuario.index');

    Route::get('add', [UsuariosController::class, 'add'])->name('usuarios.add');

    Route::post('add', [UsuariosController::class, 'addSave'])->name('usuarios.addSave');

    Route::get('edit', [UsuariosController::class, 'edit'])->name('usuarios.edit');

    Route::post('editsave', [UsuariosController::class, 'editSave'])->name('usuarios.editSave');

    Route::get('delete/{usuario}', [UsuariosController::class, 'delete'])->name('usuarios.delete');

    Route::delete('delete/{usuario}', [UsuariosController::class, 'deleteForReal'])->name('usuarios.deleteForReal');

});



Route::prefix('/admins')->group(function () {

    Route::get('index', [adminsController::class, 'index'])->name('admins.index');

    Route::get('add', [adminsController::class, 'add'])->name('admins.add');

    Route::post('add', [adminsController::class, 'addsave'])->name('admins.addsave');

    Route::get('edit/{produto}', [adminsController::class, 'edit'])->name('admins.edit');

    Route::post('edit/{produto}', [adminsController::class, 'editSave'])->name('admins.editSave');

    Route::get('delete/{produto}', [adminsController::class, 'delete'])->name('admins.delete');

    Route::delete('delete/{produto}', [adminsController::class, 'deleteForReal'])->name('admins.deleteForReal');

});

Route::prefix('/filmes')->group(function () {

    Route::get('index', [FilmesController::class, 'index'])->name('filmes.index');

    Route::get('add', [FilmesController::class, 'add'])->name('filmes.add');

    Route::get('usuario', [FilmesController::class, 'usuario'])->name('filmes.usuario');


    Route::post('add', [FilmesController::class, 'addSave'])->name('filmes.addsave');
    Route::get('filtro', [FilmesController::class, 'filtro'])->name('filmes.filtro');

    Route::get('view/{id}', [FilmesController::class, 'view'])->name('filmes.view');
    Route::get('edit/{id}', [FilmesController::class, 'edit'])->name('filmes.edit');
    Route::post('edit/{id}', [FilmesController::class, 'editSave'])->name('filmes.editSave');

    Route::get('delete/{id}', [FilmesController::class, 'delete'])->name('filmes.delete');

    Route::delete('delete/{id}', [FilmesController::class, 'deleteForReal'])->name('filmes.deleteForReal');


});
