<?php

namespace App\Http\Middleware;

use Closure;
use App\VisitorTracking;
use Illuminate\Support\Facades\Auth;

class RecordVisitorTracking
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
        if (Auth::check()) {
            if (Auth::user()->isAdmin()) {
                return $next($request);
            }
        }

        $visitor_tracking = new VisitorTracking();
        $visitor_tracking->addr = $request->server('REMOTE_ADDR');
        $visitor_tracking->user_agent = $request->server('HTTP_USER_AGENT');
        $visitor_tracking->request_uri = $request->server('REQUEST_URI');
        $visitor_tracking->http_referer = $request->server('HTTP_REFERER');
        $visitor_tracking->save();

        return $next($request);
    }
}
