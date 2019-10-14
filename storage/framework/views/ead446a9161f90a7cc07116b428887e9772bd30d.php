<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Sistema de Gestão de Propinas')); ?></title>

        <!-- Scripts -->
        <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
        <script src="<?php echo e(asset('js/semantic.js')); ?>"></script>
        <script src="<?php echo e(asset('js/customJS.js')); ?>" defer></script>
        <script src="<?php echo e(asset('js/multiple.js')); ?>" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/semantic.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/customCSS.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/multiple.css')); ?>" rel="stylesheet">
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
            <?php echo $__env->make('includes.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="ui grid">
                <div class="three wide column">
                    <div class="ui vertical menu">
                        <div class="item">
                            <div class="header">Cadeiras</div>
                            <div class="menu">
                                <a href="/cadeiras/create" class="item">Adicionar</a>
                                <a href="/cadeiras" class="item">Listar</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="header">Cursos</div>
                            <div class="menu">
                                <a href="/cursos/create" class="item">Adicionar</a>
                                <a href="/cursos" class="item">Listar</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="header">Estudantes</div>
                            <div class="menu">
                               <a href="/estudante/create" class="item">Adicionar</a>
                               <a href="/estudante" class="item">Listar</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="header">Inscritos</div>
                            <div class="menu">
                                <a href="/matricula" class="item">Adicionar</a>
                                <a href="/inscricao" class="item">Listar</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="header">Matricular</div>
                            <div class="menu">
                                <a class="item">Adicionar</a>
                                <a class="item">Listar</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="header">Preços</div>
                            <div class="menu">
                                <a class="item">Adicionar</a>
                                <a class="item">Listar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="twelve wide column">
                    <div class="ui container">
                        <main class="py-4">
                            <?php echo $__env->yieldContent('content'); ?>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </body>


</html><?php /**PATH /home/euclidio/Dev/apps/sisgesprop/resources/views/layouts/app.blade.php ENDPATH**/ ?>