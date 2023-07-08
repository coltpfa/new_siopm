<?php

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
    return view('welcome');
});

Auth::routes();
Route::get('/login', [App\Http\Controllers\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login2', [App\Http\Controllers\LoginController::class, 'login']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('home/sessao', [App\Http\Controllers\HomeController::class, 'sessao'])->name('home.sessao');
Route::get('/home2', [App\Http\Controllers\HomeController::class, 'index2'])->name('home2');
Route::get('/toggle-dark-mode', 'App\Http\Controllers\HomeController@toggleDarkMode')->name('toggle-dark-mode');

Route::get('ocorrencia/cadastro', [App\Http\Controllers\OcorrenciaController::class, 'index'])->name('ocorrencia.cadastro');
Route::post('ocorrencia/create', [App\Http\Controllers\OcorrenciaController::class, 'create'])->name('ocorrencia.create');
Route::get('cidades', [App\Http\Controllers\CidadeController::class, 'index'])->name('cidade');
Route::post('cidade/create', [App\Http\Controllers\CidadeController::class, 'create'])->name('cidade.create');
Route::post('cidade/delete/{id}', [App\Http\Controllers\CidadeController::class, 'destroy'])->name('cidade.delete');
Route::post('cidade/edit/{id}', [App\Http\Controllers\CidadeController::class, 'update'])->name('cidade.edit');
Route::get('bpmm', [App\Http\Controllers\BpmmController::class, 'index'])->name('bpmm');
Route::post('bpmm/create', [App\Http\Controllers\BpmmController::class, 'create'])->name('bpmm.create');
Route::post('bpmm/delete/{id}', [App\Http\Controllers\BpmmController::class, 'destroy'])->name('bpmm.delete');
Route::post('bpmm/edit/{id}', [App\Http\Controllers\BpmmController::class, 'update'])->name('bpmm.edit');
Route::get('usuarios', [App\Http\Controllers\UserController::class, 'index'])->name('usuarios');
Route::post('usuario/create', [App\Http\Controllers\UserController::class, 'create'])->name('usuario.create');
Route::post('usuario/delete/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('usuario.delete');
Route::post('usuario/edit/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('usuario.edit');
Route::post('usuario/status/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('usuario.status');
Route::post('usuario/passreset', [App\Http\Controllers\UserController::class, 'passreset'])->name('usuario.passreset');
Route::get('ramal', [App\Http\Controllers\RamaisController::class, 'index'])->name('ramal');
Route::post('ramal/create', [App\Http\Controllers\RamaisController::class, 'create'])->name('ramal.create');
Route::post('ramal/delete/{id}', [App\Http\Controllers\RamaisController::class, 'destroy'])->name('ramal.delete');
Route::post('ramal/edit/{id}', [App\Http\Controllers\RamaisController::class, 'update'])->name('ramal.edit');
Route::get('naturezaocorrencia', [App\Http\Controllers\NaturezaOcorrenciaController::class, 'index'])->name('naturezaocorrencia');
Route::post('naturezaocorrencia/create', [App\Http\Controllers\NaturezaOcorrenciaController::class, 'create'])->name('naturezaocorrencia.create');
Route::post('naturezaocorrencia/edit/{id}', [App\Http\Controllers\NaturezaOcorrenciaController::class, 'update'])->name('naturezaocorrencia .edit');
Route::post('naturezaocorrencia/status/{id}', [App\Http\Controllers\NaturezaOcorrenciaController::class, 'edit'])->name('naturezaocorrencia.status');
Route::get('mapa', [App\Http\Controllers\MapaController::class, 'index'])->name('mapa');
Route::post('mapa/create', [App\Http\Controllers\MapaController::class, 'create'])->name('mapa.create');
Route::post('mapa/delete/{id}', [App\Http\Controllers\MapaController::class, 'destroy'])->name('mapa.delete');
Route::get('/api/mapa/{id}', [App\Http\Controllers\MapaController::class, 'getKml']);
Route::get('cadastro190', [App\Http\Controllers\Cadastro190Controller::class, 'index'])->name('cadastro190');



/*
Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
*/
