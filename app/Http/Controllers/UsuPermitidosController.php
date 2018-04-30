<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuPermitidosController extends Controller
{
    public function __construct()
    {
        $this->middleware('UsuariosMiddleware');
    }

    public function showIndex(){

        return view('permitido');
    }
}
