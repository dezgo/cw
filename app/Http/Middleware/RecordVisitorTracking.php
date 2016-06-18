<?php

namespace App\Http\Middleware;

use Closure;
use App\VisitorTracking;

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
        $visitor_tracking = new VisitorTracking();
        $visitor_tracking->addr = $request->server('REMOTE_ADDR');
        $visitor_tracking->user_agent = $request->server('HTTP_USER_AGENT');
        $visitor_tracking->document_uri = $request->server('DOCUMENT_URI');
        $visitor_tracking->http_referer = $request->server('HTTP_REFERER');
        $visitor_tracking->save();

        return $next($request);
    }
}
