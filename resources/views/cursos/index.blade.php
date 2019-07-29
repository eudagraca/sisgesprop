@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
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
                        <td>{{$curso->nome}}</td>
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
                                <button class="negative ui trash button">
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
                        </th>
                    </tr>
                </tfoot>

            </table>

        </div>
    </div>
</div>
@endsection