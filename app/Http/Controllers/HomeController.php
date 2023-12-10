<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        if (Auth::check()) {
            $usuario = Auth::user();
            $nombreUsuario = $usuario->name;
        } else {
            $nombreUsuario = null;
        }

        $fecha = now();
        return view('dashboard', compact('fecha'))->with('nombreUsuario', $nombreUsuario);
    }
}
