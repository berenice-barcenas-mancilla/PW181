<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class VideogamesController extends Controller
{
    public function index(){
        return view("welcome");
    }

    public function videogames(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|string|min:5',
            'date' => 'required',
            'cantidad' => 'required|numeric|max:9999999',
        ]);
        
        $name = $request->input('name');
        return redirect('/')->with('Exito',  'La venta de videojuego ' . $name . ' fue guardada con éxito');
    }
}