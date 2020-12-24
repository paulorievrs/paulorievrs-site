<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CustomAuth
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $path = $request->path();

        $sessao = Session::get('user');


        if(($path === "login" || $path === "cadastro") && ($sessao)) {
            return view('admin');
        }

        if(($path !== "login" || $path !== "cadastro") && !($sessao)) {
            return view('login');
        }

        return $next($request);
    }

}
