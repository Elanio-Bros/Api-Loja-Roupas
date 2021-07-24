<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Usuarios;

class ModifiedCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $token = $request->header('token');
        $permisao = Usuarios::where('api_token', $token)->first()->permissão;
        if ($permisao >= 3 && $permisao < 1) {
            return response()->json('Erro usuario não autorizado', 401);
        }
        return $next($request);
    }
}
