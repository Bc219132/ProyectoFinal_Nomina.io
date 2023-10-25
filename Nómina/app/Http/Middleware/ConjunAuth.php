<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ConjunAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check()) {
            $idRoles = auth()->user()->id_roles;

            if (auth()->check() && (auth()->user()->id_roles == '1' || auth()->user()->id_roles == '3')) {
                return $next($request);
            }
            if (auth()->user()->id_roles == '1') {
                return redirect()->route('Admin.index');
            }
            if (auth()->user()->id_roles == '2') {
                return redirect()->route('Consul.index');
            }
            if (auth()->user()->id_roles == '3') {
                return redirect()->route('Ejec.index');
            }
        } else {
            return redirect('/');
        }
    }
}
