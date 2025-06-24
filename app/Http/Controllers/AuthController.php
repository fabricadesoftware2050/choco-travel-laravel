<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('home'));
    }

    public function redirectGoogle(Request $request)
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback(Request $request)
    {
        $isnew=false;
         $user = Socialite::driver('google')->user();

         $findUser= User::where('google_id', $user->google_id)->first();
         if(is_null($findUser)){
            $isnew=true;
         }
         $user = User::updateOrCreate(
             ['email' => $user->email], // condición de búsqueda
             [
                 'name' => $user->name,
                 'google_id' => $user->id,
                 'avatar' => $user->avatar,
                 'ip_register' => $request->ip(),
                 'email_verified_at' => $user->user['verified_email'] ? date('Y-m-d h:i:s') : null
             ]
         );
         Auth::login($user);
         return redirect(route('home'))->with("nuevo",$isnew);
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed', // importante: usa `confirmed`
        ]);;

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'ip_register' => $request->ip(),
            'password' => Hash::make($request->password), // hashear
        ]);
        Auth::login($user);
        return redirect(route('home'))->with("nuevo",true);


    }
public function login(Request $request)
    {
        $credentials=$request->validate([
            'email' => 'required|email',
            'password' => 'required', // importante: usa `confirmed`
        ]);
        $findUser= User::where('email', $request->email)->first();
        if(!is_null($findUser) && $findUser->google_id != null){
            return back()->withErrors([
                'error' => 'Su inicio de sesión es con Google',
            ])->withInput();
        }
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('home')); // redirige a la ruta deseada
        }

        return back()->withErrors([
            'error' => 'Datos de acceso incorrectos.',
        ])->withInput();


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
