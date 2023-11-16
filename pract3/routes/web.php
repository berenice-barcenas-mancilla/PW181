<?php

use App\Http\Controllers\CrudController;
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

Route::get('recuerdo/create', [CrudController::class, 'create'])->name('recuerdoCreate');
Route::post('/recuerdo', [CrudController::class, 'store'])->name('recuerdoStore');


/*
|--------------------------------------------------------------------------
| MEMORIES
|--------------------------------------------------------------------------
|
*/

// List
Route::get('/memoriesList', [CrudController::class, 'index'])->name('recuerdoList');

