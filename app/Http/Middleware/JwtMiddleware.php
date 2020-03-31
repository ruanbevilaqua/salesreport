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
                return view('login', ['status' => 'Token inválido']);
            }
            
            if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException){
                return view('login', ['status' => 'Token expirado']);
            }
            return view('login', ['status' => 'Token não encontrado']);
        }
        return $next($request);
    }
}