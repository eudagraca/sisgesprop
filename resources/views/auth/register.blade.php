@extends('layouts.app')

@section('content')

<div class="ui raised very padded text container segment">
    <form class="ui form" method="POST" action="{{ route('register') }}">
        @csrf
        <h3 class="ui dividing header ui text-light orange">Acesso restrito a administração</h3>
        <div class="field">
            <label>Nome</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="field">
            <label>Endereço e-mail</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email">

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="field">
            <label>Nível de acesso</label>
            <select name="acl" id="acl" class="form-control @error('acl') is-invalid @enderror" name="acl"
                value="{{ old('acl') }}" required autocomplete="acl">
                <option value="" disabled selected>Selecione uma opção</option>
                <option value="0">Administrador</option>
                <option value="1">Outro</option>
            </select>
            @error('acl')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="field">
            <label>Senha</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                name="password" required autocomplete="new-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="field">
            <label>Confirme a senha</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                    autocomplete="new-password">
        </div>
        <button type="submit" class="ui inverted green button">
            {{ __('Registar') }}
        </button>
    </form>
</div>
@endsection