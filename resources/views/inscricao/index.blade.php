@extends('layouts.app')

@section('content')

<h4 class="ui horizontal divider sub header"><i class="list icon"></i> Estudantes inscritos</h4>
<div class="ui top attached tabular menu">
    @foreach ($cursos as $curso)
    <a class="item" data-tab="{{ $curso->codigo }}">{{ $curso->nome }}</a>
    @endforeach
</div>
@foreach ($cursos as $curso)
<div id="{{ $curso->codigo }}" class="ui bottom attached tab segment" data-tab="{{ $curso->codigo }}">

    <select class="ui dropdown years">
        <option value="" disabled selected>Gender</option>
        <option value="1">Male</option>
        <option value="0">Female</option>
    </select>

    <p>{{ $curso->nome }}</p>
    <p>{{ $curso->codigo }}</p>

</div>
@endforeach
@endsection