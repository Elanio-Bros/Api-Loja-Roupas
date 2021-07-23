<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsuarioController extends Controller
{

    function getAllUsuarios()
    {
        $usuarios = Usuarios::all();
        return response()->json($usuarios);
    }

    function getUsuarioToken(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'senha' => 'required|string',
        ]);

        $usuario = Usuarios::where('email', $request->input('email'))->first();
        if ($usuario->exists()) {
            if (Hash::check($request->input('senha'), $usuario->senha,)) {
                return response()->json($usuario->api_token, 200);
            } else {
                return response()->json(Hash::check('bros5', $usuario->senha), 401);
            }
        }
    }

    function postCreateUsuario(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required|string',
            'senha' => 'required|string',
            'email' => 'required|email',
        ]);
        if (!Usuarios::where('email', $request->input('email'))->exists()) {
            $dateUsario = $request->only(['nome', 'email']);
            $dateUsario['senha'] = Hash::make($request->input('senha'));
            $dateUsario['api_token'] = Str::random(30);
            $dateUsario['permissão'] = Usuarios::all()->count() < 1 ? 1 : 3;
            Usuarios::create($dateUsario);
            return response()->json(['Usuário Cria', "token" => $dateUsario['api_token']], 200);
        } else {
            return response()->json('Erro usuário email já cadastrado', 406);
        }
    }

    function deleteUsuarioEmail(Request $request)
    {
        $usuario = Usuarios::where('email', $request->input('email'));
        return response()->json($usuario->delete() == 1 ? 'Usuário Apagado' : 'Usuário Não Existe', 200);
    }

    function deleteUsuarioId($idUsuario)
    {
        $usuario = Usuarios::where('id_usuario',$idUsuario);
        return response()->json($usuario->delete() == 1 ? 'Usuário Apagado' : 'Usuário Não Existe', 200);
    }

}
