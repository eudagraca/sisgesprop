@extends('layouts.app')
@section('content')
@include('includes.msg')

<h4 class="ui horizontal divider sub header"><i class="list icon"></i> Estudantes inscritos</h4>
     <div class="ui form">
    <div class="three fields">
    <div class="field">
       
    <form action="" method="POST">
           @csrf
            <select name="cursoId" id="cursoId" class="ui">
            <option value="">Selecione o curso</option>
        @foreach ($cursos as $curso)
        <option value="{{$curso->id}}">{{$curso->nome}}</option>
            @endforeach
        </select>
       </form>
    </div>
    </div>
</div>
    <!-- A ideia aqui é usarmos Ajax, para pgar dinamicamente os estudantes inscritos em cada curso  -->
    <table class="ui red small table" id="inscritos-table">
    <thead>
        <tr>
            <th>Estudante</th>
            <th>Semestre</th>
            <th>Cadeiras</th>
            <th>Ano de escolaridade</th>
            <th>Ano</th>
            <th colspan="2">Acção</th>
        </tr>
    </thead>
    <tbody id="body">
        @foreach ($inscritos as $item)
             <tr>
             <th>{{$item->estudante->name}}</th>
            <th>{{$item->semestre}}</th>
            <th>@foreach ($item->cadeiras as $cadeira)
                {{$cadeira->nome}}
            @endforeach</th>
            <th>{{$item->ano_escolaridade}} </th>
            <th>{{$item->ano}}</th>
            <th colspan="2" id="act">Acção</th>
        </tr>
        @endforeach
    </tbody>
    </table>


    <script defer>
        $(document).ready(function(){
            $('#cursoId').change(function(){
                if($(this).val() != ''){
                   var id = $(this).val();

                   $.ajaxSetup({
                        headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    
                   $.ajax({
                       url: "{{route('inscritos.fetch')}}",
                       method: 'POST',
                       data: {id: id},
                       success: function(response){
                           $('#body').html(response);
                         console.log(response);
                           
                       }
                   })
                    
                }else{
                    // mensagem caso não selecione nenhum curso
                }
            });
        })
    </script>
@endsection