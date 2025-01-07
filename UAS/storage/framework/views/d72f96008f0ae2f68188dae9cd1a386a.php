<div class="col position-fixed desktop-item bg-color-primary p-0" id="wrap-left">
    <div class="row mx-auto my-0 text-center py-3 px-3" id="wrap-left-brand">
        <h2 class="text-color-base text-b m-auto p-0">Logi<span class="text-color-secondary">stock</span></h2>
    </div>
    <hr class="m-0 p-0 bg-color-active">
    <div class="row m-auto" id="wrap-left-link">
        <div class="col mx-auto mt-5 p-0">

            <?php if(Auth::user()->hasRole('admin')): ?>
                <div class="row mb-3 mx-3">
                    <a class="btn d-flex align-items-center text-color-base text-semi-b py-2 px-3" id="dashboard-side"
                        href="<?php echo e(route('dashboard')); ?>">
                        <i class="fa-solid fa-chart-line text-color-base me-2"></i> Dashboard
                    </a>
                </div>

                <div class="row mb-3 mx-3">
                    <a class="btn d-flex align-items-center text-color-base text-semi-b text-color-base text-semi-b py-2 px-3" id="data-barang-side"
                        href="<?php echo e(route('data-barang')); ?>">
                        <i class="fa-solid fa-boxes-stacked text-color-base me-2"></i> Data Barang
                    </a>
                </div>

                <div class="row mb-3 mx-3">
                    <a class="btn d-flex align-items-center text-color-base text-semi-b text-color-base text-semi-b py-2 px-3" id="barang-masuk-side"
                        href="<?php echo e(route('barang-masuk')); ?>">
                        <i class="fa-solid fa-box-open text-color-base me-2"></i> Barang Masuk
                    </a>
                </div>

                <div class="row mb-3 mx-3">
                    <a class="btn d-flex align-items-center text-color-base text-semi-b text-color-base text-semi-b py-2 px-3" id="barang-keluar-side"
                        href="<?php echo e(route('barang-keluar')); ?>">
                        <i class="fa-solid fa-dolly text-color-base me-2"></i> Barang Keluar
                    </a>
                </div>

                <div class="row mb-5 mx-3">
                    <a class="btn d-flex align-items-center text-color-base text-semi-b text-color-base text-semi-b py-2 px-3" id="pengguna-side"
                        href="<?php echo e(route('pengguna')); ?>">
                        <i class="fa-solid fa-users text-color-base me-2"></i> Pengguna
                    </a>
                </div>
            <?php endif; ?>

            <?php if(Auth::user()->hasRole('petugas')): ?>
                <div class="row mb-3 mx-3">
                    <a class="btn d-flex align-items-center text-color-base text-semi-b text-color-base text-semi-b py-2 px-3" id="barang-masuk-side"
                        href="<?php echo e(route('barang-masuk')); ?>">
                        <i class="fa-solid fa-box-open text-color-base me-2"></i> Barang Masuk
                    </a>
                </div>

                <div class="row mb-5 mx-3">
                    <a class="btn d-flex align-items-center text-color-base text-semi-b text-color-base text-semi-b py-2 px-3" id="barang-keluar-side"
                        href="<?php echo e(route('barang-keluar')); ?>">
                        <i class="fa-solid fa-dolly text-color-base me-2"></i> Barang Keluar
                    </a>
                </div>
            <?php endif; ?>

            <hr class="m-0 p-0">

            <div class="row mt-4 mx-3">
                <form action="<?php echo e(route('logout')); ?>" id="logout-form" class="p-0" method="POST">
                    <?php echo csrf_field(); ?>
                    <a class="btn btn-logout d-flex align-items-center text-color-base text-semi-b text-color-base text-semi-b py-2 px-3"
                        href="<?php echo e(route('logout')); ?>">
                        <i class="fa-solid fa-arrow-right-from-bracket text-color-base me-2"></i> Logout
                    </a>
                </form>
            </div>

        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\logistock\resources\views/sidebar.blade.php ENDPATH**/ ?>