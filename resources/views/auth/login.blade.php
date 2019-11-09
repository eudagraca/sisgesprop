@extends('layouts.app')

@section('content')
<div class="ui raised very padded text container segment user-form">
    <form class="ui form" method="POST" action="{{ route('login') }}">
        @csrf
        <h3 class="ui dividing header ui text-light orange">Acesso restrito a administração</h3>
        <div class="field">
            <label>Endereço e-mail</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="field">
            <label>Senha</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                name="password" required autocomplete="current-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="field">
            <div class="ui checkbox">
                <input tabindex="0" class="hidden" type="checkbox" name="remember" id="remember"
                    {{ old('remember') ? 'checked' : '' }}>
                <label>Lembrar este usuário</label>
            </div>
        </div>
        <button class="ui inverted red button" type="submit">Acessar</button>

        @if (Route::has('password.request'))
        <a class="btn-link" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
        </a>
        @endif
    </form>
</div>
@endsection