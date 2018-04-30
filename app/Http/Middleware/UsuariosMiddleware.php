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
        if (Permitido::where('permiso',$request->input('permiso'))!==0 ){

            return view('permitido',['usuario'=>$usuario]);
            return $next($request);
        }else{

            return view('sinpermiso',['usuario'=>$usuario]);

        }

    }
}
