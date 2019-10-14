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
            'instituicao_ensino_medio' => 'required|min:5',
            'data_conclusao' => 'required|date|date_format:Y-m-d',
            'localidade_morada_educacao' => 'required|min:3|max:255',
            'pais_estudo' => 'required|min:3|max:255',
            'curso_id' => 'required|numeric',
            'nacionalidade' => 'required',
            'codigo_postal' => 'numeric',
            'grau_id' => 'required|numeric',

        ];
    }

    public function attributes()
    {
        return [
            'morada' => 'Morada',
            'nacionalidade' => 'Nacionalidade',
            'instituicao_ensino_medio' => 'Inst. de Ens. Med. Geral',
            'qualificacao_previa'=> 'Qualificação prévia',
            'data_conclusao' => 'Data de conclusão',
            'localidade_morada_educacao' => 'Localidade',
            'pais_estudo' => 'País de estudo',
            'curso_id' => 'Curso',
            'codigo_postal' => 'Código postal',
            'grau_id' => 'Grau',
            'morada_pais' => 'País de residência',
            'morada_localidade' => 'Localidade',
            'ocupacao' => 'Ocupação',
            'estado_civil' => 'Estado civil',
            'name' => 'Nome',
            'last_name' => 'Apelidio',
            'nr_bi' => 'Número de B.I',
            'email' => 'E-mail',
            'telefone_principal' => 'Contacto telefónico',
            'local_emissao_bi' => 'Local de emissão do B.I',
            'data_emissao_bi' => 'Data de emissão do B.I',
            'data_validade_bi' => 'Data de validade do B.I',
            'data_nascimento' =>   'Data de nascimento',
            'naturalidade' => 'Naturalidade',
            'sexo' => 'Sexo',
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute deve estar preenchido',
            'numeric' => ':attribute deve ser um número',
            'min:3' => ':attribute deve ter mais de 3 caracteres',
            'numeric' => ':attribute deve ser um número',
            'max:100' => ':attribute deve ter no máximo 100 caracteres',
            'max:255' => ':attribute deve ter no máximo 255 caracteres',
            'min:12' => ':attribute inválidio',
            'max:13' => ':attribute inválidio',
            'unique' => ':attribute já foi reistado'
        ];

    }

}
