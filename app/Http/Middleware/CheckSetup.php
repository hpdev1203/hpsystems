<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Setup;

class CheckSetup
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $isSetuped = true;
        $checkSetup = Setup::count();
        if($checkSetup == 0){
            $isSetuped = false;
        }else{
            $setup = Setup::first();
            $status = $setup->status;
            if($status != "completed"){
                $isSetuped = false;
            }
        }
        $link = $request->getPathInfo();
        if(substr(strtolower($link),0,6)."/" == "/setup/" || substr(strtolower($link),0,7) == "/setup/"){
            if ($isSetuped) {
                return redirect('login');
            }
        }else{
            if (!$isSetuped) {
                return redirect('setup');
            }
        }
        return $next($request);
    }
}
