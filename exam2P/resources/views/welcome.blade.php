<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Venta de videojuegos</title>
    @vite(['resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/0.5.0/sweet-alert.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            @if (session()->has('Exito'))
                Swal.fire({
                    icon: 'success',
                    title: 'Éxito',
                    text: "{{ session('Exito') }}",
                });
            @endif
        });
    </script>
    


    <div class="container mt-5 mb-5">

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger  alert-dismissible fade show" role="alert">
                    <strong>{{ $error }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endforeach
        @endif
{{-- 
        @if (session()->has('Exito'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <strong>{{ session('Exito') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif --}}


        <form class="row g-5" method="POST" action="/videogames">
            @csrf
            <div>
                <label class="form-label">Nombre:</label>
                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                <div>
                    <p class="text-danger">{{ $errors->first('name') }}</p>
                </div>
            </div>

            <div class="col-md-4">
                <label class="form-label">Fecha de publicación:</label>
                <input type="date" class="form-control" name="date" value="old{{ 'date' }}">
                <div>
                    <p class="text-danger">{{ $errors->first('date') }}</p>
                </div>
            </div>

            <div>
                <label for="validationCustom03" class="form-label">Cantidad:</label>
                <input type="text" class="form-control" min="1" max="7" name="cantidad"
                    value="{{ old('cantidad') }}">
                <div>
                    <p class="text-danger">{{ $errors->first('cantidad') }}</p>
                </div>
            </div>
            <div class="d-grid gap-2 col-4 mx-auto">
                <button class="btn btn-outline-info" type="submit">Guardar</button>
            </div>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script type="module">
        import sweetalert2 from 'https://cdn.jsdelivr.net/npm/sweetalert2@11.9.0/+esm'
        </script>
        
</body>

</html>
