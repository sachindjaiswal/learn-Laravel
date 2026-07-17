<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class countryCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $country = trim((strtolower($request -> country)));
        if($country != "india"){
            die("Only indian citizen can access this page");
        };
        echo "This is from the countryCheck Middleware <br>";
        return $next($request);
    }
}
