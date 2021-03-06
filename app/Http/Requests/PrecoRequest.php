<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PrecoRequest extends FormRequest
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
            'preco_matricula' => 'required|numeric|min:0',
            'preco_inscricao' => 'required|numeric|min:0',
            'grau_id' => 'required|integer',
        ];
    }
}
