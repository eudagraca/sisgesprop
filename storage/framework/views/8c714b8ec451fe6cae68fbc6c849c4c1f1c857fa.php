<?php if(count($errors) > 0): ?>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="ui red message">
            <?php echo e($error); ?>

        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<?php if(session('success')): ?>
    <div class="ui success message">
        <i class="close icon"></i>
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

<?php if(session('error')): ?>
    <div class="ui negative message">
        <i class="close icon"></i>
        <?php echo e(session('error')); ?>

    </div>
<?php endif; ?><?php /**PATH /home/euclidio/Dev/apps/sisgesprop/resources/views/includes/msg.blade.php ENDPATH**/ ?>