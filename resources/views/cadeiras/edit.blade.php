@extends('layouts.app')

@section('content')


<form class="ui form" action="{{route('cadeiras.update', $cadeira->id)}}" method="POST">
    @csrf
    @method('PUT')
    <h4 class="ui dividing header"> <a id="showCursos"><i class="green long arrow alternate left icon"></i></a>
        Registo de Cadeira
    </h4>
    <div class="field">


        <div class="three fields">
            <div class="field">

                <label for="nome">Nome da cadeira</label>
                <input type="text" name="nome" id="nome" value="{{$cadeira->nome}}" placeholder="Nome da cadeira"
                    autocomplete="off" required>
                    @error('nome')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                    @enderror
            </div>
            <div class="field">
                <label for="codigo">Codigo da cadeira</label>
                <input type="text" name="codigo" id="codigo" value="{{$cadeira->codigo}}"
                    placeholder="Codigo da cadeira" autocomplete="off" required>
                @error('codigo')
                <p class="text-danger">
                    {{ $message }}
                </p>
                @enderror
            </div>
            <div class="field">

                <div class="">
                    <label>Selecione os cursos</label>
                    <select id="cursos" name="curso[]" multiple class="form-control">
                        @foreach ($cursos as $curso)
                        <option value="{{ $curso->id }}">{{ $curso->nome }}</option>
                        @endforeach
                    </select>
                </div>
                @error('curso')
                <p class="text-danger">
                    {{ $message }}
                </p>
                @enderror

            </div>
        </div>

        <div class="three fields">
            <div class="field">

                <label for="creditos">Número de créditos</label>
                <div class="ui right labeled input">
                    <input type="number" name="creditos" id="creditos" value="{{$cadeira->creditos}}"
                        placeholder="Número de créditos" autocomplete="off" required>
                    <div class="ui basic label">
                        Créditos
                    </div>
                </div>
                @error('creditos')
                <p class="text-danger">
                    {{ $message }}
                </p>
                @enderror
            </div>
            <div class="field">
                <label for="ano">Ano</label>
                <select name="ano" id="ano" class="ui fluid dropdown">
                    <option value="1">1°</option>
                    <option value="2">2°</option>
                    <option value="3">3°</option>
                    <option value="4">4°</option>
                </select>
                @error('ano')
                <p class="text-danger">
                    {{ $message }}
                </p>
                @enderror
            </div>
            <div class="field">
                <label for="semestre">Semestre</label>
                <select name="semestre" id="semestre" class="ui fluid dropdown">
                    <option value="1">I°</option>
                    <option value="2">II°</option>
                </select>
                @error('semestre')
                <p class="text-danger">
                    {{ $message }}
                </p>
                @enderror
            </div>
        </div>
        <button type="submit" class="ui right labeled green icon button" tabindex="0"><i class="save icon"></i>Atualizar
            cadeira</button>
    </div>
</form>

@endsection