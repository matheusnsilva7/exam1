<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = \App\Models\Usuario::all();
        return response()->json($usuarios);
    }

    public function show($id)
    {
        $usuario = \App\Models\Usuario::find($id);
        return response()->json($usuario);
    }
}
