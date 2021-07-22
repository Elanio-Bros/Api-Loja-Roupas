<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;

class UsarioController extends Controller
{
    //
    function getAllUsuarios()
    {
        $usuarios = Usuarios::all()->api_token;
        return response()->json($usuarios);
    }
    function getUsuarioToken(Request $request)
    {
        $this->validate($request, [
            'id_usuario' => 'required|numeric',
        ]);
        $usuario = Usuarios::where('id_usuario', $request->get('id_usuario'))->first()->api_token;
        return response($usuario);
    }
}
