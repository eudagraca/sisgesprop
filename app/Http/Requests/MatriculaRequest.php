<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MatriculaRequest extends FormRequest
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
            'preco' => 'required|numeric|min:0',
            'curso_id' => 'required|numeric|min:0',
            'estudante_id' => 'required|numeric|min:0',
            'ano' => 'required|numeric|digits_between:4,4',
            'ano_escolaridade' => 'required|digits_between:1,1|numeric',

        ];
    }
}
