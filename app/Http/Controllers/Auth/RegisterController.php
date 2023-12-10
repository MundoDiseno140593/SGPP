<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Tipo;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('showRegistrationForm');
    }

    public function showRegistrationForm()
    {
        $tipos = Tipo::whereIn('id', [1, 2])->get();
        // dd($tipos); // Verifica si se obtienen los tipos correctamente
        return view('auth.register', compact('tipos'));

    }


    // public function register_create(Request $request)
    // {
    //     $user = new User();

    //     $user->name = $request->name;
    //     $user->email = $request->email;
    //     $user->username = $request->username;
    //     $user->password = Hash::make($request->password);
    //     $user->id_tipo = $request->id_tipo;

    //     $user->save();

    //     Auth::login($user);


    //     return redirect(route('dashboard'));
    // }

//     public function register_create(Request $request)
// {

// //  dd($request->all());


//     try {
//         Log::info('Entrando en register_create');

//         $request->validate([
//             'name' => 'required|string|max:255',
//             'email' => 'required|string|email|max:255|unique:users',
//             'username' => 'required|string|max:255|unique:users',
//             'password' => 'required|string|min:8|confirmed',
//             'tipo' => 'required|exists:tipos,id',
//         ]);


//         $user = new User();

//         $user->name = $request->name;
//         $user->email = $request->email;
//         $user->username = $request->username;
//         $user->password = Hash::make($request->password);
//         dd($request->tipo);
//         $user->tipo()->associate($request->tipo);

//         $user->save();

//         dd($user);

//         Auth::login($user);

//         Log::info('Usuario registrado con éxito');
//         return redirect(route('dashboard'));
//     } catch (\Exception $e) {
//         Log::error('Error al registrar usuario: ' . $e->getMessage());
//          // Agregar redirección de vuelta al formulario de registro con un mensaje de error si es necesario
//         return redirect()->back()->with('error', 'Error al registrar usuario. Por favor, inténtelo de nuevo.');
//     }
// }



public function register_create(Request $request)
{
    try {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:8',
            'tipo' => 'required|exists:tipos,id',
        ]);



        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->id_tipo = $request->tipo;



        $user->save();

        Auth::login($user);

        return redirect(route('dashboard'));
    } catch (\Exception $e) {
        dd("Error: " . $e->getMessage());
        return redirect()->back()->with('error', 'Error al registrar usuario. Por favor, inténtelo de nuevo.');
    }
}

}
