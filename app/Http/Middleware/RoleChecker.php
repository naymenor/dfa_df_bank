<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\userRole;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;


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

        $userRole = userRole::where('user_id', Auth::user()->id)->select('role_name')->first();
        // 'user_role' => $userRole->role_name,
        // return $next($request);

        if (in_array($admin, $userRole->role_name)) {
            return $next($request);
        }
        else if (in_array($buinessDep, $userRole->role_name)) {
            return $next($request);
        }
        else if (in_array($loanDep, $userRole->role_name)) {
            return $next($request);
        }
        return response()->json(['success' => false,'message' => 'Unauthorized'], 401);
    }

}
