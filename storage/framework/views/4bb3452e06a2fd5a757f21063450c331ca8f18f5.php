<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-sm-8">
            <div class="card">
                <div class="card-header">Actualizar dados do cursos</div>

                <div class="card-body">
                    <form action="<?php echo e(route('cursos.update', $curso->id)); ?>" method="POST">
                       <?php echo csrf_field(); ?>
                       <div class="grupo-label mb-2">
                           <label for="nome">Nome <?php echo e($curso->nome); ?></label>
                           <input type="text" value=<?php echo e($curso->nome); ?> name="nome"  class="form-control" id="nome" placeholder="Nome do curso" autocomplete="off" required>
                       </div>
                       <div class="group-label mb-2">
                           <label for="codigo">Codigo do curso</label>
                           <input type="text" name="codigo" value=<?php echo e($curso->codigo); ?> class="form-control" id="codigo" placeholder="Codigo do curso" autocomplete="off" required>
                       </div>
                      <div class="group-label md-2">
                          <label for="grau">Grau acadêmico</label>
                        <select name="grau" id="grau" class="form-control">
                            <option value="Licenciatura">Licenciatura</option>
                            <option value="Mestrado">Mestrado</option>
                        </select>
                      </div>
                       <div class="group-label mb-2">
                            <label for="preco">Preço</label>
                            <input type="text" name="preco" value=<?php echo e($curso->preco); ?> id="preco" placeholder="Preço" class="form-control" autocomplete="off" required>
                       </div>

                       <div class="group-label mb-2">
                           <label for="duracao">Duração</label>
                           <input type="number" name="duracao" value=<?php echo e($curso->duracao); ?> id="duracao" placeholder="Duração" min="1" autocomplete="off" class="form-control" required>
                       </div>

                       <div class="group-label mb-2">
                           <label for="credito">Credito</label>
                           <input type="number" name="credito" id="credito" value=<?php echo e($curso->credito); ?> min="1" placeholder="Credito" autocomplete="off" class="form-control" required>
                       </div>

                       <div class="group-label mb-2">
                           <input type="hidden" name="_method" value="PUT">
                           <button type="submit" class="btn btn-success">Actualizar</button>
                       </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\sisgesprop\resources\views/cursos/edit.blade.php ENDPATH**/ ?>