<?php $__env->startSection('content'); ?>
<?php echo $__env->make('includes.msg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h4 class="ui horizontal divider header"><i class="list icon"></i>Cursos </h4>
<div class="row justify-content-center" id="table_form">
    <div class="col-md-12 col-sm-12">

        <table class="ui red small table">
            <thead>
                <tr>
                    <th colspan="9">
                        <a href="<?php echo e(route('report.cursosPdf')); ?>" class="ui left floated small teal labeled icon button">
                            <i class="cloud download icon"></i>Cursos
                        </a>
                    </th>
                </tr>
            </thead>
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Grau</th>
                    <th>Preço</th>
                    <th>Preço de cadeira em atraso</th>
                    <th>Duração</th>
                    <th>Créditos</th>
                    <th colspan="2">Acção</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $cursos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><b><?php echo e($curso->codigo); ?></b></td>
                    <td><a href="cursos/<?php echo e($curso->id); ?>" style="color:black"><?php echo e($curso->nome); ?></a></td>
                    <td><?php echo e($curso->grau->grau); ?></td>
                    <td><?php echo e($curso->preco); ?> Meticais</td>
                    <td><?php echo e($curso->preco_cadeira_atraso); ?> Meticais</td>
                    <td><?php echo e($curso->duracao); ?> Anos</td>
                    <td><?php echo e($curso->credito); ?></td>
                    <td>
                        <a href="cursos/<?php echo e($curso->id); ?>/edit" class="ui vertical yellow animated button" tabindex="0">
                            <div class="hidden content">Editar</div>
                            <div class="visible content">
                                <i class="edit outline icon"></i>
                            </div>
                        </a>
                    </td>
                    <td>
                        <form action="<?php echo e(route('cursos.destroy', $curso->id)); ?>" method="POST">
                            <?php echo method_field('DELETE'); ?>
                            <?php echo csrf_field(); ?>
                            <button class="ui vertical negative animated button" tabindex="0">
                                <div class="hidden content">Apagar</div>
                                <div class="visible content">
                                    <i class="trash icon"></i>
                                </div>
                            </button>
                        </form>
                    </td>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>

            <tfoot>
                <tr>
                    <th colspan="9">
                        <a href="cursos/create" class="ui left floated small positive labeled icon button">
                            <i class="add icon"></i> Adicionar curso
                        </a>

                        <a href="cadeiras/create" class="ui right floated small teal labeled icon button">
                            <i class="add icon"></i> Adicionar cadeira
                        </a>
                    </th>
                </tr>
            </tfoot>

        </table>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/euclidio/Dev/apps/sisgesprop/resources/views/cursos/index.blade.php ENDPATH**/ ?>