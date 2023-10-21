@extends('layouts.plantilla')

@section('titulo', 'Formulario')

@section('content')
    <h1 class="display-1 text-center text-dark mt-4">"Memorias en Blanco y Negro"</h1>

    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="card-header text-secondary-emphasis  text-center">
                "Instantes Desaturados"
            </div>
            <div class="card-body">
                <form method="POST" action="/guardarRecuerdo">
                    @csrf
                    <div class="mb-2">
                        <label for="title" class="form-label">Titulo del Recuerdo sin color: : </label>
                        <input type="text" class="form-control" name="titulo" placeholder="Ingresa un titulo">
                    </div>

                    <div class="form-floating">
                        <textarea class="form-control" name="recuerdo" placeholder="Ingrese el recuerdo sin color" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Recuerdo sin color</label>
                    </div>

            </div>
            <div class="card-footer text-body-secondary">
                <button type="submit" class="btn  btn-outline-secondary">Guardar</button>
                </form>
            </div>
        </div>
    </div>

@endsection
