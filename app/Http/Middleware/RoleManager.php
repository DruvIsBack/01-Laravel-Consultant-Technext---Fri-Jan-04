<?php

namespace consultant\Http\Middleware;

use Closure;
use consultant\users_roles;
use Illuminate\Support\Facades\Auth;

class RoleManager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role_name){

        if (Auth::check()) {
            $user = Auth::user();
            $current_user_role_name = users_roles::where('uid', $user->id)->get()[0]->role;
            if ($current_user_role_name == $role_name) {
                return $next($request);
            }else{
                return redirect('login');
            }
        }else{
            return redirect('login');
        }
    }
}
