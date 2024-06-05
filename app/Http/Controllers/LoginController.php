<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // Retornar vista del login
    public function login(){
      return view('login.login');
    }

    // Gestiona el login
    public function check(Request $request){
      $datos = $request->except('_token');
      
      dd(Auth::attempt($datos) 
      );

      if(Auth::attempt($datos)
      ) {
        $datos->session()->regenerate();

        return redirect()->intended('index');
      }

      return back()->withErrors([
        'email' => 'Error del correo',
        'password' => 'Error de la clave'
      ]);
    }

    // public function username()
    // {
    //   return 'correo_cliente';
    // }

    // public function getAuthPasswordName()
    // {
    //   return $this->clave_cliente;
    // }
}
