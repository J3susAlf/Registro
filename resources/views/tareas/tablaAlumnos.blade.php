@extends('app')
@section('content')

<div class="container w-10 border p-4 mt-3">
   
        <a class="btn btn-danger" href="{{ route('maestros') }}">Salir</a>
   
    <h4 style="text-align: center;">Tabla Alumnos</h4>
    <table class="table col-12 table-responsive">
        <thead>
            <tr>
                <th>ID</th>
                <th>Matricula</th>
                <th>Entrada </th>
                <th>Salida</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($alumnos as $alumno )
            <tr>
                <td>{{$alumno->id}}</td>
                <td>{{$alumno->Matricula}}</td>
                <td>{{$alumno->Entrada}}</td>
                <td>{{$alumno->Salida}}</td>
                <td class="btn btn-round"><i class="fas"></i></td>
            </tr>
    @endforeach
        </tbody>
    </table>
</div>

@endsection