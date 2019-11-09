<?php $__env->startSection('content'); ?>

<div class="ui raised very padded text container segment">
    <form class="ui form" method="POST" action="<?php echo e(route('register')); ?>">
        <?php echo csrf_field(); ?>
        <h3 class="ui dividing header ui text-light orange">Acesso restrito a administração</h3>
        <div class="field">
            <label>Nome</label>
            <input id="name" type="text" class="form-control <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="name"
                value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus>

            <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
            <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
        </div>
        <div class="field">
            <label>Endereço e-mail</label>
            <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email"
                value="<?php echo e(old('email')); ?>" required autocomplete="email">

            <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
            <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
        </div>
        <div class="field">
            <label>Nível de acesso</label>
            <select name="acl" id="acl" class="form-control <?php if ($errors->has('acl')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('acl'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="acl"
                value="<?php echo e(old('acl')); ?>" required autocomplete="acl">
                <option value="" disabled selected>Selecione uma opção</option>
                <option value="0">Administrador</option>
                <option value="1">Outro</option>
            </select>
            <?php if ($errors->has('acl')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('acl'); ?>
            <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
        </div>

        <div class="field">
            <label>Senha</label>
            <input id="password" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                name="password" required autocomplete="new-password">

            <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
            <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
        </div>

        <div class="field">
            <label>Confirme a senha</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                    autocomplete="new-password">
        </div>
        <button type="submit" class="ui inverted green button">
            <?php echo e(__('Registar')); ?>

        </button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/euclidio/Dev/apps/sisgesprop/resources/views/auth/register.blade.php ENDPATH**/ ?>