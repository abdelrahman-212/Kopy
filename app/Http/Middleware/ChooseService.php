<<<<<<< HEAD
<?php

namespace App\Http\Middleware;

use Closure;

class ChooseService
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
        if (!session()->has('branch_id')){
            return redirect()->route('service.page');
        }
        return $next($request);
    }
}
||||||| 92bdb17
=======
<?php

namespace App\Http\Middleware;

use Closure;

class ChooseService
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
        if (!session()->has('branch_id')){

            return redirect()->route('menu.page');
        }
        return $next($request);
    }
}
>>>>>>> abd_2
