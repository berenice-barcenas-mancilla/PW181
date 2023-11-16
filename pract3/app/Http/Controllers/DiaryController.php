<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormMemories;

class DiaryController extends Controller
{

    //Lo que va dentro del view es el nombre del archivo blade por ejemplo welcome.blade.php o recuerdos.blade.php o formulario.blade.php que estan dentro de las carpetas resources/views

    public function metodoInicio(){
        return view('welcome');
    }

    public function metodoFormulario(){
        //return view('form');
    }

    public function metodoRecuerdos(){
        return view('memories');
    }

    public function metodoGuardarRecuerdo(validadorFormMemories $request){

        
       return redirect('/form')->with('success','Tu momento desaturado llego al controlador');
    }


}
