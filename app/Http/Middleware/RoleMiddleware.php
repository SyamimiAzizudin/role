<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    

    public function handle($request, Closure $next, $role = null) //var $role ni ambil dari route lepas roleCheck:$role
    {
        $user = $request->user();
        if($user && $user->roleCheck($role)){  //rolecheck refer User.php function
            return $next($request);
        } else {
            dd('penguna');
        }
    }
}
