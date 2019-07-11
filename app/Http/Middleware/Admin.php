<?php
namespace App\Http\Middleware;
use Closure;
use Auth;
class Admin
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
        if( Auth::check() && Auth::user()->isAdmin()==1 ) {
            return $next($request);
        } if(Auth::check() && Auth::user()->isAdmin()==2){

            return $next($request);

        }else {
            abort(403, 'Unauthorized action. ไม่ได้รับอณุญาติ');
        }
    }
}
