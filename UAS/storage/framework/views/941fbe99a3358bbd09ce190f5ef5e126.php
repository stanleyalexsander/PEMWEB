

<?php $__env->startSection('title', 'Login - Logistock'); ?>

<?php $__env->startPush('styles'); ?>
    <link href="<?php echo e(asset('css/login.css')); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid bg-color-base m-0 p-0">
        <div class="row h-100 w-100 m-0">

            <div class="col-12 col-md-6 bg-color-primary justify-content-center align-items-center d-flex" id="left-col">
                <div class="row m-0 w-100">
                    <div class="col w-100 p-0">
                        <div class="row mx-0 mb-4 text-center">
                            <h1 class="text-color-base m-0 p-0 text-b">
                                Logi<span class="text-color-secondary">stock</span>
                            </h1>
                        </div>
        
                        <div class="row mx-0 mb-5 text-center">
                            <p class="text-color-base m-0 p-0">
                                Kelola barang masuk dan keluar dengan mudah. Silahkan login untuk melanjutkan.
                            </p>
                        </div>
        
                        <form action="<?php echo e(route('login.process')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="row mx-0 mb-4">
                                <label class="text-color-base mb-2 p-0">
                                    Email
                                </label>
                                <input type="text" class="form-control" name="email" required>
                            </div>
                            
                            <div class="row mx-0 mb-128 position-relative">
                                <label class="text-color-base mb-2 p-0">
                                    Password
                                </label>
                                <input type="password" class="form-control" id="password" name="password" required>
                                <i class="fa-regular fa-eye end-0" id="togglePassword"></i>
                            
                            </div>
        
                            <div class="row m-0">
                                <button class="btn bg-color-secondary text-color-base text-b" type="submit">
                                    Login
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 d-none d-md-flex justify-content-center align-item-center d-flex" id="right-col">
                <div class="row m-0">
                    <div class="col p-0 m-auto">
                        <img src="<?php echo e(asset('img/login-illustration.png')); ?>" alt="Login illustration">
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

    <?php $__env->startPush('scripts'); ?>
        <script src="<?php echo e(asset('js/show-password.js')); ?>"></script>
    <?php $__env->stopPush(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\logistock\resources\views/login.blade.php ENDPATH**/ ?>