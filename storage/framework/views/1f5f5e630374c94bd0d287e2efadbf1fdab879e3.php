<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">Cursos</div>

                <div class="card-body">
                    <a href="cursos/create" class="btn btn-primary">Adiconar curso</a>

                    <table class="table table-striped table-compact mt-4">
                       <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Nome</th>
                                <th>Grau</th>
                                <th>Preço</th>
                                <th>Duração</th>
                                <th>Credito</th>
                                <th colspan="2">Acção</th>
                            </tr>
                       </thead>
                       <tbody>
                           <?php $__currentLoopData = $cursos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <tr>
                                    <td><?php echo e($curso->codigo); ?></td>
                                    <td><?php echo e($curso->nome); ?></td>
                                    <td><?php echo e($curso->grau); ?></td>
                                    <td><?php echo e($curso->preco); ?></td>
                                    <td><?php echo e($curso->duracao); ?></td>
                                    <td><?php echo e($curso->credito); ?></td>
                                    <td>
                                        <a href="cursos/<?php echo e($curso->id); ?>/edit" class="btn-sm btn-warning">Alterar</a>
                                    </td>
                                    <td>
                                        <form action="<?php echo e(route('cursos.destroy', $curso->id)); ?>" method="POST" id="removeCurso">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="ml-2 btn-xs btn-danger">Remover</button>
                                        </form>
                                    </td>
                               </tr>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       </tbody>
                    </table>
                </div>

                
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\sisgesprop\resources\views/cursos/index.blade.php ENDPATH**/ ?>