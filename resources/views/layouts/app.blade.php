<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Sistema de Gestão de Propinas') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/semantic.js') }}"></script>
        <script src="{{ asset('js/customJS.js') }}"></script>
        <script src="{{ asset('js/multiple.js')}}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/semantic.css') }}" rel="stylesheet">
        <link href="{{ asset('css/customCSS.css') }}" rel="stylesheet">
        <link href="{{ asset('css/multiple.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css"
            href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.css" />
            <link rel="stylesheet" href="https://unpkg.com/multiple-select@1.3.1/dist/multiple-select.min.css">
    </head>

    <body>
        <div id="app">
            @include('includes.nav')
            <div class="ui container">
                <main class="py-4">
                    @include('includes.msg')
                    @yield('content')
                </main>
            </div>
        </div>
    </body>


</html>