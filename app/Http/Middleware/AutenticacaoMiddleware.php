<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->pablo == 1) {
            return $next($request);
        } else {
            if (!Auth::check()) {
                return redirect('/login');
            } else {
                // Se o usuário estiver autenticado, mas 'pablo' não for igual a 1
                dd("Você não tem acesso");
            }
        }

        return $next($request);
    }
}
