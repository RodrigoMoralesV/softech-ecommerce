<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "nombre_cliente" => "required|max:200",
            "apellido_cliente" => "required|max:200",
            "email" => "required|email|max:200",
            "password" => "required|max:255",
            "telefono_cliente" => "required|max:15",  
            "tipo_identificacion_id" => "required",
            "numero_identificacion_cliente" => "required|max:20",
            "direccion_entrega_cliente" => "required|max:200",
            "fecha_nacimiento_cliente" => "required",
            "ciudad_id" => "required",
        ];
    }
}
