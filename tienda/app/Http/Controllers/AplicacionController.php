<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class AplicacionController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nick' => 'required',
            'email' => 'required',
            'nombre' => 'required',
            'apellidos' => 'required',
            'dni' => 'required',
            'fecha_nacimiento' => 'required',
            'contrasena' => 'required',
            'rol' => 'required',
        ]);

        Usuario::create($validatedData);

        return redirect()->route('tiendavistas.login')->with('success', 'Usuario creado exitosamente.');
    }
}
