<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;
use Session;
use Illuminate\Support\Facades\Auth;
class admincheckexiste
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
        if(Auth::check()){
            $user=Auth::user();
            if($user->user_type=='2'){
                return $next($request);
            }
            else{
                if(Session::get("is_web")=='1'){
                    return redirect('/');
                }else{
                    return redirect('admin/');
                }

            }

        }else{
            if(Session::get("is_web")=='1'){
                    return redirect('/');
            }else{
                    return redirect('admin/');
            }
        }
    }
}
