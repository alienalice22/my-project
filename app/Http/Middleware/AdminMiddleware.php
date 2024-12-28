<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Add this line
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Вам необходимо войти в систему.');
        }

        if (Auth::user()->role !== 'admin') {
            return redirect()->route('login')->with('error', 'У вас нет доступа к этой странице.');
        }

        return $next($request);
    }
}
