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
//save
Route::post('/guardarRecuerdo', [DiaryController::class, 'metodoGuardarRecuerdo'])->name('guardarRecuerdo');


/*
|--------------------------------------------------------------------------
| MEMORIES
|--------------------------------------------------------------------------
|
*/

// List
Route::get('/memories', [DiaryController::class, 'metodoRecuerdos'])->name('recuerdos');



/*
//List Group
Route::controller(DiaryController::class)->group(function(){

    Route::get('/','metodoInicio')->name('inicio');
    Route::get('/form','metodoFormulario')->name('formularios');
    Route::get('/memories','metodoRecuerdos')->name('recuerdos');



    

});*/
