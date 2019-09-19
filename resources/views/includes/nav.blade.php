
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'SisGesProp') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
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

                <li class="nav-item active dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/estudante" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Estudantes <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest

                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a href="/perfil" class="dropdown-item">Perfil</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
