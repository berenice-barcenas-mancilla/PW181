@extends('layouts.plantilla')

@section('titulo', 'Formulario')

@section('content')
    <h1 class="display-1 text-center text-dark mt-4">"Memorias en Blanco y Negro"</h1>

    <div class="container mt-5 mb-5">
        @if (session()->has('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong> 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-dark  alert-dismissible fade show" role="alert">
                    <strong>{{ $error }}</strong> 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endforeach
        @endif


        <div class="card">
            <div class="card-header text-secondary-emphasis  text-center">
                "Instantes Desaturados"
            </div>
            <div class="card-body">
                <form method="POST" action="/guardarRecuerdo">
                    @csrf
                    <div class="mb-2">
                        <label for="title" class="form-label">Titulo del Recuerdo sin color: : </label>
                        <input type="text" class="form-control" value="{{ old('titulo') }}" name="titulo" placeholder="Ingresa un titulo">
                        <p class="text-danger fw-bold font-monospace">
                            {{ $errors->first('titulo') }}
                        </p>
                    </div>

                    <div class="form-floating">
                        <textarea class="form-control" value="{{ old('recuerdo') }}" name="recuerdo" placeholder="Ingrese el recuerdo sin color" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Recuerdo sin color</label>
                        <p class="text-danger fw-bold font-monospace">
                            {{ $errors->first('recuerdo') }}

                        </p>
                    </div>

            </div>
            <div class="card-footer text-body-secondary">
                <button type="submit" class="btn  btn-outline-secondary">Guardar</button>
                </form>
            </div>
        </div>
    </div>

@endsection
