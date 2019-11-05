@extends('layouts.app')

@section('content')


    <form class="ui form" id='grau_form' action="{{route('grau.update', $grau->id)}}" method="POST">
        @method('PUT')
        <h4 class="ui dividing header"> <a href="/grau"><i class="green long arrow alternate left icon"></i></a> Registar graus académicos
        </h4>
        <div class="field">
            @csrf
            <div class="three fields">
                    <div class="field">

                            <label for="grau">Grau académico</label>
                            <div class="ui  labeled input">
                                <label for="amount" class="ui label">Grau</label>
                                <input type="text" name="grau" value="{{ $grau->grau }}" id="grau" placeholder="Grau académico" autocomplete="off" required>
                                
                            </div>
                            @error('grau')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <div class="field">
                            <label for="">&nbsp;</label>
            <button type="submit" class="ui right labeled green icon button" tabindex="0"><i class="save icon"></i>Registar grau</button>

                        </div>
                
                </div>

            </div>
        </div>
    </form>
@endsection