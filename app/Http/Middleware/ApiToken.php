<?php

namespace App\Http\Middleware;

use Closure;

class ApiToken
{

    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}
