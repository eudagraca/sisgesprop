@extends('layouts.app')

@section('content')

<h4 class="ui horizontal divider header"><i class="tag icon"></i> Estudantes não matriculados --  <span id="total_records"></span></h4>

<div class="ui input">
    <input type="text" placeholder="Procurar" name="search" id="search">
</div>


<div class="row justify-content-center" id="table_form">
    <div class="col-md-12 col-sm-12">

        <table class="ui red small table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Curso</th>
                    <th>Contacto</th>
                    <th>Morada</th>
                    <th colspan="2">Acção</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($naoMatriculados as $matricula)
                <tr>
                    <td>{{$matricula['name']. ' '.$matricula['last_name']}}</td>
                    <td>{{$matricula['nome']}}</td>
                    <td>{{$matricula['telefone_principal']}}</td>
                    <td>{{ $matricula['morada'] }}</td>
                    <td>
                        <a href="estudante/{{$matricula['id']}}"
                            class="ui left floated small yellow labeled icon button">
                            <i class="eye icon"></i> Detalhes
                        </a>
                    </td>
                    {{-- <a colspan="2"><a href="estudante/{{$matricula['ano']}}"></a></a> --}}
                </tr>
                @endforeach

            </tbody>


        </table>

    </div>
</div>

<script>
    $(document).ready(function(){

 fetch_customer_data();

 function fetch_customer_data(query = '')
 {
  $.ajax({
   url:"{{ route('live_search.action') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('tbody').html(data.table_data);
    $('#total_records').text(data.total_data);
   }
  })
 }

 $(document).on('keyup', '#search', function(){
  var query = $(this).val();
  fetch_customer_data(query);
 });
});
</script>


<!-- Chair Form -->

@endsection