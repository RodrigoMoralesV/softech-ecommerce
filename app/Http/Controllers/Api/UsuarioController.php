<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistroRequest;
use App\Models\User;
use Auth;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;    
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

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

    // Enviar enlace de restablecimiento de contraseña
    public function passwordEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        if ($status === Password::RESET_LINK_SENT) {
            return response()->json(['message' => __($status)], 200);
        }

        return response()->json(['error' => __($status)], 400);
    }

    // Restablecer contraseña
    public function passwordUpdate(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        if ($status === Password::PASSWORD_RESET) {
            return response()->json(['message' => __($status)], 200);
        }

        return response()->json(['error' => __($status)], 400);
    }
}
