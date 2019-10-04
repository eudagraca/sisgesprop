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
        <script src="{{ asset('js/customJS.js') }}" defer></script>
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
        <script src="//code.jquery.com/jquery-1.12.3.js"></script>
        <script src="http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="//cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">

    </head>

    <body>
        <div id="app">
            @include('includes.nav')
            <div class="ui grid">
                <div class="three wide column">
                    <div class="ui vertical menu">
                        <div class="item">
                            <div class="header">Products</div>
                            <div class="menu">
                                <a class="item">Enterprise</a>
                                <a class="item">Consumer</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="header">CMS Solutions</div>
                            <div class="menu">
                                <a class="item">Rails</a>
                                <a class="item">Python</a>
                                <a class="item">PHP</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="header">Hosting</div>
                            <div class="menu">
                                <a class="item">Compartilhado</a>
                                <a class="item">Dedicado</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="header">Support</div>
                            <div class="menu">
                                <a class="item">E-mail Support</a>
                                <a class="item">FAQs</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="header">Support</div>
                            <div class="menu">
                                <a class="item">E-mail Support</a>
                                <a class="item">FAQs</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="header">Support</div>
                            <div class="menu">
                                <a class="item">E-mail Support</a>
                                <a class="item">FAQs</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="twelve wide column">
                    <div class="ui container">
                        <main class="py-4">
                            @yield('content')
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </body>


</html>