@extends('layouts.app')

@section('content')


    <form class="ui form" id='preco_form' action="{{route('preco.store')}}" method="POST">
        @csrf
        <h4 class="ui dividing header"> <a href="/preco"><i class="green long arrow alternate left icon"></i></a> Registar preços
        </h4>
        <div class="field">
            @csrf
            <div class="three fields">
                    <div class="field">

                            <label for="preco_matricula">Preço de matricula</label>
                            <div class="ui right labeled input">
                                <label for="amount" class="ui label">MZN</label>
                                <input type="text" name="preco_matricula"value="{{ @old('preco_matricula') }}" id="preco_matricula" placeholder="Preço de matricula" autocomplete="off" required>
                                <div class="ui basic label">
                                    .00
                                </div>
                            </div>
                        </div>
                    <div class="field">

                            <label for="preco_inscricao">Preço de inscrição</label>
                            <div class="ui right labeled input">
                                <label for="amount" class="ui label">MZN</label>
                                <input type="text" name="preco_inscricao" value="{{ old('preco_inscricao') }}" id="preco_inscricao" placeholder="Preço de inscrição" autocomplete="off" required>

                                <div class="ui basic label">
                                    .00
                                </div>
                            </div>
                        </div>


                <div class="field">
                    <label for="grau">Grau académico</label>
                    <select name="grau" id="grau" class="ui fluid dropdown">
                        <option value="" selected disabled>Seleccione o grau académico</option>
                        @foreach ($graus as $grau)
                            <option value="{{ $grau->id }}">{{ $grau->grau }}</option>
                        @endforeach
                    </select>
                </div>

            </div>
            <button type="submit" class="ui right labeled green icon button" tabindex="0"><i class="save icon"></i>Registar preços</button>
        </div>
    </form>
@endsection