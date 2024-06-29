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

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjetosController;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\VoluntariosController;
use App\Http\Controllers\ContatosController;
use App\Http\Controllers\ParceriasController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/projetos', [ProjetosController::class, 'index'])->name('projetos');
Route::get('/noticias', [NoticiasController::class, 'index'])->name('noticias');
Route::get('/voluntarios', [VoluntariosController::class, 'index'])->name('voluntarios');
Route::get('/parcerias', [ParceriasController::class, 'index'])->name('parcerias');
Route::get('/contatos', [ContatosController::class, 'index'])->name('contatos');