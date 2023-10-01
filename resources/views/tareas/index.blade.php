@extends('app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>

<body>
    
    <div class="container w-25 border p-4 mt-3">
    <h2 id="fecha" style="font-family: Arial, Helvetica, sans-serif;"></h2>
        <form action="{{route('alumnos') }}" method="POST">
            @csrf
            @if (session('success'))
            <h5 class="alert alert-success">{{session('success')}}</h5>

            @endif
            @error('Matricula')
            <h5 class="alert alert-danger">{{$message}}</h5>
            @enderror
            <div class="mb-3">
                <label class="form-label"><strong>Matricula</strong></label>
                <input type="number" name="Matricula" class="form-control">
            </div>
            <button type="submit" name="Entrada" class="btn btn-primary">Entrada</button>
            <button type="submit" name="Salida" class="btn btn-danger">Salida</button>

        </form>
        
        <script>
            setInterval(() => {
                let fecha = new Date();
                let fechaHora = fecha.toLocaleString();
                document.getElementById("fecha").textContent = fechaHora;
            }, 1000);
        </script>
    </div>
</body>

</html>

@endsection