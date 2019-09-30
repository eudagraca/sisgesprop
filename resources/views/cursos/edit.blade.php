@extends('layouts.app')
@section('content')
<div class="ui container">


    <form class="ui form" action="{{route('cursos.update', $curso->id)}}" method="POST">
        @method('PUT')
        <h4 class="ui dividing header"> <a href="/cursos"><i class="green long arrow alternate left icon"></i></a>
            Actualizar dados do
            cursos</h4>
        <div class="field">
            @csrf
            <div class="three fields">
                <div class="field">

                    <label for="nome">Nome</label>
                    <input type="text" value="{{ $curso->nome}}" name="nome" id="nome" placeholder="Nome do curso"
                        autocomplete="off" required>
                    @error('nome')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                <div class="field">
                    <label for="codigo">Codigo do curso</label>
                    <input type="text" name="codigo" value="{{$curso->codigo}}" id="codigo"
                        placeholder="Codigo do curso" autocomplete="off" required>
                    @error('codigo')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                <div class="field">
                    <label for="grau_id">Grau académico</label>
                    <select name="grau_id" id="grau_id" class="ui fluid dropdown">


                        @foreach ($graus as $grau)
                        {{ $esseGrau=$curso->grau_id==$grau->id }}
                        {{ $selecao=$esseGrau?"selected='selected'":"" }}

                        {{ $id = $grau->id }}
                        <option value="{{ $id }}" {{ $selecao }}>
                            {{ $grau->grau }}
                        </option>
                        @endforeach
                    </select>
                    @error('grau_id')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
            </div>

            <div class="three fields">
                <div class="field">

                    <label for="preco">Preço</label>
                    <div class="ui right labeled input">
                        <label for="amount" class="ui label">MZN</label>
                        <input type="text" name="preco" value={{$curso->preco}} id="preco" placeholder="Preço"
                            autocomplete="off" required>

                        <div class="ui basic label">
                            .00
                        </div>
                    </div>
                    @error('preco')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="field">
                    <label for="duracao">Duração</label>
                    <div class="ui right labeled input">
                        <input type="number" name="duracao" value={{$curso->duracao}} id="duracao" placeholder="Duração"
                            min="1" autocomplete="off" required>

                        <div class="ui basic label">
                            Anos
                        </div>
                    </div>
                    @error('duracao')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                <div class="field">
                    <label for="credito">Credito</label>
                    <input type="number" name="credito" id="credito" value={{$curso->credito}} min="1"
                        placeholder="Credito" autocomplete="off" required>
                    @error('credito')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
            </div>

            <div class="three fields">

                <div class="field">
                    <label for="duracao">Preço de cadeira em atraso</label>
                    <div class="ui right labeled input">
                        <div class="ui basic label">
                            MZN
                        </div>
                        <input type="text" value="{{ $curso->preco_cadeira_atraso}}" name="preco_cadeira_atraso"
                            id="preco_cadeira_atraso" placeholder="Preço" autocomplete="off" required>
                        <div class="ui basic label">
                            .00
                        </div>
                    </div>
                    @error('preco_cadeira_atraso')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="field">
                    <label for="buttonSub">
                        &nbsp;
                    </label>

                    <button type="submit" id="buttonSub" class="ui right labeled yellow icon button" tabindex="0"><i
                            class="exchange icon"></i>Actualizar o curso</button>
                </div>
            </div>
    </form>
</div>
@endsection