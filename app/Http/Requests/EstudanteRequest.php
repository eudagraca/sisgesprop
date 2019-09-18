<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstudanteRequest extends FormRequest
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
            'name' => 'required|string|min:3|max:255',
            'last_name' => 'required|string|min:3|max:225',
            'nr_bi' => 'required|string|min:12|max:13|unique:estudantes',
            'email' => 'required|email|max:255',
            'telefone_principal' => 'required|numeric',
            'local_emissao_bi' => 'required|string|min:3',
            'data_emissao_bi' => 'required|date|date_format:Y-m-d',
            'data_validade_bi' => 'required|date|date_format:Y-m-d',
            'data_nascimento' => 'required|date|date_format:Y-m-d',
            'naturalidade' => 'required|string|min:3',
            'sexo' => 'required|string',
            'estado_civil' => 'required|string|max:100',
            'ocupacao' => 'required|string|max:100',
            'morada' => 'required|string|max:100',
            'morada_localidade' => 'required|max:100',
            'morada_pais' => 'required|max:255',
            'qualificacao_previa' => 'required|min:5|max:100',
            'instituicao_ensino_medio' => 'required|min:10',
            'data_conclusao' => 'required|date|date_format:Y-m-d',
            'localidade_morada_educacao' => 'required|min:3|max:255',
            'pais_estudo' => 'required|min:3|max:255',
            'curso_id' => 'required|numeric'

        ];
    }
}
