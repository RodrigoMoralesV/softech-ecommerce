<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function logout()
    {
        Auth::logout();

        return redirect('index');
    }
}
