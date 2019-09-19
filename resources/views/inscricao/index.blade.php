@extends('layouts.app')

@section('content')

<div class="row justify-content-center" id="table_form">
    <div class="col-md-12 col-sm-12">
    <form action="{{route('inscricao.index')}}" class="form" method="get">
        
            <div class="ui action input">
                <input type="text" name="search" placeholder="Search...">
                <button class="ui teal button">Search</button>
              </div>
        </form>
        @isset($estudantes) 
            <table class="table ui teal">
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
                    @foreach ($estudantes as $estudante)
                        <tr>
                                <td>{{$estudante->id}}</td>
                            <td>{{$estudante->name}}</td>
                            <td>{{$estudante->last_name}}</td>
                            <td>{{$estudante->email}}</td>
                            <td>{{$estudante->telefone_principal}}</td>
                            <td>{{$estudante->morada}}</td>
                            <td></td>
                        </tr>
                    @endforeach
                </tbody>
               
            </table>
            {{$estudantes->links()}}
        @endisset
    </div>
</div>


<!-- Chair Form -->

@endsection