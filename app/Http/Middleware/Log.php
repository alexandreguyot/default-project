<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Log
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

        $message = sprintf("Timestamp : %s || Referer : %s || URl : %s || Adress IP : %s || is Ajax Request :  %d || Method : %s  || Route  : %s || Route hasParameter :  %d || Auth on website : %d",
            date_timestamp_get(date_create()), $request->server('HTTP_REFERER')  ,$request->url(),  $request->ip(), $request->ajax(), $request->method() , $request->route()->getName(),  $request->route()->hasParameters(), Auth::check());

        if($request->route()->hasParameters()){
            foreach ($request->route()->parametersWithoutNulls() as $key => $value ) {
                $message = $message ." || Parameter :  ". $key . " = ". $value;
            }
        }
        \Log::info($message);
        return $next($request);
    }
}
