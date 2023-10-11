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



/*
|--------------------------------------------------------------------------
| RUTA DE VISTA PRINCIPAL
|--------------------------------------------------------------------------
|
*/
Route::get('/', function () { return view('welcome');})->name('inicio');


/*
|--------------------------------------------------------------------------
| RUTA DE FORMULARIOS
|--------------------------------------------------------------------------
|
*/
Route::get('/form', function () { return view('form');})->name('formularios'); 

/*
|--------------------------------------------------------------------------
| RUTAS DE MEMORIES
|--------------------------------------------------------------------------
|
*/
Route::get('/memories', function () { return view('memories');})->name('recuerdos'); 
