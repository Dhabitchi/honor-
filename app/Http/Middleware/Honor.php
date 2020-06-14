<?php

namespace App\Http\Middleware;

use Closure;

class Honor
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
        if (auth()->user()->role == 'user'){
            return redirect('home');
        }



        return $next($request);
    }
}
