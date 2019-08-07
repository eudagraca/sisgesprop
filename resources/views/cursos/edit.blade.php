@extends('layouts.app')

@section('content')
<div class="ui container">


    <form class="ui form" action="{{route('cursos.update', $curso->id)}}" method="POST">
        @method('PUT')
        <h4 class="ui dividing header"> <a href="/cursos"><i class="green long arrow alternate left icon"></i></a> Actualizar dados do
            cursos</h4>
        <div class="field">
            @csrf
            <div class="three fields">
                <div class="field">

                    <label for="nome">Nome</label>
                    <input type="text" value="{{ $curso->nome}}" name="nome" id="nome" placeholder="Nome do curso"
                        autocomplete="off" required>
                </div>
                <div class="field">
                    <label for="codigo">Codigo do curso</label>
                    <input type="text" name="codigo" value="{{$curso->codigo}}" id="codigo"
                        placeholder="Codigo do curso" autocomplete="off" required>
                </div>
                <div class="field">
                    <label for="nome">Grau académico</label>
                    <select name="grau" id="grau" class="ui fluid dropdown">
                        <option value="Licenciatura" selected="{{ $curso->grau == "Licenciatura" ? 'selected ': ''  }}">
                            Licenciatura</option>
                        <option value="Mestrado" selected="{{ $curso->grau == "Mestrado" ? 'selected ': ''  }}">Mestrado
                        </option>
                    </select>
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
                </div>
                <div class="field">
                    <label for="credito">Credito</label>
                    <input type="number" name="credito" id="credito" value={{$curso->credito}} min="1"
                        placeholder="Credito" autocomplete="off" required>
                </div>
            </div>
            <button type="submit" class="ui right labeled yellow icon button" tabindex="0"><i class="exchange icon"></i>Actualizar o curso</button>
        </div>
    </form>
</div>
@endsection