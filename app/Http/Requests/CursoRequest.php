<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CursoRequest extends FormRequest
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
            'nome' => 'required|unique:cursos|min:10|max:255|string',
            'codigo' => 'required|unique:cursos|max:3|string',
            'grau' => 'required|string',
            'preco' => 'required|numeric|min:0',
            'duracao' => 'required|min:1',
            'credito' => 'required|min:1|numeric',
            'preco_cadeira_atraso' => 'required|numeric'

        ];
    }
}
