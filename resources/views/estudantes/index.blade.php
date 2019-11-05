@extends('layouts.app')
@section('content')
@include('includes.msg')
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
        responsive: true,
        processing: true,
        serverSide: true,
        dom: '<"pull-left"f><"pull-bottom"l>tip',
        // dom: 'Bfrtip',
         buttons: [
        'copy', 'excel', 'pdf'
    ],
        ajax: "{{ route('estudante.index') }}",
        columns: [
            {data: 'id'},
            {data: 'name'},
            {data: 'last_name'},
            {data: 'email'},
            {data: 'telefone_principal'},
            {data: 'morada'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });

  });

</script>
</div>
@endsection