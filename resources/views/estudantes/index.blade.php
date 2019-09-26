@extends('layouts.app')

@section('content')

<h4 class="ui horizontal divider header"><i class="list icon"></i>Estudantes </h4>

<div class="row justify-content-center">

    <table class="ui red fixed single line celled table" id="data-table">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Apelido</th>
                <th>Email</th>
                <th>Contacto</th>
                <th>Morada</th>
                <th width="100px">Acção</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>


<script defer type="text/javascript">
    $(function () {

    var table = $('#data-table').DataTable({
        processing: true,
        serverSide: true,
        "dom": '<"pull-left"f><"pull-bottom"l>tip',
        button: {
            'pdf'
        },
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
</div>
@endsection