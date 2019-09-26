@extends('layouts.app')

@section('content')

<h4 class="ui horizontal divider header"><i class="list icon"></i>Estudantes matriculados </h4>

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
                    <td>
                        <a href="estudante/{{$matricula->estudante_id}}" class="small ui button yellow">
                            <i class="eye icon"></i> Detalhes
                        </a>
                          <a href="inscrever/{{$matricula->id}}" class="small ui button teal">
                            <i class="eye icon"></i> Inscrever
                        </a>
                    </td>
                </tr>
                @endforeach

            </tbody>

            <tfoot>
                <tr>
                    <th colspan="8">
                        <a href="naomatriculados" class="ui left floated small positive labeled icon button">
                            <i class="eye icon"></i> Não matriculados
                        </a>
                    </th>
                </tr>
            </tfoot>

        </table>

    </div>
</div>


<!-- Chair Form -->

@endsection