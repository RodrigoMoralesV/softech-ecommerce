<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeSoftech;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    // Retornar vista del login
    public function login()
    {
        // Mail::to(["js.199911@gmail.com", "moralesvarelarodrigo0@gmail.com", "mv.miguelv@gmail.com", "lmiguel.herl@gmail.com"])->send(new WelcomeSoftech());
        return view('login.login');
    }

    // Gestiona el login
    public function check(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('index');
        }

        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ]);
    }
}
