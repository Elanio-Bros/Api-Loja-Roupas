<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Usuarios;

class CheckTokinApi
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
        $token = $request->input('token');
        if (!$token || !Usuarios::where('api_token', $token)->exists()) {
            return response()->json('Invalid Token', 401);
        }
        return $next($request);
    }
}
