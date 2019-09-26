@extends('layouts.app')

@section('content')
<h4 class="ui horizontal divider header"><i class="list icon"></i>Preços </h4>
<div class="row justify-content-center" id="table_form">
    <div class="col-md-12 col-sm-12">

        <table class="ui red small table">
            <thead>
                <tr>
                    <th>Grau</th>
                    <th>Preço de matricula</th>
                    <th>Preço de inscricao</th>
                    <th colspan="2">Acção</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($precos as $preco)
                <tr>
                    <td>{{$preco->grau}}</td>
                    <td>{{$preco->preco_matricula}} Meticais</td>
                    <td>{{$preco->preco_inscricao}} Meticais</td>
                    <td>
                        <a href="preco/{{$preco->id}}/edit" class="ui left floated small yellow labeled icon button">
                            <i class="edit outline icon"></i> Editar
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('preco.destroy', $preco->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="ui left labeled negative ui trash icon button">
                                <i class="trash icon"></i>
                                Apagar
                            </button>
                        </form>
                    </td>

                    @endforeach
            </tbody>

            <tfoot>
                <tr>
                    <th colspan="8">
                        <a href="preco/create" class="ui left floated small positive labeled icon button">
                            <i class="add icon"></i> Adicionar preços
                        </a>
                    </th>
                </tr>
            </tfoot>

        </table>

    </div>
</div>


<!-- Chair Form -->

@endsection