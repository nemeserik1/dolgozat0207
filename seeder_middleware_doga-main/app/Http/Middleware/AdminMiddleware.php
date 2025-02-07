<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
                //Be van lépve és admin a jogkör
                if(Auth::check() && Auth::user()->role === 'admin'){
                    return $next($request);
                }
                abort(401, 'Hozzáférés megtagadva!');
                //ha nem admin akkor 401-as hiba
    }
}
