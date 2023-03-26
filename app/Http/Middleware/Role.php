<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;
use App\Models\User;


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
        if (Auth::check()){
            $lastTime = Carbon::now()->addSeconds(30);
            Cache::put('user_online' . Auth::user()->id, true, $lastTime);
            User::where('id',Auth::user()->id)->update(['status_seen' => Carbon::now()]);
        }

        if($request->user()->role !== $role){
            return back();
        }
        
        return $next($request);
    }
}