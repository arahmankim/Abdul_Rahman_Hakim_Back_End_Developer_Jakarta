<?php $__env->startSection('document_title', 'sign up'); ?>

<?php $__env->startSection('body'); ?>
<div class="d-flex flex-column align-items-center mt-4">
    <p id="title" class="fs-1 fw-bold">Sign Up</p>
    
    <form method="POST" enctype="multipart/form-data" action="/storeBike" class="d-flex flex-column align-items-center">
            
            <?php echo csrf_field(); ?>
            <div class="mb-3 w-100">
                <label for="InputUserName" class="form-label">User Name</label>
                <input type="text" class="form-control" name="userNameValue" id="exampleInputUsername" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 w-100">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="text" class="form-control" name="emailValue" id="exampleInputEmail">
            </div>
            <div class="mb-3 w-100">
                <label for="inputPassword" class="form-label">Password</label>
                <input type="password" class="form-control" name="passwordValue" id="exampleInputPassword">
            </div>
            
                    

            

            <button type="submit" class="btn btn-success">Sign Up</button>
    </form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Webprog\Laravel\login\resources\views/signUp.blade.php ENDPATH**/ ?>