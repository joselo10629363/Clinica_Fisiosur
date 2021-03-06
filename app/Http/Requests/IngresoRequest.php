<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IngresoRequest extends FormRequest
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
            
           'monto'=>'required|numeric ',
            'concepto'=>'required|alpha|max:50',
             'saldo'=>'required|numeric ',
            'descripcion'=>'required|max:255',


        ];
    }
}
