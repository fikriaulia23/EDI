<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // var_dump($role);
        // die;
        // jika tamu 
        if ($this->auth->guest()) {
            return redirect("/");
            // jika bukan tamu
        } else {
            // ADMIN ROLE
            if (auth()->user()->role === 'admin') {
                $response = $next($request);
                return $response;
            } else if (auth()->user()->role === 'user') {
                //dd(auth()->user()->name);
            }
        }


        // if ($request->user()->role == $role) {
        //     return $next($request);
        // } else {
        //     return redirect("/user");
        // }

        // return redirect()
        //     ->to(route('login'));
    }
}
