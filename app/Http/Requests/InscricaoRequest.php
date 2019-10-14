<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InscricaoRequest extends FormRequest
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
            'cadeiras' => 'required|array',
            'semestre' => 'required|numeric',
            'ano_escolaridade' => 'required|numeric|min:0',
            'ano' => 'required|numeric|digits_between:4,4',
            'curso_id' => 'required|numeric',
            'estudante_id' => 'required|numeric',
            'preco' => 'required|numeric',

        ];
    }
}
