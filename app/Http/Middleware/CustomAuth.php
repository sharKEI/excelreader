<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;

class CustomAuth
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
        if (Auth::user()['active'] == 0)
		{
            Auth::logout();
            session()->flash('message', 'You account is inactive. Please consult the admin');
			return redirect('login');
        }
        return $next($request);
    }
}
