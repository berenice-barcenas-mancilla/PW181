@extends('layouts.plantilla')

@section('titulo','product')

@section('content')
    <h4 class="display-1 text-center text-primary mt-4">Busqueda de productos</h4>  
    
    @include('partials.card')

    <form class="d-flex mt-4" role="search" >
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>

@endsection


