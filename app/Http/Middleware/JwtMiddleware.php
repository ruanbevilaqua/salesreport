<?php

namespace App\Http\Middleware;

use Closure;
use JWTAuth;
use Exception;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;

class JwtMiddleware extends BaseMiddleware
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
        try {
            // Ou pegar pela requisição ou pelo cookie. Aqui decidi pegar pelo cookie
            if(isset($_COOKIE['jwt']))
            {   
                // Se o cookie está definido, add jwt no header da requsição
                $request->headers->set('Authorization', 'Bearer '.$_COOKIE['jwt']);
            }
            $user = JWTAuth::parseToken()->authenticate();
        } catch (Exception $e) {
            if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException){
                // return view('login', ['status' => 'Token is Invalid']);
                // return response()->json(['status' => 'Token is Invalid']);
            }
            
            if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException){
                // return view('login', ['status' => 'Token is Expired']);
                // return response()->json(['status' => 'Token is Expired']);
            }
            return redirect()->route('login')->with('status', 'Authorization Token not found');
            // return view('login', ['status' => 'Authorization Token not found']);
            // return response()->json(['status' => 'Authorization Token not found']);
        
        }
        return $next($request);
    }
}