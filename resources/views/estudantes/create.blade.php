@extends('layouts.app')

@section('content')
<div class="container">

    <form class="ui form">
        <h3 class="ui dividing header">Dados pessoais</h3>
        <div class="field">
            <div class="two fields">
                <div class="required field">
                    <label for="name">Nomes próprios | Given names</label>
                    <input type="text" name="name" placeholder="Nomes próprios | Given names">
                </div>
                <div class="required field">
                    <label for="last_name">Apelidos | Family names</label>
                    <input type="text" name="last_name" placeholder="Apelidos | Family names">
                </div>
            </div>
        </div>
        <div class="field">
            <div class="two fields">
                <div class="required field">
                    <label for="bi">Bilhete de identidade | Personal identification number</label>
                    <input type="text" name="nr_bi" placeholder="Bilhete de identidade | Personal identification number"
                        autocomplete="off">
                </div>
                <div class="required field">
                    <label for="nacionalidade">Nacionalidade | Nationality</label>

                        <select name="nacionalidade" class="ui dropdown">
                            <option value="" disabled="disabled" selected="selected">Seleccione a nacionalidade | Select a nationality</option>

                            @foreach ($nationalities as $nationality)

                                <option value="{{ $nationality }}">
                                    {{ $nationality}}</option>

                            @endforeach
                        </select>
                </div>
            </div>
        </div>
        <div class="three fields">
            <div class="field">
                <label for="local_emissao_bi">Local de emissão | Place of issue</label>
                <input type="text" name="local_emissao_bi" placeholder="Local de emissão | Place of issue"
                    autocomplete="off">
            </div>
            <div class="field">
                <label for="data_emissao_bi">Data de emissão | Issue date</label>
                <input type="date" name="data_emissao_bi" placeholder="Data de emissão | Issue date" autocomplete="off">
            </div>
            <div class="field">
                <label for="data_validade_bi">Data de validade | Expiry date</label>
                <input type="date" name="data_validade_bi" placeholder="Data de validade | Expiry date"
                    autocomplete="off">
            </div>
        </div>

        <div class="three fields">
            <div class="required field ui calendar">
                <label for="data_nascimento">Data de nascimento | Date of birth</label>
                <input type="date" id="date_picker" name="data_nascimento"
                    placeholder="Data de nascimento | Date of birth">
            </div>
            <div class="field">
                <label for="naturalidade">Naturalidade | Country of of birth</label>
                <input type="text" name="naturalidade" maxlength="3" placeholder="Naturalidade | Country of of birth">
            </div>
            <div class="field">
                <label for="sexo">Sexo</label>
                <div class="ui form">
                    <div class="inline fields">

                        <div class="field">
                            <div class="ui radio checkbox">
                                <input type="radio" name="sexo" checked="checked">
                                <label>Femenino</label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui radio checkbox">
                                <input type="radio" name="sexo">
                                <label>Masculino</label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui radio checkbox">
                                <input type="radio" name="sexo">
                                <label>Outro</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="two fields">

            <div class="required field">
                <label for="estado_civil">Estado civil | Marital status</label>

                <select class="ui dropdown">
                    <option value="" disabled="disabled" selected="selected">Estado civil | Marital status</option>
                    <option value="solteiro / not married" data-calc-value="solteiro / not married">
                        solteiro / not married </option>
                    <option value="casado, união marital / married, marital union"
                        data-calc-value="casado, união marital / married, marital union">
                        casado, união marital / married, marital union </option>
                    <option value="divorciado, separado / divorced, separated"
                        data-calc-value="divorciado, separado / divorced, separated">
                        divorciado, separado / divorced, separated </option>
                </select>
            </div>

            <div class="required field">
                <label for="estado_civil">Ocupação | Occupation</label>
                <input type="text" name="estado_civil" placeholder="Ocupação | Occupation" autocomplete="off">
            </div>

        </div>


        <h4 class="ui dividing header">Contactos</h4>
        <div class="field">
            <div class="two fields">
                <div class="required field">
                    <label for="email">Endereço electrónico de correio | E-mail</label>
                    <input type="email" name="email" placeholder="Endereço electrónico de correio | E-mail">
                </div>
                <div class="required field">
                    <label for="telefone_principal">Número de telemóvel | Cellphone</label>
                    <input type="tel" name="telefone_principal" placeholder="Número de telemóvel | Cellphone">
                </div>
            </div>
        </div>
        <div class="field">
            <div class="two fields">
                <div class="required field">
                    <label for="telefone_alternativo">Telefone alternativo | Alternative phone</label>
                    <input type="tel" name="telefone_alternativo"
                        placeholder="Telefone alternativo | Alternative phone" autocomplete="off">
                </div>
                <div class="field">
                    <label for="morada">Morada | Address</label>
                    <input type="text" name="morada" placeholder="Morada | Address" autocomplete="off">
                </div>
            </div>
        </div>
        <div class="three fields">
            <div class="required field">
                <label for="localidade_morada">Localidade | Place</label>
                <input type="text" name="localidade_morada" placeholder="Localidade | Place" autocomplete="off">
            </div>
            <div class="required field">
                <label for="morada_pais">Pais | Country</label>

                <select name="morada_pais" class="ui dropdown">
                    <option value="" disabled="disabled" selected="selected">Seleccione o país | Select country</option>
                    @foreach ($countries as $country)

                    <option value="{{ $country->name }}">
                        {{ $country->name }}</option>

                    @endforeach
                </select>
            </div>
            <div class="field">
                <label for="codigo_postal">Código postal | Postal code</label>
                <input type="text" name="codigo_postal" placeholder="Código postal | Postal code" autocomplete="off">
            </div>

        </div>


        <h4 class="ui dividing header">Educação prévia</h4>
        <div class="two fields">
            <div class="required field">
                <label for="qualificacao_previa">Qualificação prévia | Previous educational qualification</label>
                <input type="text" name="qualificacao_previa"
                    placeholder="12ª classe, licenciatura, ou outra | secondary school or other" autocomplete="off">
            </div>

            <div class="required field">
                <label for="instituicao_ensino_medio">Instituição de educação | Educational institution</label>
                <input type="text" name="instituicao_ensino_medio"
                    placeholder="nome completo da escola, colegio ou outra | school or other institution name"
                    autocomplete="off">
            </div>

        </div>
        <div class="three fields">
            <div class="required field">
                <label for="data_conclusao">Data de conclusão | Graduation date</label>
                <input type="date" name="data_conclusao" placeholder="Data de conclusão | Graduation date"
                    autocomplete="off">
            </div>

            <div class="required field">
                <label for="localidade_morada">Localidade | Place</label>
                <input type="text" name="localidade_morada" placeholder="lugar e localidade mais próxima / place"
                    autocomplete="off">
            </div>
            <div class="required field">
                <label for="pais_estudo">País | Country</label>

                <select name="pais_estudo" class="ui dropdown">
                    <option value="" disabled="disabled" selected="selected">Seleccione o país | Select country</option>
                @foreach ($countries as $country)

                <option value="{{ $country->name }}">
                    {{ $country->name }}</option>

                @endforeach
                </select>
            </div>
        </div>

        <a href="cursos/create" class="ui green labeled icon button">
            <i class="save icon"></i>Registar
        </a>

    </form>
</div>
@endsection