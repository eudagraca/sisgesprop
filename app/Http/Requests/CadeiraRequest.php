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
         $id = $this->route('id');

        return [
            'nome' => 'required|min:5|max:255|string',
            'codigo' => 'required|min:4|string',
            // 'curso' => 'required|array',
            'creditos' => 'required|numeric|min:1',
            'ano' => 'required|min:1|string',
            'semestre' => 'required|min:1|string',
        ];
    }
}
