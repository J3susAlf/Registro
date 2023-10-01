<?php

namespace App\Http\Controllers;

use App\Models\crudregisters;
use App\Models\Maestro;
use Illuminate\Http\Request;

class maestrosController extends Controller
{
    public function store(Request $request)
    {

       
        $request->validate([
            'Correo' => 'required|email',
            'Contrasena' => 'required|min:8',
        ]);

        $correo = $request->Correo;
        $contrasena = $request->Contrasena;

        
        $registroExistente = Maestro::where('Correo', $correo)->where('Contrasena', $contrasena)->first();

        if ($registroExistente) {
           $registros = crudregisters::all();

        // Redirige al maestro a la vista de tablaAlumnos y pasa los datos a la vista
        return redirect()->route('tablaAlumnos')->with('registros', $registros)->with('success', '¡Bienvenido de nuevo, maestro!');

        } else {
            
            return redirect()->route('registro')->with('info', 'Maestro no registrado. Por favor, regístrate.');
        }
    }
}
