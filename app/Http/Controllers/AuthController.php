<?php

namespace App\Http\Controllers;

use App\Mail\SendWelcomeMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;
use Carbon\Carbon;


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
        $userData = Socialite::driver('google')->user();

        $findUser = User::where('google_id', $userData->id)->first();
        $isNew = !$findUser;

        if ($isNew) {
            $findUser = new User;
        }

// Asignar o actualizar campos
        $findUser->name = $userData->name;
        $findUser->email = $userData->email;
        $findUser->google_id = $userData->id;
        $findUser->avatar = $userData->avatar;
        $findUser->verification_sent_mail_at = now();
        $findUser->ip_register = $request->ip();
        $findUser->email_verified_at = $userData->user['verified_email'] ? now() : null;
        $findUser->token_account_verified = $userData->user['verified_email'] ? Str::uuid() : null;

        Mail::to($findUser->email)->send(new SendWelcomeMail("¡Bienvenid@ a Nuestra Comunidad!",$findUser->name,$findUser->email,null));
// Guardar datos
        $findUser->save(); // `save()` sirve para ambos casos (nuevo o existente)

// Autenticar usuario
        Auth::login($findUser);

// Redirigir según si es nuevo
        return redirect()->route('home')->with('nuevo', $isNew);


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
            'token_account_verified' => $uuid = Str::uuid(),
            'verification_sent_mail_at' => now(), // Actualiza el tiempo del último envío
            'password' => Hash::make($request->password), // hashear
        ]);
        Mail::to($request->email)->send(new SendWelcomeMail("¡Bienvenid@ a Chocó Travel!",$request->name,$request->email,route('verify.account')."?token=".$uuid));
        //return 'Correo de bienvenida enviado.';
        Auth::login($user);
        return redirect(route('home'))->with("nuevo",true);
    }

    public function resendEmailVerifyAccount(Request $request)
    {

        $user = Auth::user();
        $ultimaVerificacion = Carbon::parse($user->verification_sent_mail_at);
        $minutos = $ultimaVerificacion->diffInMinutes(now());


        // Bloquear reenvío si ya lo hizo hace menos de 5 minutos
        // Limitar a 1 intento cada 3 minutos
        if ($minutos < 3) {
            return back()->with('error', 'El enlace ya fue enviado, debes esperar unos minutos antes de reenviar el correo.');
        }

        // Generar nuevo token UUID
        $uuid = Str::uuid();
        $user->token_account_verified = $uuid;
        $user->verification_sent_mail_at = now(); // Actualiza el tiempo del último envío


        Mail::to($user->email)->send(new SendWelcomeMail("¡Verificar cuenta!",$user->name,$user->email,route('verify.account')."?token=".$uuid));
        $user->save();

        return view('auth.verify-sent');
    }

    public function verifyAccount(Request $request)
    {

        $user = Auth::user();

        if ($user->email_verified_at !=null) {
            return back()->with('message', 'Su cuenta ya fue verificada.');
        }
        if($user->token_account_verified==$request->input('token')){
            $user->email_verified_at = now(); // Actualiza el tiempo
            $user->save();
            return view('auth.verified');
        }else{
            return back()->with('error', 'El token generado no es correcto, por favor intente con el más reciente.');
        }


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
