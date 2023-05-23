<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureTokenIsValidMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->input('token') !== 'my secret token') {

            return redirect('home');

        }

        return $next($request);

    }


}
