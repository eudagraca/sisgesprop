@extends('layouts.app')

@section('content')

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


            </tbody>

            <tfoot>
                <tr>
                    <th colspan="8">
                        <a href="matricula/create" class="ui left floated small positive labeled icon button">
                            <i class="add icon"></i> Matricular estudante
                        </a>
                    </th>
                </tr>
            </tfoot>

        </table>

    </div>
</div>


<!-- Chair Form -->

@endsection