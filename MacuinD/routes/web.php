<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContPAg;

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
    return view('index');
});

Route::get('/inicio', [ContPAg::class, 'finicio'])->name('inicio');
Route::get('/inicio/usuariosJ', [ContPAg::class, 'fusuariosJ'])->name('usuariosJ');
Route::get('/inicio/ticketsJ', [ContPAg::class, 'fticketsJ'])->name('ticketsJ');
Route::get('/inicio/depaJ', [ContPAg::class, 'fdepaJ'])->name('depaJ');
Route::get('/inicio/depaJ/addeditDepa', [ContPAg::class, 'fadetDepa'])->name('addeditDepa');
Route::get('/inicio/ticketsJ/addeditTic', [ContPAg::class, 'fadetTic'])->name('addeditTic');
Route::get('/inicio/usuariosJ/addeditUsu', [ContPAg::class, 'fadetUsu'])->name('addeditUsu');