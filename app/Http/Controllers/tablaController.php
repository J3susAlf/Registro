<?php

namespace App\Http\Controllers;

use App\Models\crudregisters;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class tablaController extends Controller
{
    public function store(){
        $registro = DB::table('crudregisters')->select('crudregisters.*')->get();
        return view('tablaAlumnos')->with('alumnos', $registro);
    }

    public function obtenerAlumnos(){
        $alumnos = crudregisters::all();
        $alumnosArray = $alumnos->toArray();
        return $alumnosArray;
    }
}
