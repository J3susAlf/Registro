@extends('app')
@section('content')
<div class="container w-10 border p-4 mt-3">
    <a class="btn btn-danger" href="{{ route('maestros') }}">Salir</a>
    <h4 style="text-align: center;">Tabla Alumnos</h4>
    <table class="table col-12 table-responsive">
        @if (session('success'))
        <h5 class="alert alert-success">{{session('success')}}</h5>
        @endif
        <thead>
            <tr>
                  <th>ID</th> 
                <th>Matricula</th>
                <th>Entrada </th>
                <th>Salida</th>
                <!-- <th>Acciones</th> -->
            </tr>
        </thead>
        <tbody>
            @foreach ($registros as $registro)
            <tr>
                <td>{{$registro->id}}</td>
                <td>{{$registro->Matricula}}</td>
                <td>{{$registro->Entrada}}</td>
                <td>{{$registro->Salida}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection