<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PacienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
           'nombre'=>'required|max:30',
           'apellido1'=>'required|max:25',
           'apellido2'=>'nullable|max:25',
           'cedula' => 'required|String|max:10',
            'genero'=>'required|max:2',
            'telefono'=>'required|max:10',
            'domicilio'=>'required|max:50',
            'afiliacion_id'=>'required',
            'ocupacion'=>'required|max:30',
            'descripcion'=>'required|max:255',
        ];
    }
}
