<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CadeiraRequest extends FormRequest
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
            'nome' => 'required|unique:cursos|min:5|max:255|string',
            'codigo' => 'required|unique:cursos|max:3|string',
            'curso' => 'required|string',
            'creditos' => 'required|numeric|min:1',
            'ano' => 'required|min:1|string',
            'semestre' => 'required|min:1|string',
        ];
    }
}
