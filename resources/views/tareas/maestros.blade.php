@extends('app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maestros</title>
</head>

<body>
    <div class="container w-25 border p-4 mt-3">
        <form method="POST" action="{{route('maestros') }}">
            <h4 style="color: blue;">Iniciar Sesion</h4>
            @csrf
            @if (session('info'))
                <h5 class="alert alert-info">{{ session('info') }}</h5>
            @endif
            @error('info')
                <h5 class="alert alert-danger">{{ $message }}</h5>
            @enderror
            <div class="mb-3">
                <label class="form-label">Correo Institucional</label>
                <input type="email" name="Correo" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Contraseña</label>
                <input type="password" name="Contrasena" class="form-control">
            </div>
            <button type="submit" name="Ingresar" class="btn btn-primary">Ingresar</button>
        </form>
    </div>
</body>

</html>
@endsection