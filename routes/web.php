<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\RelatorioController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::any('cliente/search', [ClienteController::class, 'search'])->name('cliente.search');
Route::resource('cliente', ClienteController::class);

Route::post('relatorio', [RelatorioController::class, 'exportClientes'])->name('relatorio.export');
