@extends('layouts.app')

@section('content')
   
<form class="ui form" method="POST" action="{{ route('matricula.store')}}">
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
                    <label for="nome">Ano de escolaridade</label>
                    <select name="ano_escolaridade" id="ano_escolaridade" class="ui fluid dropdown">
                        <option value="1">I ano</option>
                        <option value="2">II ano</option>
                        <option value="3">III ano</option>
                        <option value="4">IV ano</option>
                    </select>
                </div>
            </div>
            @foreach ($precos as $preco)
                @if ($preco->grau == $estudante->curso->grau)
                    <?php $precoMatricula = $preco->preco_matricula ?>
                @endif    
            @endforeach
            <div class="three fields">
                <div class="field">

                <label for="preco">Preço</label>
                    <div class="ui right labeled input">
                        <label for="amount" class="ui label">MZN</label>
                        <input type="text" name="preco" id="preco" value="{{ $precoMatricula }}" placeholder="Preço" autocomplete="off" required>

                        <div class="ui basic label">
                            .00
                        </div>
                    </div>
                </div>
               
                <div class="field">
                    <label for="duracao">Ano</label>
                    <div class="ui right labeled input">
                        <input type="month" name="ano" id="ano"  placeholder="Ano"
                            autocomplete="off" required>
                        <div class="ui basic label">
                            Anos
                        </div>
                    </div>
                </div>
                {{----<div class="field">
                    <label for="credito">Credito</label>
                    <input type="number" name="credito" id="credito" min="1" value="{{ old('credito') }}" placeholder="Credito" autocomplete="off"
                        required>
                </div>
                --}}
                <div class="field">
                    <label for="buttonSub">
                        &nbsp;
                    </label>
                        <button type="submit" id="buttonSub" class="ui right labeled green icon button" tabindex="0"><i class="save icon"></i>Matricular</button>
                    </div>
            </div>

        </div>
    </form>

@endsection