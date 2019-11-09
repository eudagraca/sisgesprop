<?php $__env->startSection('content'); ?>
<div class="ui raised very padded text container segment user-form">
    <form class="ui form" method="POST" action="<?php echo e(route('login')); ?>">
        <?php echo csrf_field(); ?>
        <h3 class="ui dividing header ui text-light orange">Acesso restrito a administração</h3>
        <div class="field">
            <label>Endereço e-mail</label>
            <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email"
                value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

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
            <label>Senha</label>
            <input id="password" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                name="password" required autocomplete="current-password">

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
            <div class="ui checkbox">
                <input tabindex="0" class="hidden" type="checkbox" name="remember" id="remember"
                    <?php echo e(old('remember') ? 'checked' : ''); ?>>
                <label>Lembrar este usuário</label>
            </div>
        </div>
        <button class="ui inverted red button" type="submit">Acessar</button>

        <?php if(Route::has('password.request')): ?>
        <a class="btn-link" href="<?php echo e(route('password.request')); ?>">
            <?php echo e(__('Forgot Your Password?')); ?>

        </a>
        <?php endif; ?>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/euclidio/Dev/apps/sisgesprop/resources/views/auth/login.blade.php ENDPATH**/ ?>