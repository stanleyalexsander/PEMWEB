<div class="row bg-color-base justify-content-end m-0" id="wrap-right-nav">
    <p class="my-auto w-auto p-0 me-4 text-color-text" id="wrap-right-nav-profile"><?php echo e(auth()->user()->nama_pengguna ?? 'Pengguna'); ?></p>
    <div class="navbar fixed-top d-flex align-items-center mobile-item-nav d-none bg-transparent px-4">
        <button class="navbar-toggler text-center my-auto" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            type="button" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars text-color-primary"></i>
        </button>
        <div class="offcanvas offcanvas-start bg-color-primary" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel"
            tabindex="-1">
            <div class="offcanvas-header">
                <h2 class="text-color-base text-b m-auto">Logi<span class="text-color-secondary">stock</span></h2>
            </div>
            <div class="offcanvas-body p-0">
                <ul class="navbar-nav">
                    <hr class="m-0 p-0 bg-color-active">

                    <?php if(Auth::user()->hasRole('admin')): ?>
                        <li class="nav-item mt-5 mb-3 mx-3">
                            <a class="nav-link btn d-flex align-items-center text-semi-b py-2 px-3 text-color-base" id="dashboard-nav"
                                href="<?php echo e(route('dashboard')); ?>">
                                <i class="fa-solid fa-chart-line text-color-base me-2"></i> Dashboard
                            </a>
                        </li>

                        <li class="nav-item mb-3 mx-3">
                            <a class="nav-link btn d-flex align-items-center text-semi-b py-2 px-3 text-color-base" id="data-barang-nav"
                                href="<?php echo e(route('data-barang')); ?>">
                                <i class="fa-solid fa-boxes-stacked text-color-base me-2"></i> Data Barang
                            </a>
                        </li>

                        <li class="nav-item mb-3 mx-3">
                            <a class="nav-link btn d-flex align-items-center text-semi-b py-2 px-3 text-color-base" id="barang-masuk-nav"
                                href="<?php echo e(route('barang-masuk')); ?>">
                                <i class="fa-solid fa-box-open text-color-base me-2"></i> Barang Masuk
                            </a>
                        </li>

                        <li class="nav-item mb-3 mx-3">
                            <a class="nav-link btn d-flex align-items-center text-semi-b py-2 px-3 text-color-base" id="barang-keluar-nav"
                                href="<?php echo e(route('barang-keluar')); ?>">
                                <i class="fa-solid fa-dolly text-color-base me-2"></i> Barang Keluar
                            </a>
                        </li>

                        <li class="nav-item mb-5 mx-3">
                            <a class="nav-link btn d-flex align-items-center text-semi-b py-2 px-3 text-color-base" id="pengguna-nav"
                                href="<?php echo e(route('pengguna')); ?>">
                                <i class="fa-solid fa-users text-color-base me-2"></i> Pengguna
                            </a>
                    </li>
                    <?php endif; ?>

                    <?php if(Auth::user()->hasRole('petugas')): ?>                   
                        <li class="nav-item mb-3 mt-5 mx-3">
                            <a class="nav-link btn d-flex align-items-center text-semi-b py-2 px-3 text-color-base" id="barang-masuk-nav"
                                href="<?php echo e(route('barang-masuk')); ?>">
                                <i class="fa-solid fa-box-open text-color-base me-2"></i> Barang Masuk
                            </a>
                        </li>

                        <li class="nav-item mb-5 mx-3">
                            <a class="nav-link btn d-flex align-items-center text-semi-b py-2 px-3 text-color-base" id="barang-keluar-nav"
                                href="<?php echo e(route('barang-keluar')); ?>">
                                <i class="fa-solid fa-dolly text-color-base me-2"></i> Barang Keluar
                            </a>
                        </li>
                    <?php endif; ?>

                    <hr class="m-0 p-0 bg-color-primary">

                    <li class="nav-item mt-4 mx-3">
                        <form action="<?php echo e(route('logout')); ?>" id="logout-form" class="p-0" method="POST">
                            <?php echo csrf_field(); ?>
                            <a class="nav-link btn btn-logout d-flex align-items-center text-semi-b py-2 px-3 text-color-base"
                                href="<?php echo e(route('logout')); ?>">
                                <i class="fa-solid fa-arrow-right-from-bracket text-color-base me-2"></i> Logout
                            </a>
                        </form>
                    </li>

                </ul>

            </div>
        </div>

    </div>
</div>
<?php /**PATH C:\laragon\www\logistock\resources\views/navbar.blade.php ENDPATH**/ ?>