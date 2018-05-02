<?php

namespace App\Http\Middleware;

use Closure;
use App\Permitido;
class UsuariosMiddleware
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
        $usuario->$request->get('usuario');
        if (Permitido::where('nombreUsu',$usuario)->first()->permiso){

             return $next($request);
        }else{

            return view('sinpermiso',['usuario'=>$usuario]);

        }

    }
}
