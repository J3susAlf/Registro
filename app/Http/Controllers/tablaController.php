<?php

namespace App\Http\Controllers;

use App\Models\crudregisters;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class tablaController extends Controller
{
    public function store(){
        $registros = crudregisters::all();
        return redirect()->route('tablaAlumnos')->with('registros', $registros);
    }
}
