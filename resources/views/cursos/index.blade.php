@extends('layouts.app')

@section('content')

<div class="row justify-content-center" id="table_form">
    <div class="col-md-12 col-sm-12">

        <table class="ui red small table">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Grau</th>
                    <th>Preço</th>
                    <th>Duração</th>
                    <th>Créditos</th>
                    <th colspan="2">Acção</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cursos as $curso)
                <tr>
                    <td>{{$curso->codigo}}</td>
                    <td><a href="cursos/{{$curso->id}}" style="color:black">{{$curso->nome}}</a></td>
                    <td>{{$curso->grau}}</td>
                    <td>{{$curso->preco}} Meticais</td>
                    <td>{{$curso->duracao}} Anos</td>
                    <td>{{$curso->credito}}</td>
                    <td>
                        <a href="cursos/{{$curso->id}}/edit" class="ui left floated small yellow labeled icon button">
                            <i class="edit outline icon"></i> Editar
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('cursos.destroy', $curso->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="ui left labeled negative ui trash icon button">
                                <i class="trash icon"></i>
                                Apagar
                            </button>
                        </form>
                    </td>
                    </td>
                    @endforeach
            </tbody>

            <tfoot>
                <tr>
                    <th colspan="8">
                        <a href="cursos/create" class="ui left floated small positive labeled icon button">
                            <i class="add icon"></i> Adicionar curso
                        </a>

                        <a id="addCadeira" class="ui right floated small teal labeled icon button">
                            <i class="add icon"></i> Adicionar cadeira
                        </a>
                    </th>
                </tr>
            </tfoot>

        </table>

    </div>
</div>


<!-- Chair Form -->
<div id="cadeira_form" onload="">
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
                <div class="field">
                    {{--  <label for="curso">Curso</label>
                    <select name="curso" id="curso" multiple="" class="ui fluid dropdown">
                        @foreach ($cursos as $curso)
                        <option value="{{ $curso->id }}">{{ $curso->nome }}</option>
                        @endforeach
                    </select>  --}}



                    <select id="select" class="fluid" name="select[]" multiple>
                        <option value="">Select...</option>
                        <option value="1" selected>Value 1</option>
                        <option value="2" selected>Value 2</option>
                        <option value="3">Value 3</option>
                        <option value="4">Value 4</option>
                    </select>

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
    </form>

</div>
@endsection