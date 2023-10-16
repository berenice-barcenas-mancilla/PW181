<?php

use App\Http\Controllers\DiaryController;
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
| VISTA PRINCIPAL
|--------------------------------------------------------------------------
|
*/

// List
Route::get('/', [DiaryController::class, 'metodoInicio'])->name('inicio');

/*
|--------------------------------------------------------------------------
| FORMULARIOS
|--------------------------------------------------------------------------
|
*/

// List
Route::get('/form', [DiaryController::class, 'metodoFormulario'])->name('formularios');

/*
|--------------------------------------------------------------------------
| MEMORIES
|--------------------------------------------------------------------------
|
*/

// List
Route::get('/memories', [DiaryController::class, 'metodoRecuerdos'])->name('recuerdos');
