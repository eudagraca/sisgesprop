<?php $__env->startSection('content'); ?>

<form class="ui form error" action="<?php echo e(route('cursos.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <h4 class="ui dividing header"> <a href="/cursos"><i class="green long arrow alternate left icon"></i></a> Registar
        curso
    </h4>
    <div class="field">
        <?php echo csrf_field(); ?>
        <div class="three fields">
            <div class="field">

                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" value="<?php echo e(old('nome')); ?>" placeholder="Nome do curso"
                    autocomplete="off" required>
                <?php if ($errors->has('nome')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nome'); ?>
                <p class="ui red message">
                    <?php echo e($message); ?>

                </p>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
            </div>
            <div class="field">
                <label for="codigo">Codigo do curso</label>
                <input type="text" name="codigo" id="codigo" value="<?php echo e(old('codigo')); ?>" placeholder="Codigo do curso"
                    autocomplete="off" required>
                <?php if ($errors->has('codigo')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('codigo'); ?>
                <p class="ui red message">
                    <?php echo e($message); ?>

                </p>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
            </div>
            <div class="field">
                <label for="nome">Grau académico</label>
                <select name="grau" id="grau" class="ui fluid dropdown">
                    <option value="" disabled selected>Seleccione o grau académico</option>
                    <?php $__currentLoopData = $graus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grau): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($grau->id); ?>"><?php echo e($grau->grau); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if ($errors->has('grau')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('grau'); ?>
                <p class="ui red message">
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
                    <input type="text" name="preco" id="preco" value="<?php echo e(old('preco')); ?>" placeholder="Preço"
                        autocomplete="off" required>

                    <div class="ui basic label">
                        .00
                    </div>
                </div>
                <?php if ($errors->has('preco')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('preco'); ?>
                <p class="ui error message">
                    <?php echo e($message); ?>

                </p>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
            </div>
            <div class="field">
                <label for="duracao">Duração</label>
                <div class="ui right labeled input">
                    <input type="number" name="duracao" id="duracao" value="<?php echo e(old('duracao')); ?>" placeholder="Duração"
                        min="1" autocomplete="off" required>
                    <div class="ui basic label">
                        Anos
                    </div>
                </div>
                <?php if ($errors->has('duracao')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('duracao'); ?>
                <p class="ui red message">
                    <?php echo e($message); ?>

                </p>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
            </div>
            <div class="field">
                <label for="credito">Credito</label>
                <input type="number" name="credito" id="credito" min="1" value="<?php echo e(old('credito')); ?>"
                    placeholder="Credito" autocomplete="off" required>
                <?php if ($errors->has('credito')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('credito'); ?>
                <p class="ui red message">
                    <?php echo e($message); ?>

                </p>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
            </div>
        </div>

        <div class="three fields">

            <div class="field">
                <label for="preco_cadeira_atraso">Preço de cadeira em atraso</label>
                <div class="ui right labeled input">
                    <div class="ui basic label">
                        MZN
                    </div>
                    <input type="number" name="preco_cadeira_atraso" id="preco_cadeira_atraso"
                        value="<?php echo e(old('preco_cadeira_atraso')); ?>" placeholder="Preço" autocomplete="off" required>
                    <div class="ui basic label">
                        .00
                    </div>
                </div>
                <?php if ($errors->has('preco_cadeira_atraso')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('preco_cadeira_atraso'); ?>
                <p class="ui red message">
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
                <button type="submit" id="buttonSub" class="ui right labeled green icon button" tabindex="0"><i
                        class="save icon"></i>Registar curso</button>
            </div>

        </div>
    </div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/euclidio/Dev/apps/sisgesprop/resources/views/cursos/create.blade.php ENDPATH**/ ?>