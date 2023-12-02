<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    function index() {
        return view('auth.login');
    }

    use AuthenticatesUsers;


    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::LOGIN;


    public  function login_acceso(Request $request):RedirectResponse {
        // dd($request->all()); imprir en laravel

       $acredenciales= $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);

        // $data=[
        //     'username'=>$request->user,
        //     'password'=>$request->pass
        // ];

        if (Auth::attempt($acredenciales)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }else{
            return redirect()->route('login')->with('error','usuario y Contraseña Incorrectas');
        }

    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }
}
