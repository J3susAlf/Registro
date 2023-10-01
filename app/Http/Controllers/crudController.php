<?php

namespace App\Http\Controllers;

use App\Models\crudregisters;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class crudController extends Controller
{
    
    
    public function store(Request $request)
    {
        $request->validate([
            'Matricula' => 'required|min:5',
        ]);
        $matricula = $request->Matricula;
        $registro = crudregisters::where('Matricula', $matricula)->first();

        $horaLocal = Carbon::now()->setTimezone('America/Mexico_City');

        if ($request->has('Entrada')) {
           
            if ($registro) {
                $registro->Entrada = $horaLocal;
            } else {
                $registro = new crudregisters();
                $registro->Matricula = $matricula;
                $registro->Entrada = $horaLocal;
            }
        } elseif ($request->has('Salida')) {
            if ($registro) {
                $registro->Salida = $horaLocal;
            } else {
                // Si no existe un registro, puedes manejar esto de acuerdo a tus requerimientos
                // En este caso, podrías mostrar un mensaje de error o hacer alguna otra acción
            }
        }

        $registro->save();

        return redirect()->route('alumnos')->with('success', 'Registro Correcto');
    }
    
}
