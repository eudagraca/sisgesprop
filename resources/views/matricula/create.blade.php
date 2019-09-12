@extends('layouts.app')

@section('content')


<form class="ui form" id='preco_form' action="{{ route('matricula.store') }}" method="POST">
    @csrf
    <h4 class="ui dividing header"> <a href="/preco"><i class="green long arrow alternate left icon"></i></a> Matricular estudante
    </h4>
    <div class="field">
        @csrf
        <div class="three fields">
            <div class="field">

                <label for="nr_processo">Ano letivo da matricula</label>
                <div class="ui left labeled input">
                    <label for="year" class="ui label icon button"><i class="calendar icon"></i></label>
                    <input type="month" name="year" id="nr_processo" placeholder="Preço de matricula"
                        autocomplete="off" required>

                </div>
            </div>

            <div class="field">

                <label>Estudante a matricular</label>
                <select id="estudante" name="estudante" multiple class="ui dropdown">
                    @foreach ($estudantes as $estudante)
                    <option value="{{ $estudante->id }}">{{ $estudante->nome }}</option>
                    @endforeach
                </select>

            </div>


            <div class="field">
                <label for="grau">Grau académico</label>
                <select name="grau" id="grau" class="ui fluid dropdown">
                    <option value="Licenciatura">Licenciatura</option>
                    <option value="Mestrado">Mestrado</option>
                </select>
            </div>

        </div>
        <button type="submit" class="ui right labeled green icon button" tabindex="0"><i class="save icon"></i>Registar
            preços</button>
    </div>
</form>
@endsection