@extends('layouts.app')

@section('content')

    <form class="ui form" action="" method="POST">
        @csrf
        <h4 class="ui dividing header"> <a id="showCursos"><i class="green long arrow alternate left icon"></i></a>
            Registo de Cadeira
        </h4>
        <div class="field">
            @csrf
            <div class="three fields">
                <div class="field">

                    <label for="nome">Nome da cadeira</label>
                    <input type="text" name="nome" id="nome" placeholder="Nome da cadeira" autocomplete="off" required>
                </div>
                <div class="field">
                    <label for="codigo">Codigo da cadeira</label>
                    <input type="text" name="codigo" id="codigo" placeholder="Codigo da cadeira" autocomplete="off"
                        required>
                </div>
                <div class="field form-group">
                    {{-- <label for="curso">Curso</label>
                    <select name="curso" id="curso" multiple="" class="ui fluid dropdown">
                        @foreach ($cursos as $curso)
                        <option value="{{ $curso->id }}">{{ $curso->nome }}</option>
                    @endforeach
                    </select> --}}



                    <select id="select" multiple="multiple">
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>

                    {{-- <script defer>
                    var config = {
                        '.chosen-select' : {},
                        '.chosen-select-deselect' : {allow_single_deselect: true},
                        '.chosen-select-no-single': {disable_search_threshold: 10},
                        '.chosen-select-no-result': {no_results_text: 'Oops, nada encontrado'},
                        '.chosen-select-width': {width: "95%"}
                    }

                    for(var selector in config){
                    $(selector).chosen(config[selector]);
                    }


                    </script>  --}}


                    <script>
                        $(function () {
                            $('#select').multipleSelect({
                              width: 500
                            })
                          })
                    </script>

                </div>
            </div>

            <div class="three fields">
                <div class="field">

                    <label for="numero_creditos">Número de créditos</label>
                    <div class="ui right labeled input">
                        <input type="number" name="numero_creditos" id="numero_creditos"
                            placeholder="Número de créditos" autocomplete="off" required>
                        <div class="ui basic label">
                            Créditos
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label for="ano_de_estudo">Ano</label>
                    <select name="ano_de_estudo" id="ano_de_estudo" class="ui fluid dropdown">
                        <option value="1">1°</option>
                        <option value="2">2°</option>
                        <option value="3">3°</option>
                        <option value="4">4°</option>
                    </select>
                </div>
                <div class="field">
                    <label for="semestre_de_estudo">Semestre</label>
                    <select name="semestre_de_estudo" id="semestre_de_estudo" class="ui fluid dropdown">
                        <option value="1">I°</option>
                        <option value="2">II°</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="ui right labeled green icon button" tabindex="0"><i
                    class="save icon"></i>Registar cadeira</button>
        </div>


        <div class="ui multiple selection dropdown">
            <input name="gender" type="hidden" value="0,1">
            <i class="dropdown icon"></i>
            <div class="default text">Default</div>
            <div class="menu">
                <div class="item" data-value="0">Value</div>
                <div class="item" data-value="1">Another Value</div>
            </div>
        </div>
        <div class="ui selection dropdown">
            <input name="gender" type="hidden">
            <div class="default text">Select a value</div>
            <i class="dropdown icon"></i>
            <div class="menu">
                <div class="item" data-value="0">Value</div>
                <div class="item" data-value="1">Another Value</div>
            </div>
        </div>
        <div class="ui button">Clear </div>
    </form>


    <script defer>


    $('.clear.example .button')
    .on('click', function() {
    $('.clear.example .ui.dropdown')
    .dropdown('clear')
    ;
    })
    ;

    </script>


@endSection