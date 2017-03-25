<?php

namespace App\Http\Middleware;

use Closure;

class logMiddleware
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

        // if ($this->auth->guest())
        // {
        //     if ($request->ajax())
        //     {
        //          return response('Unauthorized', 401);
        //     }
        //     else
        //     {
        //         \Session::flash('flash_message_login', 'You need to be logged in to add records!');
        //          return redirect()->guest('auth/login');
        //     }
        // }
        return $next($request);
    }
}
