<?php

namespace App\Http\Middleware;

use Closure;

class ChooseService
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!session()->has('branch_id')) {

            return redirect()->route('menu.page');
        }
        return $next($request);
    }
}

