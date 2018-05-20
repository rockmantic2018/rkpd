<?php

namespace App\Http\Middleware;

use App\Enum\Roles;
use Closure;

class DesaMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth()->user()->hasRole(Roles::DESA)) {
            return $next($request);
        }
        return error_pages(401, 'Anda tidak berhak mengakses halaman ini!');
    }
}