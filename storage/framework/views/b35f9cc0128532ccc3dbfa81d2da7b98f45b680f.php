<?php $__env->startSection('content'); ?>
<div class="container">

    <h2 class="ui dividing disabled header" style="margin-bottom: 5%">
        <div class="content">Painel de Controle </div>
    </h2>
    <?php if(auth()->guard()->guest()): ?>

    <?php else: ?>

    <div class="ui four cards">

        <div class="ui raised link card" >
            <div class="content">
                <div class="dash image">
                    <img class="dash" height="5%" width="50%" src="/images/icons/books.svg">
                </div>
                <p class="meta dash right floated">
                    <div class="ui small teal statistic float-right">
                        <div class="value">
                            50
                        </div>
                        <div class="label">Cadeiras </div>
                    </div>

                </p>
            </div>
            <a href="<?php echo e(route('cadeiras.create')); ?>" class="ui bottom attached button teal text-justify"><i class="add icon"></i> Adicionar nova </a>
            <a href="<?php echo e(route('cadeiras.index')); ?>" class="ui bottom attached button grey text-justify"><i class="eye icon"></i> Cadeiras </a>
        </div>

        <div class="ui raised link card">
            <div class="content">
                <div class="dash image">
                    <img class="dash" height="5%" width="50%" src="/images/icons/diploma.svg">
                </div>
                <p class="meta dash right floated">
                    <div class="ui small yellow statistic float-right">
                        <div class="value">
                            6
                        </div>
                        <div class="label">Cursos </div>
                    </div>

                </p>
            </div>
            <a href="<?php echo e(route('cursos.create')); ?>" class="ui bottom attached button yellow text-justify"><i class="add icon"></i> Adicionar novo </a>
            <a href="<?php echo e(route('cursos.index')); ?>" class="ui bottom attached button grey text-justify"><i class="eye icon"></i> Cursos </a>
        </div>

        <div class="ui raised link card">
            <div class="content">
                <div class="dash image">
                    <img class="dash" height="5%" width="50%" src="/images/icons/network.svg">
                </div>
                <p class="meta dash right floated">
                    <div class="ui small olive statistic float-right">
                        <div class="value">
                            500
                        </div>
                        <div class="label">Estudantes </div>
                    </div>

                </p>
            </div>
            <a href="<?php echo e(route('estudante.create')); ?>" class="ui bottom attached olive button text-justify"><i class="add icon"></i> Adicionar novo </a>
            <a href="<?php echo e(route('estudante.index')); ?>" href="" class="ui bottom attached grey button text-justify"><i class="eye icon"></i> Lista de estudantes </a>
        </div>
        <div class="ui raised link card">
            <div class="content">
                <div class="dash image">
                    <img class="dash" height="5%" width="50%" src="/images/icons/clipboard.svg">
                </div>
                <p class="meta dash right floated">
                    <div class="ui small  orange statistic float-right">
                        <div class="value">
                            500
                        </div>
                        <div class="label">Inscritos </div>
                    </div>

                </p>
            </div>

            <a href="<?php echo e(route('matricula.index')); ?>" class="ui bottom attached orange button text-justify"><i class="add icon"></i> Inscrever </a>
            <a href="<?php echo e(route('inscricao.index')); ?>" class="ui bottom attached grey button text-justify"><i class="eye icon"></i>Estudantes inscritos</a>
        </div>
        <div class="ui raised link card">
            <div class="content">
                <div class="dash image">
                    <img class="dash" height="5%" width="50%" src="/images/icons/register.svg">
                </div>
                <p class="meta dash right floated">
                    <div class="ui small blue statistic float-right">
                        <div class="value">
                            500
                        </div>
                        <div class="label">Matriculados </div>
                    </div>

                </p>
            </div>
            
            <a href="<?php echo e(route('estudante.index')); ?>" class="ui bottom attached blue button text-justify"><i class="add icon"></i>Matricular</a>
            <a href="<?php echo e(route('matricula.index')); ?>" class="ui bottom attached grey button text-justify"><i class="eye icon"></i>Estudantes Matriculados </a>
        </div>

        <div class="ui raised link card">
            <div class="content">
                <div class="dash image">
                    <img class="dash" height="5%" width="50%" src="/images/icons/price.svg">
                </div>
                <p class="meta dash right floated">
                    <div class="ui small green statistic float-right">
                        <div class="value">

                        </div>
                        <div class="label header">Preços </div>
                    </div>

                </p>
            </div>
            <a href="<?php echo e(route('preco.create')); ?>" class="ui bottom attached button green text-justify"><i class="add icon"></i> Adicionar preço </a>
            <a href="<?php echo e(route('preco.index')); ?>" class="ui bottom attached button grey text-justify"><i class="eye icon"></i> Preços </a>
        </div>

    </div>
    <?php endif; ?>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/euclidio/Dev/apps/sisgesprop/resources/views/home.blade.php ENDPATH**/ ?>