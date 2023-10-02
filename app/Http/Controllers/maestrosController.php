<?php
namespace App\Http\Controllers;
use App\Models\crudregisters;
use App\Models\Maestro;
use Illuminate\Http\Request;
class maestrosController extends Controller
{
    public function store(Request $request)
    {
        
        $correo = $request->Correo;
        $contrasena = $request->Contrasena;

        $registroExistente = Maestro::where('Correo', $correo)->where('Contrasena', $contrasena)->first();
       if ($registroExistente) {
        return redirect()->route('tablaAlumnos')->with('success', '¡Bienvenido de nuevo, maestro!');
       }else{
        return redirect()->route('registro')->with('info', 'Maestro no registrado. Por favor, regístrate.');
       }

    }
    public function index(){
        $registros = crudregisters::all();
        return redirect()->route('tablaAlumnos')->with('registros', $registros);
    }
}

    