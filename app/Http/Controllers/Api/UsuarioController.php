<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistroRequest;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsuarioController extends Controller
{
    public function registro(RegistroRequest $request)
    {
        try
        {
            $validador = $request->validated();
        
            if(!$validador) {
                return response()->json([
                    'status' => false,
                    'message' => 'Error de validación',
                    'errors' => $validador->errors()
                ],401);
            }
        
            $request['email'] = strtolower($request->get('email'));
            $request['password'] = Hash::make($request['password']);
        
            $request = User::create([
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
        
            return response()->json([
                'status' => true,
                'message' => 'Usuario creado exitosamente',
                'token' => $request->createToken("API TOKEN")->plainTextToken
            ],200);
        }
        catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage(),
            ],500);
        }
    }

    public function login(LoginRequest $request)
    {
        try
        {
            $validador = $request->validated();

            if(!$validador){
                return response()->json([
                    'status' => false,
                    'message' => 'Error de validación',
                    'errors' => $validador->errors()
                ], 401);
            }

            if(!Auth::attempt($request->only(['email','password']))) {
                return response()->json([
                    'status' => false,
                    'message' => 'Correo y / o Contraseña no coinciden con nuestros registros',
                ], 401);
            }

            $usuario = User::where('email',$request->email)->first();
            return response()->json([
                'status' => true,
                'message' => 'Usuario Logueado exitosamente',
                'token' => $usuario->createToken("API TOKEN")->plainTextToken
            ],200);

        } 
        catch(\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage(),
            ],500);
        }
    }

    public function perfil()
    {
        $datosUsuario = auth()->user();
        return response()->json([
            'status' => true,
            'message' => 'Información del usuario',
            'data' => $datosUsuario,
            'id' => auth()->user()->id_cliente
        ],200);
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();
        return response()->json([
            'status' => true,
            'message' => 'Cerrar sesion',
            'data' => []
        ],200);
    }
}
