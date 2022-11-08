<?php $__env->startSection('document_title', 'home'); ?>

<?php $__env->startSection('body'); ?>
<div class="d-flex flex-column align-items-center mt-4">
    <p id="title" class="fs-1 fw-bold">Sign In</p>
    
    <form method="POST" enctype="multipart/form-data" action="/storeBike" class="d-flex flex-column align-items-center">
            
            <?php echo csrf_field(); ?>
            <div class="mb-3 w-100">
                <label for="InputUserName" class="form-label">User Name</label>
                <input type="text" class="form-control" name="userNameValue" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 w-100">
                <label for="inputPassword" class="form-label">Password</label>
                <input type="text" class="form-control" name="passwordValue" id="exampleInputPassword1">
            </div>
            <div class="text-center text-white rounded-5 m-2 pt-3" style="">
                <button type="submit" class="btn btn-success">Sign In</button>
                <button type="submit" class="btn btn-success"><a class="nav-link text-white" href="/signUp">Sign Up</a></button>
            </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Webprog\Laravel\login\resources\views/home.blade.php ENDPATH**/ ?>