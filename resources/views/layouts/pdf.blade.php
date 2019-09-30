@extends('layouts.app')
<h4 class="ui horizontal divider header"><i class="list icon"></i>Cursos </h4>
<table class="ui celled table">
    <thead>
        <tr>
            <th>Curso</th>
            <th>Designação</th>
            <th>Nivel leccionado</th>
            <th>Duração</th>
            <th>Preço da mensalidade</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            @foreach ($cursos as $curso)
                <td>{{ $curso->nome }}</td>
                <td>{{ $curso->codigo }}</td>
                <td>{{ $curso->grau->grau }}</td>
                <td>{{ $curso->duracao }} Anos</td>
                <td>{{ $curso->preco }} Meticais</td>
                <td>
            @endforeach
        </tr>
    </tbody>
</table>