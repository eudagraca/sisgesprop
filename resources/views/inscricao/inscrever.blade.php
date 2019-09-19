@extends('layouts.app')

@section('content')

<form class="ui form" method="POST" action="{{ route('inscricao.store')}}">
        @csrf
        <h4 class="ui dividing header"> <a href="/estudante"><i class="green long arrow alternate left icon"></i></a> Lista de estudantes
        </h4>
        <div class="field">
            <div class="three fields">
                <div class="field">

                    <label for="nome">Nome</label>
                    <input type="hidden" name="estudante_id" id="estudante_id" value="{{ $estudante->id }}">

                    <input type="text" name="nome" id="nome" value="{{ $estudante->name }}" disabled>
                </div>


                <div class="field">
                    <label for="codigo">Curso</label>
                    <input type="hidden" name="curso_id" id="curso_id"  value="{{ $estudante->curso->id }}">
                    <input type="text" name="codigo" id="codigo"  value="{{ $estudante->curso->nome }}" disabled>
                </div>

                <div class="field">
                    <label for="ano">ano</label>
                    <input type="hidden" name="ano" id="ano"  value="{{ $matricula->ano }}">
                    <input type="text" name="ano" id="ano"  value="{{  $matricula->ano }}" disabled>
                </div>

                
            </div>
           
            <div class="three fields">
                <div class="field">
                    <label for="ano_escolaridade">Ano de escolaridade</label>
                    <input type="hidden" name="ano_escolaridade" id="ano_escolaridade"  value="{{ $matricula->ano_escolaridade }}">
                    <input type="text" name="ano_escolaridade" id="ano_escolaridade"  value="{{  $matricula->ano_escolaridade }}" disabled>
                </div>

                <div class="field">
                    <label for="semestre">Semestre</label>
                    <select name="semestre" id="semestre" class="ui fluid dropdown">
                        <option value="1">I semestre</option>
                        <option value="2">II semestre</option>
                    </select>
                </div>

                <div class="field">

                    <label>Selecione as cadeiras</label>
                    <select id="cadeiras" name="cadeiras[]" multiple class="ui dropdown">
                        @foreach ($cadeiras as $cadeira)
                        <option value="{{ $cadeira['id'] }}">{{ $cadeira['nome'] }}</option>
                        @endforeach
                    </select>

            </div>
            </div>

            <div class="three fields">
                 <div class="field">
                    <label for="valor_pagar">Valor a pagar</label>
                    <input type="hidden" name="valor_pagar" id="valor_pagar">
                    <input type="text" name="valor_pagar" id="valor_pagar" disabled>
                </div>

                <div class="field">
                    <label for="">&nbsp;</label>
                    <button type="submit" class="ui button green">Inscrever</button>
                </div>
            </div>

        </div>
    </form>

@endsection