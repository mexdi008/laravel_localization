<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Cookie;
use Illuminate\Support\Facades\Route;

class SetLanguage
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
        if (Cookie::get('lang') !== null)
        {
            if($request->lang!='az' && $request->lang!='en' && $request->lang!='tr')
            {
                $lang = Cookie::get('lang');
                $uri = $request->path();
                return redirect('/'.Cookie::get('lang').'/'.$uri);
            }
            
            else
            {
                \App::SetLocale($request->lang);
                $duration= 15;
                Cookie::queue('lang', $request->lang, $duration);
            }
        }
        else
        {
            if($request->lang!='az' && $request->lang!='en' && $request->lang!='tr')
            {  
                $uri = $request->path();
                return redirect('/az'.'/'.$uri);
            }
            
            else
            {
                \App::SetLocale($request->lang);
                $duration= 15;
                Cookie::queue('lang', $request->lang, $duration);
            }
        }
        
        return $next($request);
    }
}