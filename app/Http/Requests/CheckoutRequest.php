<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true ;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|email',
            'provincia' => 'required',
            'codigoPostal' => 'required|numeric',         
            'tipo-dni' => 'required',
            'nro-dni' => 'required|numeric',
            'direccion' => 'required|string',
            'cod-area' => 'required|numeric',
            'telefono' => 'required|numeric',
            'nro-calle' => 'required|numeric'
           
        ];
    }
}
