@extends('layouts.app')

@section('content')

<div class="ui grid">
    <div class="three wide column">

        <div class="ui horizontal list">
            <div class="item">
                <img class="ui small image"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTypEyer_a7dgDEpYhLhIs1KtETVwM9nZjwgr1lcvCRRdu_BXz2">
            </div>
            <div class="ui inverted divider"></div>

        </div>
    </div>

    <div class="twelve wide column">


        <div class="content">
            <h3 class="ui dividing header">{{ $estudante['name'] }} {{ $estudante['last_name'] }}</h3>
        </div>
        <div class="ui form">
            <div class="fields profile">
                <div class="field profile">
                    <div class="ui tag label profile">Número de BI</div>
                    <label class="profile">{{ $estudante['nr_bi'] }}</label>
                </div>
                <div class="field profile">
                    <div class="ui tag label profile">Contacto telefónico</div>
                    <label class="profile">{{ $estudante['telefone_principal'] }}<label>
                </div>
                <div class="field profile">
                    <div class="ui tag label profile">Número de BI</div>
                    <label class="profile">Número de BI</label>
                </div>
                <div class="field profile">
                    <div class="ui tag label profile">Número de BI</div>
                    <label class="profile">Número de BI</label>
                </div>
            </div>
            <div class="fields profile">
                <div class="field profile">
                    <div class="ui tag label profile">Número de BI</div>
                    <label class="profile">{{ $estudante['nr_bi'] }}</label>
                </div>
                <div class="field profile">
                    <div class="ui tag label profile">Contacto telefónico</div>
                    <label class="profile">{{ $estudante['telefone_principal'] }}<label>
                </div>
                <div class="field profile">
                    <div class="ui tag label profile">Número de BI</div>
                    <label class="profile">Número de BI</label>
                </div>
                <div class="field profile">
                    <div class="ui tag label profile">Número de BI</div>
                    <label class="profile">Número de BI</label>
                </div>
            </div>
            <div class="fields profile">
                <div class="field profile">
                    <div class="ui tag label profile">Número de BI</div>
                    <label class="profile">{{ $estudante['nr_bi'] }}</label>
                </div>
                <div class="field profile">
                    <div class="ui tag label profile">Contacto telefónico</div>
                    <label class="profile">{{ $estudante['telefone_principal'] }}<label>
                </div>
                <div class="field profile">
                    <div class="ui tag label profile">Número de BI</div>
                    <label class="profile">Número de BI</label>
                </div>
                <div class="field profile">
                    <div class="ui tag label profile">Número de BI</div>
                    <label class="profile">Número de BI</label>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection