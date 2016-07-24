<?php

namespace App\Http\Middleware;

use Closure;
use Redirect;

class RedirectWWWtoNonWWW
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (substr($request->header('host'), 0, 4) === 'www.') {
            $nonWWW = substr($request->header('host'), 4, strlen($request->header('host'))-4);
            $request->headers->set('host', $nonWWW);
            return Redirect::to($request->path(), '301');
        }
        else {
            return $next($request);
        }
    }
}
