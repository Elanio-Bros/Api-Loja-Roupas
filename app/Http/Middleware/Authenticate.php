<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        // if ($request->get('token') === null) {
        //     // return route('log');
        // }
        // echo json_encode($request->get('token'));

        if (!$request->expectsJson()) {
            echo 'erro';
            // return route('log');
        }
    }
}
