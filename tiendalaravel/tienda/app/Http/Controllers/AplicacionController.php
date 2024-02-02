<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class AplicacionController extends Controller
{

    public function mostrarRegistro() {

        return view('tiendavistas.registro');

    }

    public function mostrarLogin() {

        return view('tiendavistas.login');

    }

    public function mostrarAdministracion() {

        return view('tiendavistas.administracion');

    }

    public function mostrarCRUDcatalogo() {

        return view('tiendavistas.crudcatalogo');

    }

    public function mostrarCRUDcategoria() {

        return view('tiendavistas.crudcategoria');

    }

    public function mostrarCRUDusuario() {

        return view('tiendavistas.crudusuario');

    }


    public function registrar(Request $request)
    {
        $request->merge(['rol' => $request->input('rol', 'Usuario')]);

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

        return redirect()->route('tienda.login')->with('success', 'Usuario creado exitosamente.');
    }

    public function registrarcomoAdmin(Request $request)
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

        return redirect()->route('tienda.Mirarcrudusuario')->with('success', 'Usuario creado exitosamente.');
    }

    public function verUsuarios()
{
    
        $usuarios = Usuario::all();
        return view('tiendavistas.crudusuario', compact('usuario'));
    
}


    public function login(Request $request)
    {
        $request->validate([
            'nick' => 'required',
            'contrasena' => 'required',
        ]);

        $nick = $request->input('nick');
        $contrasena = $request->input('contrasena');

        $usuario = Usuario::where('nick', $nick)->first();

        if ($usuario && $usuario->contrasena === $contrasena) {
            if ($usuario->rol === 'Usuario') {
                return redirect()->route('ruta_usuario');
            } elseif ($usuario->rol === 'Administrador') {
                return redirect()->route('tienda.veradministracion');
            }
        }

        return redirect()->route('tienda.login')->with('error', 'Credenciales incorrectas');
    }

}
