<?php $__env->startSection('content'); ?>
<div class="ui container">


    <form class="ui form" action="<?php echo e(route('cursos.update', $curso->id)); ?>" method="POST">
        <?php echo method_field('PUT'); ?>
        <h4 class="ui dividing header"> <a href="/cursos"><i class="green long arrow alternate left icon"></i></a>
            Actualizar dados do
            cursos</h4>
        <div class="field">
            <?php echo csrf_field(); ?>
            <div class="three fields">
                <div class="field">

                    <label for="nome">Nome</label>
                    <input type="text" value="<?php echo e($curso->nome); ?>" name="nome" id="nome" placeholder="Nome do curso"
                        autocomplete="off" required>
                    <?php if ($errors->has('nome')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nome'); ?>
                    <p class="text-danger">
                        <?php echo e($message); ?>

                    </p>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                </div>
                <div class="field">
                    <label for="codigo">Codigo do curso</label>
                    <input type="text" name="codigo" value="<?php echo e($curso->codigo); ?>" id="codigo"
                        placeholder="Codigo do curso" autocomplete="off" required>
                    <?php if ($errors->has('codigo')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('codigo'); ?>
                    <p class="text-danger">
                        <?php echo e($message); ?>

                    </p>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                </div>
                <div class="field">
                    <label for="grau_id">Grau académico</label>
                    <select name="grau_id" id="grau_id" class="ui fluid dropdown">


                        <?php $__currentLoopData = $graus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grau): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($esseGrau=$curso->grau_id==$grau->id); ?>

                        <?php echo e($selecao=$esseGrau?"selected='selected'":""); ?>


                        <?php echo e($id = $grau->id); ?>

                        <option value="<?php echo e($id); ?>" <?php echo e($selecao); ?>>
                            <?php echo e($grau->grau); ?>

                        </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php if ($errors->has('grau_id')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('grau_id'); ?>
                    <p class="text-danger">
                        <?php echo e($message); ?>

                    </p>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
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
                    <?php if ($errors->has('preco')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('preco'); ?>
                    <p class="text-danger">
                        <?php echo e($message); ?>

                    </p>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
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
                    <?php if ($errors->has('duracao')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('duracao'); ?>
                    <p class="text-danger">
                        <?php echo e($message); ?>

                    </p>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                </div>
                <div class="field">
                    <label for="credito">Credito</label>
                    <input type="number" name="credito" id="credito" value=<?php echo e($curso->credito); ?> min="1"
                        placeholder="Credito" autocomplete="off" required>
                    <?php if ($errors->has('credito')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('credito'); ?>
                    <p class="text-danger">
                        <?php echo e($message); ?>

                    </p>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                </div>
            </div>

            <div class="three fields">

                <div class="field">
                    <label for="duracao">Preço de cadeira em atraso</label>
                    <div class="ui right labeled input">
                        <div class="ui basic label">
                            MZN
                        </div>
                        <input type="text" value="<?php echo e($curso->preco_cadeira_atraso); ?>" name="preco_cadeira_atraso"
                            id="preco_cadeira_atraso" placeholder="Preço" autocomplete="off" required>
                        <div class="ui basic label">
                            .00
                        </div>
                    </div>
                    <?php if ($errors->has('preco_cadeira_atraso')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('preco_cadeira_atraso'); ?>
                    <p class="text-danger">
                        <?php echo e($message); ?>

                    </p>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                </div>

                <div class="field">
                    <label for="buttonSub">
                        &nbsp;
                    </label>

                    <button type="submit" id="buttonSub" class="ui right labeled yellow icon button" tabindex="0"><i
                            class="exchange icon"></i>Actualizar o curso</button>
                </div>
            </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/euclidio/Dev/apps/sisgesprop/resources/views/cursos/edit.blade.php ENDPATH**/ ?>