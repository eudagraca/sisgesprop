@extends('layouts.app')

@section('content')


<h2 class="ui header">
    <div class="content"><i class="large graduation cap icon"></i>{{ $curso->nome }}</div>
</h2>
<a class="ui teal tag label">{{ $curso->duracao }} de duração</a>
<a class="ui tag label">{{ $curso->grau }}</a>
<a class="ui red tag label">{{ $curso->preco }} Meticais Mensal</a>
<a class="ui yellow tag label">{{ $curso->credito }} Créditos</a>
<h4 class="ui horizontal divider header"><i class="tag icon"></i> Cadeiras do curso </h4>

<table class="ui red celled table ">
    <thead>
        <tr>
            <th>Codigo da Cadeira</th>
            <th>Cadeira</th>
            <th>Número de créditos</th>
            <th>Ano</th>
            <th>Semestre</th>
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
            </tr>
        @endforeach

    </tbody>
</table>


@endsection