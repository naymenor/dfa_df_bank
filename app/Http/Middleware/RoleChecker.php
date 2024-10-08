<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\userRole;

class RoleChecker
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    

    public function handle(Request $request, Closure $next, $admin, $buinessDep, $loanDep): Response
    {
        //$userRole = userRole::where('user_id', $user->id)->firstOrFail();
        return $next($request);
    }
}
