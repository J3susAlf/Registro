<?php

namespace App\Http\Controllers;

use App\Models\Maestro;

use Illuminate\Http\Request;

class registerController extends Controller
{
    public function store(Request $request)
    {
        // Valida los datos del formulario
        $request->validate([
            'Email' => 'required|email',
            'Password' => 'required|min:8',
        ]);

        if ($request->has('Aceptar')) {  
            $registro = new Maestro();
            $registro->Correo =  $request->input('Email');
            $registro->Contrasena = bcrypt($request->input('Password'));
            $registro->save();
            
        } 
        return redirect()->route('maestros')->with('success', 'Maestro registrado correctamente');
    }
}
