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

    <h4 class="ui horizontal divider header"></h4>

    <div>

        <form method="POST" action="{{ route('estudante.store') }}">
            @csrf
            <div class="ui form" id="personalData">
                <div class="field">
                    <div class="two fields">
                        <div class="required field">
                            <label for="name">Nomes próprios | Given names</label>
                            <input type="text" name="name" value="{{ old('name', '') }}"
                                placeholder="Nomes próprios | Given names">
                            @error('name')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class="required field">
                            <label for="last_name">Apelidos | Family names</label>
                            <input type="text" value="{{ old('last_name', '') }}" name="last_name"
                                placeholder="Apelidos | Family names">
                            @error('last_name')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="field">
                    <div class="two fields">
                        <div class="required field">
                            <label for="bi">Bilhete de identidade | Personal identification number</label>
                            <input type="text" name="nr_bi"
                                placeholder="Bilhete de identidade | Personal identification number"
                                value="{{ old('nr_bi', '') }}" autocomplete="off">
                            @error('nr_bi')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class="required field">
                            <label for="nacionalidade">Nacionalidade | Nationality</label>

                            <select name="nacionalidade" class="ui dropdown">
                                <option value="" disabled="disabled" selected="selected">Seleccione a nacionalidade |
                                    Select
                                    a
                                    nationality</option>

                                @foreach ($nationalities as $nationality)

                                <option value="{{ $nationality }}">
                                    {{ $nationality}}</option>

                                    @if(old('nacionalidade') == $nationality)
                                        <option value="{{ $nationality}}" selected>
                                            {{ $nationality }}</option>
                                    @else
                                        <option value="{{ $nationality}}">
                                            {{ $nationality }}</option>
                                    @endif

                                @endforeach
                            </select>
                            @error('nacionalidade')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="required three fields">
                    <div class="field">
                        <label for="local_emissao_bi">Local de emissão | Place of issue</label>
                        <input type="text" value="{{ old('local_emissao_bi', '') }}" name="local_emissao_bi"
                            placeholder="Local de emissão | Place of issue" autocomplete="off">
                        @error('local_emissao_bi')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>


                    <div class="required field">
                        <label for="data_emissao_bi">Data de emissão | Issue date</label>

                        <div class="ui calendar">
                            <div class="ui input left icon">
                                <i class="calendar alternate outline icon"></i>
                                <input type="date" value="{{ old('data_emissao_bi') }}" name="data_emissao_bi"
                                    placeholder="Data de emissão | Issue date" autocomplete="off">
                            </div>
                            @error('data_emissao_bi')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                    </div>

                    <div class="required field">
                        <label for="data_validade_bi">Data de validade | Expiry date</label>
                        <div class="ui calendar">
                            <div class="ui input left icon">
                                <i class="calendar alternate outline icon"></i>
                                <input type="date" value="{{ old('data_validade_bi', '') }}" name="data_validade_bi"
                                    placeholder="Data de validade | Expiry date" autocomplete="off">
                            </div>
                            @error('data_validade_bi')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                    </div>

                </div>

                <div class="three fields">
                    <div class="required field">
                        <label for="data_nascimento">Data de nascimento | Date of birth</label>

                        <div class="ui calendar">
                            <div class="ui input left icon">
                                <i class="calendar alternate outline icon"></i>
                                <input type="date" id="date_picker" value="{{ old('data_nascimento') }}"
                                    name="data_nascimento" placeholder="Data de nascimento | Date of birth"
                                    autocomplete="off">
                            </div>
                            @error('data_nascimento')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                    </div>
                    <div class="field">
                        <label for="naturalidade">Naturalidade | Country of of birth</label>
                        <input type="text" name="naturalidade" value="{{ old('naturalidade') }}"
                            placeholder="Naturalidade | Country of of birth">
                        @error('naturalidade')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                        @enderror
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
                        @error('sexo')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                </div>

                <div class="two fields">

                    <div class="required field">
                        <label for="estado_civil">Estado civil | Marital status</label>

                        <select class="ui dropdown" name="estado_civil">
                            <option value="" disabled="disabled" selected="selected">Estado civil | Marital status
                            </option>
                            <option value="solteiro" data-calc-value="solteiro / not married">
                                solteiro / not married </option>
                            <option value="casado" data-calc-value="casado, união marital / married, marital union">
                                casado, união marital / married, marital union </option>
                            <option value="divorciado" data-calc-value="divorciado, separado / divorced, separated">
                                divorciado, separado / divorced, separated </option>
                        </select>
                        @error('estado_civil')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="required field">
                        <label for="ocupacao">Ocupação | Occupation</label>
                        <input type="text" name="ocupacao" placeholder="Ocupação | Occupation"
                            value="{{ old('ocupacao') }}" autocomplete="off">
                        @error('ocupacao')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                        @enderror
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
                                <input type="email" name="email" value="{{ old('email') }}"
                                    placeholder="Endereço electrónico de correio | E-mail">
                                @error('email')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                            <div class="required field">
                                <label for="telefone_principal">Número de telemóvel | Cellphone</label>
                                <input type="tel" name="telefone_principal" value="{{ old('telefone_principal') }}"
                                    placeholder="Número de telemóvel | Cellphone">
                                @error('telefone_principal')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <div class="two fields">
                            <div class="field">
                                <label for="telefone_alternativo">Telefone alternativo | Alternative phone</label>
                                <input type="tel" name="telefone_alternativo" value="{{ old('telefone_alternativo') }}"
                                    placeholder="Telefone aternative phone" autocomplete="off">
                                @error('telefone_alternativo')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                            <div class="field">
                                <label for="morada">Morada | Address</label>
                                <input type="text" name="morada" value="{{ old('morada') }}"
                                    placeholder="Morada | Address" autocomplete="off">
                                @error('morada')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="three fields">
                        <div class="required field">
                            <label for="morada_localidade">Localidade | Place</label>
                            <input type="text" value="{{ old('morada_localidade') }}" name="morada_localidade"
                                placeholder="Localidade | Place" autocomplete="off">
                            @error('morada_localidade')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class="required field">
                            <label for="morada_pais">Pais | Country</label>

                            <select name="morada_pais" class="ui dropdown">
                                <option disabled="disabled" selected="selected">Seleccione o país | Select
                                    country
                                </option>
                                @foreach ($bigArrayCountries as $countries)

                                    @if(old('morada_pais') == $countries->nome)
                                    <option value="{{ $countries->nome}}" selected>
                                        {{ $countries->nome }}</option>
                                    @else
                                    <option value="{{ $countries->nome}}">
                                        {{ $countries->nome }}</option>
                                    @endif

                                @endforeach
                            </select>
                            @error('morada_pais')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class="field">
                            <label for="codigo_postal">Código postal | Postal code</label>
                            <input type="text" name="codigo_postal" placeholder="Código postal | Postal code"
                                value="{{ old('codigo_postal') }}" autocomplete="off">
                            @error('codigo_postal')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                            @enderror
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
                                <input type="text" name="qualificacao_previa" value="{{ old('qualificacao_previa') }}"
                                    placeholder="12ª classe, licenciatura, ou outra | secondary school or other"
                                    autocomplete="off">
                                @error('qualificacao_previa')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                            <div class="required field">
                                <label for="instituicao_ensino_medio">Instituição de educação | Educational
                                    institution</label>
                                <input type="text" name="instituicao_ensino_medio"
                                    value="{{ old('instituicao_ensino_medio') }}"
                                    placeholder="nome completo da escola, colegio ou outra | school or other institution name"
                                    autocomplete="off">
                                @error('instituicao_ensino_medio')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                            <div class="required field">
                                <label for="curso">Curso</label>
                                <select name="curso_id" id="curso_id" class="ui dropdown">
                                    <option value="" disabled="disabled" selected="selected">Seleccione o curso | Select
                                        course
                                    </option>
                                    @foreach ($cursos as $curso)
                                    <option value="{{ $curso->id}}">
                                        {{ $curso->nome }}</option>
                                    @endforeach
                                </select>
                                @error('curso_id')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                        </div>
                        <div class="three fields">
                            <div class="required field">
                                <label for="data_conclusao">Data de conclusão | Graduation date</label>

                                <div class="ui calendar">
                                    <div class="ui input left icon">
                                        <i class="calendar alternate outline icon"></i>
                                        <input type="date" id="select_date" name="data_conclusao"
                                            value="{{ old('data_conclusao') }}"
                                            placeholder="Data de conclusão | Graduation date" autocomplete="off">
                                    </div>
                                    @error('data_conclusao')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                            </div>

                            <div class="required field">
                                <label for="localidade_morada_educacao">Localidade | Place</label>
                                <input type="text" name="localidade_morada_educacao"
                                    value="{{ old('localidade_morada_educacao') }}"
                                    placeholder="Lugar e localidade mais próxima / place" autocomplete="off">
                                @error('localidade_morada_educacao')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                            <div class="required field">
                                <label for="pais_estudo">País | Country</label>

                                <select name="pais_estudo" class="ui dropdown">
                                    <option value="" disabled="disabled" selected="selected">Seleccione o país |
                                        Select
                                        country
                                    </option>

                                    @foreach ($bigArrayCountries as $countries)
                                    @if(old('pais_estudo') == $countries->nome)
                                        <option value="{{ $countries->nome}}" selected>
                                            {{ $countries->nome }}</option>
                                        @else
                                        <option value="{{ $countries->nome}}">
                                            {{ $countries->nome }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('pais_estudo')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                        </div>

                        <div class="three fields">
                            <div class="required field">
                                <label for="grau_id">Grau adacemico a frequentar</label>

                                <select name="grau_id" id="grau_id" class="ui dropdown">
                                    <option value="" disabled="disabled" selected="selected">Seleccione o grau académico
                                    </option>
                                </select>
                                @error('grau_id')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                            <div class="field">
                                <label for="">&nbsp;</label>
                                <div class="float-right field" style="margin-bottom: 1%;">
                                    <button class="ui left labeled yellow icon button prev2"><i
                                            class="chevron left icon"></i>Anterior</button>
                                    <button class="ui right labeled green icon button submit"><i class="save icon"></i>
                                        Registar
                                        estudante</button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <h4 class="ui horizontal divider header"></h4>
                </div>

            </div>
    </div>
    </form>
</div>

</div>


<script>
    $(document).ready(function(){
        $('#curso_id').change(function(){
            if($(this).val() != ''){

                var value = $(this).val();
                console.log(value);

                $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: "{{ route('graus.fetch')}} ",
                    method: "POST",
                    data: {
                         value: value
                    },
                    success: function(result){
                    $('#grau_id').html(result);
                }, error: function(result){
                    console.log(result)
                }
            })
        }
        })
    })

</script>
@endsection