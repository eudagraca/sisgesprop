
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
            <?php echo e(config('app.name', 'SisGesProp')); ?>

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
               <?php if(auth()->guard()->guest()): ?>
               <?php else: ?>
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
                    <a class="nav-link" href="<?php echo e(route('matricula.index')); ?>">Matricula</a>
                </li>

               <?php endif; ?>

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                <?php if(auth()->guard()->guest()): ?>

                <?php else: ?>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a href="/perfil" class="dropdown-item">Perfil</a>
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                <?php echo e(__('Logout')); ?>

                            </a>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo csrf_field(); ?>
                            </form>
                        </div>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH /home/euclidio/Dev/apps/sisgesprop/resources/views/includes/nav.blade.php ENDPATH**/ ?>