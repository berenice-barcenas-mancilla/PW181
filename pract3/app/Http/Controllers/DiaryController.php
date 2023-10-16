<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiaryController extends Controller
{

    //Lo que va dentro del view es el nombre del archivo blade por ejemplo welcome.blade.php o recuerdos.blade.php o formulario.blade.php que estan dentro de las carpetas resources/views

    public function metodoInicio(){
        return view('welcome');
    }

    public function metodoFormulario(){
        return view('formulario');
    }

    public function metodoRecuerdos(){
        return view('recuerdos');
    }

}
