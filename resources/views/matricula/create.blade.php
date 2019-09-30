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
                @error('nr_processo')
                <p class="text-danger">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="field">

                <label>Estudante a matricular</label>
                <select id="estudante" name="estudante_id" multiple class="ui dropdown">
                    @foreach ($estudantes as $estudante)
                    <option value="{{ $estudante->id }}">{{ $estudante->nome }}</option>
                    @endforeach
                </select>
                @error('estudante_id')
                <p class="text-danger">
                    {{ $message }}
                </p>
                @enderror

            </div>


            <div class="field">
                <label for="grau_id">Grau académico</label>
                <select name="grau_id" id="grau_id" class="ui fluid dropdown">
                    @foreach ($graus as $grau)
                    <option value="{{ $grau->id }}">{{ $grau->grau }}</option>
                    @endforeach
                </select>
                @error('grau_id')
                <p class="text-danger">
                    {{ $message }}
                </p>
                @enderror
            </div>

        </div>
        <button type="submit" class="ui right labeled green icon button" tabindex="0"><i class="save icon"></i>Registar
            preços</button>
    </div>
</form>
@endsection