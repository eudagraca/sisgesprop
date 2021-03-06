@extends('layouts.app')
@section('content')
@include('includes.msg')

<h4 class="ui horizontal divider header"><i class="list icon"></i>Cadeiras </h4>

<table class="ui red striped table ">
    <thead>
        <tr>
            <th>Codigo da Cadeira</th>
            <th>Cadeira</th>
            <th>Número de créditos</th>
            <th>Ano</th>
            <th>Semestre</th>
            <th colspan="2">Acção</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cadeiras as $cadeira)
        <tr>
            <td>{{$cadeira->codigo}}</td>
            <td>{{$cadeira->nome}}</td>
            <td>{{$cadeira->creditos}}</td>
            <td>{{$cadeira->ano}}</td>
            <td>{{$cadeira->semestre}}</td>
            <td>
                <a href="cadeiras/{{$cadeira->id}}/edit" class="ui vertical yellow animated button" tabindex="0">
                    <div class="hidden content">Editar</div>
                    <div class="visible content">
                        <i class="edit outline icon"></i>
                    </div>
                </a>
            </td>
            <td>
                <form action="{{ route('cadeiras.destroy', $cadeira->id)}}" method="POST">
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
        </tr>
        @endforeach

    </tbody>
    <tfoot>
        <tr>
            <th colspan="8">
                <a href="cadeiras/create" class="ui left floated small positive labeled icon button">
                    <i class="add icon"></i> Adicionar cadeiras
                </a>
            </th>
        </tr>
    </tfoot>
</table>


@endsection