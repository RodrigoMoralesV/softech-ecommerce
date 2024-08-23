<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistroRequest;
use App\Models\Ciudad;
use App\Models\Tipo_identificacion;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegistroController extends Controller
{
    public function registerForm()
    {
        $ciudades = Ciudad::all();
        $tipo_identificacion = Tipo_identificacion::all();

        return view('register.register', compact('ciudades', 'tipo_identificacion'));
    }

    public function store(RegistroRequest $request)
    {
        $validador = $request->validated();

        if (!$validador) {
            return back()->withErrors($validador);
        }

        $request['email'] = strtolower($request->get('email'));

        $request['password'] = Hash::make($request['password']);

        $user = User::create([
            'email' => $request['email'],
            'tipo_identificacion_id' => $request['tipo_identificacion_id'],
            'numero_identificacion_cliente' => $request['numero_identificacion_cliente'],
            'nombre_cliente' => $request['nombre_cliente'],
            'apellido_cliente' => $request['apellido_cliente'],
            'password' => $request['password'],
            'telefono_cliente' => $request['telefono_cliente'],
            'direccion_entrega_cliente' => $request['direccion_entrega_cliente'],
            'fecha_nacimiento_cliente' => $request['fecha_nacimiento_cliente'],
            'ciudad_id' => $request['ciudad_id'],
        ]);

        // Iniciar sesión después de registrarse
        Auth::login($user);

        // Para verificar el correo
        event(new Registered($user));

        return redirect()->route('verification.notice');
    }
}
