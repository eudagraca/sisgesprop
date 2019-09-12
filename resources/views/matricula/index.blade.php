@extends('layouts.app')

@section('content')

<div class="row justify-content-center" id="table_form">
    <div class="col-md-12 col-sm-12">

        <table class="ui red small table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Curso</th>
                    <th>Preço da matricula</th>
                    <th>Ano de escolaridade</th>
                    <th>Ano da matricula</th>
                    <th colspan="2">Acção</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($matriculas as $matricula)
                <tr>
                    <td>{{$matricula->estudante->name}}</td>
                    <td>{{$matricula->estudante->curso->nome}}</td>
                    <td>{{$matricula->preco}}</td>
                    <td>{{$matricula->ano_escolaridade}}</td>
                    <td>{{$matricula->ano}}</td>
                    <td colspan="2">Acção</td>
                </tr>
                @endforeach

            </tbody>

            <tfoot>
                <tr>
                    <th colspan="8">
                        <a href="naomatriculados" class="ui left floated small positive labeled icon button">
                            <i class="add icon"></i> Não matriculados
                        </a>
                    </th>
                </tr>
            </tfoot>

        </table>

    </div>
</div>


<!-- Chair Form -->

@endsection