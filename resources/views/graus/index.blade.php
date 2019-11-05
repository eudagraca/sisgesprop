@extends('layouts.app')
@section('content')
@include('includes.msg')

<h4 class="ui horizontal divider header"><i class="list icon"></i>Graus académicos </h4>
<div class="row" id="table_form">
    <div class="col-md-6 col-sm-6">

        <table class="ui red small table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Grau</th>
                    <th colspan="2">Acção</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($graus as $grau)
                <tr>
                    <td>{{$grau->id}}</td>
                     <td>{{$grau->grau}}</td>
                    <td>
                        <a href="grau/{{$grau->id}}/edit" class="ui left floated small yellow labeled icon button">
                            <i class="edit outline icon"></i> Editar
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('grau.destroy', $grau->id)}}" method="POST">
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

        </table>

    </div>
</div>


<!-- Chair Form -->

@endsection