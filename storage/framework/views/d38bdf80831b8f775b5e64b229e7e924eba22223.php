<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
            <?php echo e(config('app.name', 'SisGesProp')); ?>

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                <?php if(auth()->guard()->guest()): ?>

                <?php else: ?>

                <li>

                    <label class="dropdown">

                        <div class="dd-button">
                          <?php echo e(Auth::user()->name); ?>

                        </div>

                        <input type="checkbox" class="dd-input" id="test">

                        <ul class="dd-menu">
                            <li><a href="/perfil" class="dropdown-item">Perfil</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                                            document.getElementById('logout-form').submit();">
                                <?php echo e(__('Logout')); ?>

                            </a>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo csrf_field(); ?>
                            </form></li>
                        </ul>

                    </label>
                </li>
                <li class="nav-item dropdown">
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<?php /**PATH /home/euclidio/Dev/apps/sisgesprop/resources/views/includes/nav.blade.php ENDPATH**/ ?>