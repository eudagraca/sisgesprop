@extends('layouts.app')

@section('content')

<div class="row justify-content-center">


    <table class="ui red fixed single line celled table" id="data-table">
        <thead>
            <tr>
                <th>Nr. do processo</th>
                <th>Nome</th>
                <th>Apelido</th>
                <th>Email</th>
                <th>Contacto</th>
                <th>Morada</th>
                <th width="100px">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
        <tfoot>
            <tr>
                <th>Nr. do processo</th>
                <th>Nome</th>
                <th>Apelido</th>
                <th>Email</th>
                <th>Contacto</th>
                <th>Morada</th>
                <th width="100px">Action</th>
            </tr>
        </tfoot>
    </table>
</div>


<script defer type="text/javascript">
    $(function () {

    var table = $('#data-table').DataTable({
        processing: true,
        serverSide: true,
        "dom": '<"pull-left"f><"pull-bottom"l>tip',
        ajax: "{{ route('estudante.index') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'last_name', name: 'last_name'},
            {data: 'email', name: 'email'},
            {data: 'telefone_principal', name: 'telefone_principal'},
            {data: 'morada', name: 'morada'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });

  });
</script>


{{--
<div class="col-md-12 col-sm-12">

    <table class="ui black small table">
        <thead>
            <tr>
                <th>Nr. do processo</th>
                <th>Nome</th>
                <th>Apelido</th>
                <th>Email</th>
                <th>Contacto</th>
                <th>Curso</th>
                <th>Morada</th>
                <th colspan="2">Acção</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($estudantes as $estudante)
            <tr>
                <td>{{$estudante->id}}</td>
                <td>{{$estudante->name}}</td>
                <td>{{$estudante->last_name}}</td>
                <td>{{$estudante->email}}</td>
                <td>{{$estudante->telefone_principal}}</td>
                <td>{{ $estudante->curso->nome }}</td>
                <td>{{ $estudante->morada }}</td>
                <td>
                    <a href="estudante/{{$estudante->id}}/edit"
                        class="ui left floated small yellow labeled icon button">
                        <i class="edit outline icon"></i> Editar
                    </a>
                </td>
                <td>
                    <form action="{{ route('cursos.destroy', $estudante->id)}}" method="POST">
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
                    <a href="estudante/create" class="ui left floated small positive labeled icon button">
                        <i class="add icon"></i> Adicionar estudante
                    </a>
                </th>
            </tr>
        </tfoot>

    </table>

</div> --}}
</div>
@endsection