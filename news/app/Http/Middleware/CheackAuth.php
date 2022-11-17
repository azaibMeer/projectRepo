<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;


class CheackAuth
{
   
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //echo "hi from middl";

        if(Auth::User()){
            
            return $next($request);

        }
        else{
            return redirect('/login');
        }
        
    }
}
