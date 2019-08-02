<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Sistema de Gestão de Propinas')); ?></title>

        <!-- Scripts -->
        <!-- JQuery -->
        <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
        <script src="<?php echo e(asset('js/semantic.js')); ?>"></script>
        <script src="<?php echo e(asset('js/customJS.js')); ?>"></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/semantic.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/customCSS.css')); ?>" rel="stylesheet">
        <link rel="stylesheet" type="text/css"
            href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.css" />
    </head>

    <body>
        <div id="app">
            <?php echo $__env->make('includes.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="ui container">
                <main class="py-4">
                    <?php echo $__env->make('includes.msg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->yieldContent('content'); ?>
                </main>
            </div>
        </div>
    </body>


</html><?php /**PATH /home/euclidio/Dev/apps/sisgesprop/resources/views/layouts/app.blade.php ENDPATH**/ ?>