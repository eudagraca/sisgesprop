<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'SisGesProp') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            {{-- <ul class="navbar-nav mr-auto">
                @guest
                @else
                <li class="nav-item active">
                    <a class="nav-link" href="/cursos">Cursos</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/cadeiras">Cadeiras</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/preco">Preços</a>
                </li>
                <li class="dropdown-nav">
                    <button class="dropbtn">Estudante</button>
                    <div class="dropdown-content">
                        <a href="/estudante/create" class="dropdown-item">Cadastrar</a>
                        <a href="/estudante" class="dropdown-item">Lista</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('matricula.index') }}">Matricula</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('inscricao.index') }}">Inscrição</a>
                </li>

                @endguest

            </ul> --}}

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest

                @else

                <li>

                    <label class="dropdown">

                        <div class="dd-button">
                          {{ Auth::user()->name }}
                        </div>

                        <input type="checkbox" class="dd-input" id="test">

                        <ul class="dd-menu">
                            <li><a href="/perfil" class="dropdown-item">Perfil</a></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form></li>
                        </ul>

                    </label>
                </li>
                <li class="nav-item dropdown">
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

