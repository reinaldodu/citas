<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, string $rol)
    {
        if ($rol == 'admin' && auth()->user()->rol_id != 1) {
            abort(403);
        }
        if ($rol == 'paciente' && auth()->user()->rol_id != 2) {
            abort(403);
        }
        if ($rol == 'doctor' && auth()->user()->rol_id != 3) {
            abort(403);
        }

        if ($rol == 'secretaria' && auth()->user()->rol_id != 4) {
            abort(403);
        }

        return $next($request);
    }
}
