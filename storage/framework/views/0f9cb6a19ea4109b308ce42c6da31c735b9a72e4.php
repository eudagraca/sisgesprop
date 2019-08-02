

<?php $__env->startSection('content'); ?>
<div class="ui container">


    <form class="ui form" action="<?php echo e(route('cursos.update', $curso->id)); ?>" method="POST">
        <?php echo method_field('PUT'); ?>
        <h3 class="ui dividing header"> <a href="/cursos"><i class="red arrow left icon"></i></a> Actualizar dados do
            cursos</h3>
        <div class="field">
            <?php echo csrf_field(); ?>
            <div class="three fields">
                <div class="field">

                    <label for="nome">Nome</label>
                    <input type="text" value="<?php echo e($curso->nome); ?>" name="nome" id="nome" placeholder="Nome do curso"
                        autocomplete="off" required>
                </div>
                <div class="field">
                    <label for="codigo">Codigo do curso</label>
                    <input type="text" name="codigo" value="<?php echo e($curso->codigo); ?>" id="codigo"
                        placeholder="Codigo do curso" autocomplete="off" required>
                </div>
                <div class="field">
                    <label for="nome">Grau académico</label>
                    <select name="grau" id="grau" class="ui fluid dropdown">
                        <option value="Licenciatura" selected="<?php echo e($curso->grau == "Licenciatura" ? 'selected ': ''); ?>">
                            Licenciatura</option>
                        <option value="Mestrado" selected="<?php echo e($curso->grau == "Mestrado" ? 'selected ': ''); ?>">Mestrado
                        </option>
                    </select>
                </div>
            </div>

            <div class="three fields">
                <div class="field">

                    <label for="preco">Preço</label>
                    <div class="ui right labeled input">
                        <label for="amount" class="ui label">MZN</label>
                        <input type="text" name="preco" value=<?php echo e($curso->preco); ?> id="preco" placeholder="Preço"
                            autocomplete="off" required>

                        <div class="ui basic label">
                            .00
                        </div>
                    </div>
                </div>

                <div class="field">
                    <label for="duracao">Duração</label>
                    <div class="ui right labeled input">
                        <input type="number" name="duracao" value=<?php echo e($curso->duracao); ?> id="duracao" placeholder="Duração"
                            min="1" autocomplete="off" required>

                        <div class="ui basic label">
                            Anos
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label for="credito">Credito</label>
                    <input type="number" name="credito" id="credito" value=<?php echo e($curso->credito); ?> min="1"
                        placeholder="Credito" autocomplete="off" required>
                </div>
            </div>
            <button type="submit" class="ui right labeled yellow icon button" tabindex="0"><i class="exchange icon"></i>Actualizar o curso</button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/euclidio/Dev/apps/sisgesprop/resources/views/cursos/edit.blade.php ENDPATH**/ ?>