<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ageCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response

    {
        $age = $request -> age ;
        if($age<18){
            die("Only adults can access this page ");
        }
        echo "This is from the ageCheck Middleware <br>";
        return $next($request);
    }
}
