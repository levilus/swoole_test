<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Browser
{

    public static $count = 1;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        self::checkLogin();
        return $next($request);
    }

    public static function checkLogin()
    {
        return self::$count++;
    }
}
