@extends('layouts.app')

@section('content')

<div class="container">

    <div class="ui small three steps">
        <div class="step" id="step1">
            <i class="address card icon"></i>
            <div class="content">
                <div class="title">Dados pessoais</div>
            </div>
        </div>
        <div class="disabled step" id="step2">
            <i class="id badge icon"></i>
            <div class="content">
                <div class="title">Contactos</div>
            </div>
        </div>
        <div class="disabled step" id="step3">
            <i class="book icon"></i>
            <div class="content">
                <div class="title">Educação prévia</div>
            </div>
        </div>
    </div>

    <div>

        <form method="POST" action="{{route('estudante.update', $estudante->id)}}">
            @csrf
            @method('PUT')
            <div class="ui form" id="personalData">
                <div class="field">
                    <div class="two fields">
                        <div class="required field">
                            <label for="name">Nomes próprios | Given names</label>
                            <input type="text" name="name" value="{{ $estudante->name }}"
                                placeholder="Nomes próprios | Given names">
                        </div>
                        <div class="required field">
                            <label for="last_name">Apelidos | Family names</label>
                            <input type="text" name="last_name" value="{{ $estudante->last_name }}"
                                placeholder="Apelidos | Family names">
                        </div>
                    </div>
                </div>
                <div class="field">
                    <div class="two fields">
                        <div class="required field">
                            <label for="bi">Bilhete de identidade | Personal identification number</label>
                            <input type="text" name="nr_bi" value="{{ $estudante->nr_bi }}"
                                placeholder="Bilhete de identidade | Personal identification number" autocomplete="off">
                        </div>
                        <div class="required field">
                            <label for="nacionalidade">Nacionalidade | Nationality</label>

                            <select name="nacionalidade" class="ui dropdown">

                                @foreach ($nationalities as $nationality)

                                @php

                                $essaNacionalidade = $nationality == $estudante->nacionalidade;
                                $selecao = $essaNacionalidade ? "selected = 'selected'": "";

                                @endphp

                                <option value="{{ $estudante->nacionalidade }}" {{ $selecao }}>
                                    {{ $nationality}}</option>

                                @endforeach

                            </select>
                        </div>
                    </div>
                </div>
                <div class="required three fields">
                    <div class="field">
                        <label for="local_emissao_bi">Local de emissão | Place of issue</label>
                        <input type="text" name="local_emissao_bi" value="{{$estudante->local_emissao_bi}}"
                            placeholder="Local de emissão | Place of issue" autocomplete="off">
                    </div>


                    <div class="required field">
                        <label for="data_emissao_bi">Data de emissão | Issue date</label>

                        <div class="ui calendar">
                            <div class="ui input left icon">
                                <i class="calendar alternate outline icon"></i>
                                <input type="date" name="data_emissao_bi" value="{{ $estudante->data_emissao_bi }}"
                                    placeholder="Data de emissão | Issue date" autocomplete="off">
                            </div>
                        </div>
                    </div>

                    <div class="required field">
                        <label for="data_validade_bi">Data de validade | Expiry date</label>
                        <div class="ui calendar">
                            <div class="ui input left icon">
                                <i class="calendar alternate outline icon"></i>
                                <input type="date" name="data_validade_bi" value="{{ $estudante->data_validade_bi }}"
                                    placeholder="Data de validade | Expiry date" autocomplete="off">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="three fields">
                    <div class="required field">
                        <label for="data_nascimento">Data de nascimento | Date of birth</label>

                        <div class="ui calendar">
                            <div class="ui input left icon">
                                <i class="calendar alternate outline icon"></i>
                                <input type="date" id="date_picker" name="data_nascimento"
                                    value="{{ $estudante->data_nascimento }}"
                                    placeholder="Data de nascimento | Date of birth" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label for="naturalidade">Naturalidade | Country of of birth</label>
                        <input type="text" name="naturalidade" value="{{ $estudante->naturalidade }}"
                            placeholder="Naturalidade | Country of of birth">
                    </div>
                    <div class="required field">
                        <label for="sexo">Sexo</label>
                        <div class="ui form">
                            <div class="inline fields">

                                <div class="field">
                                    <div class="ui radio checkbox">
                                        <input type="radio" value="feminino" id="feminino" name="sexo"
                                            checked="checked">
                                        <label for="feminino">Feminino</label>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="ui radio checkbox">
                                        <input type="radio" value="masculino" id="masculino" name="sexo">
                                        <label for="masculino">Masculino</label>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="ui radio checkbox">
                                        <input type="radio" value="outro" id="outro" name="sexo">
                                        <label for="outro">Outro</label>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="two fields">

                    <div class="required field">
                        <label for="estado_civil">Estado civil | Marital status</label>

                        <select class="ui dropdown" name="estado_civil">

                            @foreach ($estado_civil as $estado)

                            @php

                            $esseEstado = $estado == $estudante->estado_civil;
                            $selecao = $esseEstado ? "selected = 'selected'": "";

                            @endphp

                            <option value="{{ $estudante->estado_civil }}" {{ $selecao }}>
                                {{ ucfirst($estado)}}</option>

                            @endforeach


                        </select>
                    </div>

                    <div class="required field">
                        <label for="ocupacao">Ocupação | Occupation</label>
                        <input type="text" name="ocupacao" value="{{ $estudante->ocupacao }}"
                            placeholder="Ocupação | Occupation" autocomplete="off">
                    </div>

                </div>

                <div class="one ui buttons float-right field">
                    <button type="button" class="ui right labeled green icon button next1">Próximo<i
                            class="chevron right icon"></i></button>
                </div>
            </div>

            <!--End first form-->

            <!-- Second tab -->
            <div id="contacts">
                <div class="ui form">
                    <div class="field">
                        <div class="two fields">
                            <div class="required field">
                                <label for="email">Endereço electrónico de correio | E-mail</label>
                                <input type="email" name="email" value="{{ $estudante->email }}"
                                    placeholder="Endereço electrónico de correio | E-mail">
                            </div>
                            <div class="required field">
                                <label for="telefone_principal">Número de telemóvel | Cellphone</label>
                                <input type="tel" name="telefone_principal" value="{{ $estudante->telefone_principal }}"
                                    placeholder="Número de telemóvel | Cellphone">
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <div class="two fields">
                            <div class="required field">
                                <label for="telefone_alternativo">Telefone alternativo | Alternative phone</label>
                                <input type="tel" name="telefone_alternativo"
                                    value="{{ $estudante->telefone_alternativo }}"
                                    placeholder="Telefone alternativo | Alternative phone" autocomplete="off">
                            </div>
                            <div class="field">
                                <label for="morada">Morada | Address</label>
                                <input type="text" name="morada" value="{{ $estudante->morada }}"
                                    placeholder="Morada | Address" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="three fields">
                        <div class="required field">
                            <label for="morada_localidade">Localidade | Place</label>
                            <input type="text" name="morada_localidade" value="{{ $estudante->morada_localidade }}"
                                placeholder="Localidade | Place" autocomplete="off">
                        </div>
                        <div class="required field">
                            <label for="morada_pais">Pais | Country</label>

                            <select name="morada_pais" class="ui dropdown">

                                @foreach ($bigArrayCountries as $countries)

                                @php
                                $essePais= $countries->nome == $estudante->morada_pais;
                                $selecao = $essePais ? "selected = 'selected'": "";
                                @endphp
                                <option value="{{ $estudante->morada_pais }}" {{ $selecao }}>
                                    {{ $countries->nome}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="field">
                            <label for="codigo_postal">Código postal | Postal code</label>
                            <input type="text" name="codigo_postal" value="{{ $estudante->codigo_postal }}"
                                placeholder="Código postal | Postal code" autocomplete="off">
                        </div>

                    </div>

                    <div class="float-right field">
                        <button class="ui left labeled yellow icon button prev1"><i
                                class="chevron left icon"></i>Anterior</button>
                        <button class="ui right labeled green icon button next2">Próximo<i
                                class="chevron right icon"></i></button>
                    </div>
                </div>
            </div>
            <!--End second form-->

            <!-- Three Tab -->
            <div id="educationData">
                <div class="ui form">
                    <div class="field">
                        <div class="three fields">

                            <div class="required field">
                                <label for="qualificacao_previa">Qualificação prévia | Previous educational
                                    qualification</label>
                                <input type="text" name="qualificacao_previa"
                                    value="{{ $estudante->qualificacao_previa}}"
                                    placeholder="12ª classe, licenciatura, ou outra | secondary school or other"
                                    autocomplete="off">
                            </div>

                            <div class="required field">
                                <label for="instituicao_ensino_medio">Instituição de educação | Educational
                                    institution</label>
                                <input type="text" name="instituicao_ensino_medio"
                                    value="{{$estudante->instituicao_ensino_medio}}"
                                    placeholder="nome completo da escola, colegio ou outra | school or other institution name"
                                    autocomplete="off">
                            </div>

                            <div class="required field">
                                <label for="curso">Curso</label>
                                <select name="curso" class="ui dropdown">
                                    <option value="" disabled="disabled" selected="selected">Seleccione o curso | Select
                                        course
                                    </option>
                                    @foreach ($cursos as $curso)
                                    <option value="{{ $curso->id}}">
                                        {{ $curso->nome }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="three fields">
                            <div class="required field">
                                <label for="data_conclusao">Data de conclusão | Graduation date</label>

                                <div class="ui calendar">
                                    <div class="ui input left icon">
                                        <i class="calendar alternate outline icon"></i>
                                        <input type="date" id="select_date" name="data_conclusao"
                                            value="{{ $estudante->data_conclusao }}"
                                            placeholder="Data de conclusão | Graduation date" autocomplete="off">
                                    </div>
                                </div>
                            </div>

                            <div class="required field">
                                <label for="localidade_morada_educacao">Localidade | Place</label>
                                <input type="text" name="localidade_morada_educacao"
                                    value="{{ $estudante->localidade_morada_educacao }}"
                                    placeholder="Lugar e localidade mais próxima / place" autocomplete="off">
                            </div>
                            <div class="required field">
                                <label for="pais_estudo">País | Country</label>

                                <select name="pais_estudo" class="ui dropdown">

                                    @foreach ($bigArrayCountries as $countries)

                                    @php

                                    $essePais= $countries->nome == $estudante->pais_estudo;
                                    $selecao = $essePais ? "selected = 'selected'": "";

                                    @endphp

                                    <option value="{{ $estudante->pais_estudo }}" {{ $selecao }}>
                                        {{ $countries->nome}}</option>

                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="three fields">
                            <div class="required field">
                                <label for="grau_id">Grau adacemico a frequentar</label>

                                <select name="grau_id" class="ui dropdown">
                                    <option value="" disabled="disabled" selected="selected">Seleccione o grau académico
                                    </option>

                                    @foreach ($graus as $grau)
                                    <option value="{{ $grau->id}}">
                                        {{ $grau->grau }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="field">
                                <label for="">&nbsp;</label>
                                <div class="float-right field" style="margin-bottom: 1%;">

                                    <button class="ui left labeled yellow icon button prev2"><i class="chevron left icon"></i>Anterior</button>
                                    <button class="ui right labeled green icon button submit"><i class="save icon"></i>
                                        Atualizar
                                        dados do
                                        estudante</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>
</div>
@endsection