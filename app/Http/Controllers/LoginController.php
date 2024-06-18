<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // Retornar vista del login
    public function login(){
        return view('login.login');
    }

    // Gestiona el login
    public function check(Request $request){
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('index');
        }

        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ]);
    }
}
