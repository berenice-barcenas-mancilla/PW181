@extends('layouts.plantilla')

@section('titulo', 'Login')

@section('content')
    <h3 class="display-1 text-center text-primary mt-4">Login</h3>


    <!--FORMULARIO BASICO-->
    <form>
        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">User</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3">
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
      </form>
@endsection
