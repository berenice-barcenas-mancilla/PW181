@extends('layouts.plantilla')

@section('titulo', 'Memories')
@section('content')
    <h1 class="display-1 text-center text-dark mt-4">Memories</h1>
    
    <div class="container">
        @foreach ($consR as $recuerdo)
            <div class="card text-bg-secondary w-80 mt-5 mb-3" style="width: 18rem;">
                <div class="card-body">
                    <h3 class="card-title">{{$recuerdo->titulo}}</h3>
                    <h5 class="card-title">{{$recuerdo->fecha}}</h5>
                    <p class="card-text">{{$recuerdo->recuerdo}}
                    <br>
                    <a href="#" class="mt-5 btn btn-dark">Actualizar</a>
                    <a href="#" class="mt-5 btn btn-dark">Eliminar</a>
        
                </div>
            </div>
        @endforeach
    </div>
@endsection
