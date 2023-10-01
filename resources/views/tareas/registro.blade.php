@extends('app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Maestros</title>
</head>

<body>
    <div class="container w-25 border p-4 mt-3">
        <h4>Registro</h4>
        <form method="POST" action="{{route('registro') }}">
            @csrf
            @if (session('success'))
            <h5 class="alert alert-success">{{session('success')}}</h5>

            @endif
            @error('Contrasena')
            <h5 class="alert alert-danger">{{$message}}</h5>
            @enderror
            <div class="mb-3">
                <label class="form-label">Correo Institucional</label>
                <input type="email" name="Email" class="form-control">

            </div>
            <div class="mb-3">
                <label class="form-label">Contraseña</label>
                <input type="password" name="Password" class="form-control">
            </div>
            <button type="submit" name="Aceptar" class="btn btn-primary">Ingresar</button>
        </form>
    </div>
</body>

</html>
@endsection