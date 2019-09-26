@extends('layouts.app')

@section('content')

    <form class="ui form" action="{{route('cursos.store')}}" method="POST">
        @csrf
        <h4 class="ui dividing header"> <a href="/cursos"><i class="green long arrow alternate left icon"></i></a> Registar curso
        </h4>
        <div class="field">
            @csrf
            <div class="three fields">
                <div class="field">

                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" value="{{ old('nome') }}" placeholder="Nome do curso" autocomplete="off" required>
                </div>
                <div class="field">
                    <label for="codigo">Codigo do curso</label>
                    <input type="text" name="codigo" id="codigo"  value="{{ old('codigo') }}" placeholder="Codigo do curso" autocomplete="off"
                        required>
                </div>
                <div class="field">
                    <label for="nome">Grau académico</label>
                    <select name="grau" id="grau" class="ui fluid dropdown">
                        <option value="" disabled selected>Seleccione o grau académico</option>
                        @foreach ($graus as $grau)
                        <option value="{{ $grau->id }}">{{ $grau->grau }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="three fields">
                <div class="field">

                    <label for="preco">Preço</label>
                    <div class="ui right labeled input">
                        <label for="amount" class="ui label">MZN</label>
                        <input type="text" name="preco" id="preco" value="{{ old('preco') }}" placeholder="Preço" autocomplete="off" required>

                        <div class="ui basic label">
                            .00
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label for="duracao">Duração</label>
                    <div class="ui right labeled input">
                        <input type="number" name="duracao" id="duracao" value="{{ old('duracao') }}" placeholder="Duração" min="1"
                            autocomplete="off" required>
                        <div class="ui basic label">
                            Anos
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label for="credito">Credito</label>
                    <input type="number" name="credito" id="credito" min="1" value="{{ old('credito') }}" placeholder="Credito" autocomplete="off"
                        required>
                </div>
            </div>

            <div class="three fields">

                    <div class="field">
                               <label for="duracao">Preço de cadeira em atraso</label>
                            <div class="ui right labeled input">
                                <div class="ui basic label">
                                    MZN
                                </div>
                                <input type="number" name="preco_cadeira_atraso" id="preco_cadeira_atraso" value="{{ old('preco_cadeira_atraso') }}" placeholder="Preço" autocomplete="off" required>
                                <div class="ui basic label">
                                    .00
                                </div>
                            </div>
                        </div>

                        <div class="field">
                            <label for="buttonSub">
                                &nbsp;
                            </label>
                                <button type="submit" id="buttonSub" class="ui right labeled green icon button" tabindex="0"><i class="save icon"></i>Registar curso</button>
                            </div>

            </div>
        </div>
    </form>

@endsection