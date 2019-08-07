

<?php $__env->startSection('content'); ?>


    <form class="ui form" action="<?php echo e(route('cursos.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <h4 class="ui dividing header"> <a href="/cursos"><i class="green long arrow alternate left icon"></i></a> Registar curso
        </h4>
        <div class="field">
            <?php echo csrf_field(); ?>
            <div class="three fields">
                <div class="field">

                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" placeholder="Nome do curso" autocomplete="off" required>
                </div>
                <div class="field">
                    <label for="codigo">Codigo do curso</label>
                    <input type="text" name="codigo" id="codigo" placeholder="Codigo do curso" autocomplete="off"
                        required>
                </div>
                <div class="field">
                    <label for="nome">Grau académico</label>
                    <select name="grau" id="grau" class="ui fluid dropdown">
                        <option value="Licenciatura">Licenciatura</option>
                        <option value="Mestrado">Mestrado</option>
                    </select>
                </div>
            </div>

            <div class="three fields">
                <div class="field">

                    <label for="preco">Preço</label>
                    <div class="ui right labeled input">
                        <label for="amount" class="ui label">MZN</label>
                        <input type="text" name="preco" id="preco" placeholder="Preço" autocomplete="off" required>

                        <div class="ui basic label">
                            .00
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label for="duracao">Duração</label>
                    <div class="ui right labeled input">
                        <input type="number" name="duracao" id="duracao" placeholder="Duração" min="1"
                            autocomplete="off" required>
                        <div class="ui basic label">
                            Anos
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label for="credito">Credito</label>
                    <input type="number" name="credito" id="credito" min="1" placeholder="Credito" autocomplete="off"
                        required>
                </div>
            </div>
            <button type="submit" class="ui right labeled green icon button" tabindex="0"><i class="save icon"></i>Registar curso</button>
        </div>
    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/euclidio/Dev/apps/sisgesprop/resources/views/cursos/create.blade.php ENDPATH**/ ?>