<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;

class CheckValidate
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
            //echo "hii form Middleware";
        /*$path = $request->path();
        if(Auth::User()){
            return redirect($path);
        }else{
            return redirect("/login")->with('danger', 'please login fiirst');
        }*/
        return $next($request);
    }
}
