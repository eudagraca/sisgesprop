@extends('layouts.app')
@section('content')
@include('includes.msg')

<h4 class="ui horizontal divider header"><i class="list icon"></i>Cursos </h4>
<div class="row justify-content-center" id="table_form">
    <div class="col-md-12 col-sm-12">

        <table class="ui red small table">
            <thead>
                <tr>
                    <th colspan="9">
                        <a href="{{route('report.cursosPdf')}}" class="ui left floated small teal labeled icon button">
                            <i class="cloud download icon"></i>Cursos
                        </a>
                    </th>
                </tr>
            </thead>
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Grau</th>
                    <th>Preço</th>
                    <th>Preço de cadeira em atraso</th>
                    <th>Duração</th>
                    <th>Créditos</th>
                    <th colspan="2">Acção</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cursos as $curso)
                <tr>
                    <td><b>{{$curso->codigo}}</b></td>
                    <td><a href="cursos/{{$curso->id}}" style="color:black">{{$curso->nome}}</a></td>
                    <td>{{ $curso->grau->grau }}</td>
                    <td>{{$curso->preco}} Meticais</td>
                    <td>{{$curso->preco_cadeira_atraso}} Meticais</td>
                    <td>{{$curso->duracao}} Anos</td>
                    <td>{{$curso->credito}}</td>
                    <td>
                        <a href="cursos/{{$curso->id}}/edit" class="ui vertical yellow animated button" tabindex="0">
                            <div class="hidden content">Editar</div>
                            <div class="visible content">
                                <i class="edit outline icon"></i>
                            </div>
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('cursos.destroy', $curso->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="ui vertical negative animated button" tabindex="0">
                                <div class="hidden content">Apagar</div>
                                <div class="visible content">
                                    <i class="trash icon"></i>
                                </div>
                            </button>
                        </form>
                    </td>

                    @endforeach
            </tbody>

            <tfoot>
                <tr>
                    <th colspan="9">
                        <a href="cursos/create" class="ui left floated small positive labeled icon button">
                            <i class="add icon"></i> Adicionar curso
                        </a>

                        <a href="cadeiras/create" class="ui right floated small teal labeled icon button">
                            <i class="add icon"></i> Adicionar cadeira
                        </a>
                    </th>
                </tr>
            </tfoot>

        </table>

    </div>
</div>

@endsection