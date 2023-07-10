<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminPanelMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        if (!auth()->user()){
            return redirect('error');
        }
        if (auth()->user()->role !== 'admin'){
            return redirect('error');
        }
        return $next($request);
    }
}
