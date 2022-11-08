<?php $__env->startSection('document_title', 'admin'); ?>

<?php $__env->startSection('body'); ?>
    <div class="container-fluid">
        <?php $__currentLoopData = $lowonganData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php echo e($l->namaPosisi); ?></h5>
                <p class="card-text"><?php echo e($l->jabatan); ?></p>
                <p class="card-text"><?php echo e($l->slot); ?></p>
            </div>
            <form action="delete/<?php echo e($l->id); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo e(method_field('DELETE')); ?>

                <button type="submit">Delete</button>
            </form>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Webprog\Laravel\login\resources\views/admin.blade.php ENDPATH**/ ?>