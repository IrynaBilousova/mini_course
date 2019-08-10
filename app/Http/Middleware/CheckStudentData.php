<?php

namespace App\Http\Middleware;

use Closure;

class CheckStudentData
{
    /**
     * Check if student entered email and avatar.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->session()->has('email') || $request->session()->has('avatar')) {
            return $next($request);
        }

        return redirect('start');
    }
}
