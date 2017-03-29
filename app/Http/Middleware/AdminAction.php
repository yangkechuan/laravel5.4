<?php

namespace App\Http\Middleware;

use Closure;

class AdminAction
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
        if ($request->user()->id != 1)
        {
            return back()->withErrors('没有权限');
        }
        return $next($request);
    }
}
