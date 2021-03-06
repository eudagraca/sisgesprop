@extends('layouts.app')

@section('content')

<form class="ui form" id="formInscrever" method="POST" action="{{ route('inscricao.store')}}">
    @csrf
    <h4 class="ui dividing header"> <a href="/estudante"><i class="green long arrow alternate left icon"></i></a> Lista
        de estudantes
    </h4>
    <div class="field">
        <div class="three fields">
            <div class="field">

                <label for="nome">Nome</label>
                <input type="hidden" name="estudante_id" id="estudante_id" value="{{ $estudante->id }}">

                <input type="text" id="nome" value="{{ $estudante->name }}" disabled>
                @error('estudante_id')
                <p class="text-danger">
                    {{ $message }}
                </p>
                @enderror
            </div>


            <div class="field">
                <label for="curso_id">Curso</label>
                <input type="hidden" name="curso_id" id="curso_id" value="{{ $estudante->curso->id }}">
                <input type="text" id="codigo" value="{{ $estudante->curso->nome }}" disabled>
                @error('curso_id')
                <p class="text-danger">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="field">
                <label for="ano">ano</label>
                <input type="hidden" name="ano" id="ano" value="{{ $matricula->ano }}">
                <input type="text" id="ano" value="{{  $matricula->ano }}" disabled>
                @error('ano')
                <p class="text-danger">
                    {{ $message }}
                </p>
                @enderror
            </div>

        </div>
        <div class="three fields">
            <div class="field">
                <label for="ano_escolaridade">Ano de escolaridade</label>
                <input type="hidden" name="ano_escolaridade" id="ano_escolaridade"
                    value="{{ $matricula->ano_escolaridade }}">
                <input type="text" id="ano_escolaridade" value="{{  $matricula->ano_escolaridade }}" disabled>
                @error('ano_escolaridade')
                <p class="text-danger">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="field">
                <label for="semestre">Semestre</label>
                <select name="semestre" id="semestre" class="ui fluid dropdown dynamic" data-dependent="cadeiras">
                    <option value="" disabled selected>Seleccione o semestre</option>
                    <option value="1">I semestre</option>
                    <option value="2">II semestre</option>
                </select>
                @error('semestre')
                <p class="text-danger">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="field">

                <label>Selecione as cadeiras</label>

                <select id="cadeiras" name="cadeiras[]" class="form-control" multiple>

                </select>

                @error('cadeiras')
                <p class="text-danger">
                    {{ $message }}
                </p>
                @enderror

            </div>
        </div>

        <div class="three fields">
            <div class="field">
                <label for="valor_pagar">Valor da inscrição</label>
                <input type="hidden" name="preco" value="{{ $preco }}" id="valor_total">
                <input type="text" value="{{ $preco }}" id="valor_pagar" disabled>
                @error('valor_pagar')
                <p class="text-danger">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="field">
                <label for="">&nbsp;</label>
                <button type="submit" class="ui button green">Inscrever</button>
            </div>
        </div>

    </div>
</form>

<script>
    $(document).ready(function(){

    $("#cadeiras").multiselect({
        nonSelectedText: 'Seleccione as cadeiras',
        onChange:function(option, checked){

            var selected = $('#cadeiras').val();
            var ano = $('#ano_escolaridade').val();
            var curso = $('#curso_id').val();
            var selected = $('#cadeiras').val();
            var preco = $('#valor_pagar').val();


            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{ route('cadeiras.atrasadas') }} ",
                method: "POST",
                data: {value: selected, curso: curso, ano: ano},

            success: function(result){
                $('#valor_total').val(parseInt(result) + parseInt(preco));
                $('#valor_pagar').val(parseInt(result) + parseInt(preco));
                },
            error: function(result){
                    console.log(result)
                }
            });
        }
    });

    $('#semestre').change(function(){
        if($(this).val() != ''){
            var select =$(this).attr("id");
            var value = $(this).val();
            var _token = $('input[name="_token"]').val();
            var id = <?php echo $matriculaID; ?>;
            $('#cadeiras').html('');
            $('#cadeiras').multiselect('rebuild');

            $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });

            $.ajax({
                    url: "{{ route('cadeiras.fetch')}} ",
                    method: "POST",
                    data: {select: select, value: value, matriculaID: id
                },
                success: function(result){
                    $('#cadeiras').html(result);
                    $('#cadeiras').multiselect('rebuild');
                    }, error: function(result){
                    console.log(result)
                }
            })
        }
    })
})

</script>

@endsection