

<?php $__env->startSection('title', 'Pengguna - Logistock'); ?>

<?php $__env->startPush('styles'); ?>
    <link href="<?php echo e(asset('css/dashboard.css')); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid m-0 p-0" id="wrap">
    <div class="row m-0">

        <!-- SIDEBAR -->
        <?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- END SIDEBAR -->

        <div class="col" id="wrap-right">

            <!-- NAVBAR -->
            <?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- NAVBAR -->

            <div class="row m-0">
                <div class="col pt-5 px-4 pb-4">
                    <div class="row m-0" id="data-row">

                        <div class="col-12 p-0">
                            <div class="row mb-3 mx-0">
                                <div class="col p-0">
                                    <h3 class="m-0 p-0 text-b text-color-text">Pengguna</h3>
                                </div>
                                <div class="col-auto p-0">
                                    <a href="" class="btn bg-color-secondary  text-color-base border-0 mx-1" data-bs-toggle="modal" data-bs-target="#modalTambahData">Tambah <i class="fa-regular fa-plus"></i></a>
                                </div>
                            </div>
                            <div class="row m-0">
                                <div class="table-responsive">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($user->nama_pengguna); ?></td>
                                                    <td><?php echo e($user->email); ?></td>
                                                    <td><?php echo e($user->hak_akses); ?></td>
                                                    <td class="text-center">
                                                        <a href="" class="btn btn-info text-color-base border-0 mx-1" data-bs-toggle="modal" data-bs-target="#modalEditData<?php echo e($user->id_pengguna); ?>"><i class="fa-regular fa-pen-to-square"></i></a>
                                                        <a href="" class="btn btn-danger btn-delete text-color-base border-0 mx-1" data-id="<?php echo e($user->id_pengguna); ?>"><i class="fa-regular fa-trash-can"></i></a>
                                                        <form action="<?php echo e(route('pengguna.destroy', $user->id_pengguna)); ?>" method="POST" id="delete-form-<?php echo e($user->id_pengguna); ?>">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('DELETE'); ?>
                                                        </form>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="modalTambahData" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalTambahDataLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header border-0 p-4">
            <h3 class="text-b text-color-text m-0 p-0" id="modalTambahDataLabel">Data Barang Masuk</h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="<?php echo e(route('pengguna.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="modal-body py-0 px-4">
                <div class="row mx-0 mb-3">
                    <label class="text-color-text mb-2 mx-0 p-0">Nama</label>
                    <input class="form-control" type="text" name="nama_pengguna" required>
                </div>

                <div class="row mx-0 mb-3">
                    <label class="text-color-text mb-2 mx-0 p-0">Email</label>
                    <input class="form-control" type="text" name="email" required>
                </div>

                <div class="row mx-0 mb-3">
                    <label class="text-color-text mb-2 mx-0 p-0">Password</label>
                    <input class="form-control" type="text" name="password" required>
                </div>

                <div class="row mx-0 mb-3">
                    <label class="text-color-text mb-2 mx-0 p-0">Role</label>
                    <select class="form-control" name="hak_akses" required>
                        <option value="" disabled selected>Pilih role</option>
                        <option value="admin">Admin</option>
                        <option value="petugas">Petugas</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer border-0 p-4">
                <button type="button" class="btn bg-color-primary text-color-base me-4" data-bs-dismiss="modal">Batal</button>
                <button class="btn bg-color-secondary text-color-base" type="submit">Simpan</button>
            </div>
        </form>
      </div>
    </div>
</div>

<!-- Modal Edit -->
<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="modal fade" id="modalEditData<?php echo e($user->id_pengguna); ?>" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEditDataLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header border-0 p-4">
            <h3 class="text-b text-color-text m-0 p-0" id="modalEditDataLabel">Edit Barang Masuk</h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="<?php echo e(route('pengguna.update', $user->id_pengguna)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="modal-body py-0 px-4">
                
                <div class="row mx-0 mb-3">
                    <label class="text-color-text mb-2 mx-0 p-0">Nama</label>
                    <input class="form-control" type="text" name="nama_pengguna" value="<?php echo e($user->nama_pengguna); ?>" required>
                </div>

                <div class="row mx-0 mb-3">
                    <label class="text-color-text mb-2 mx-0 p-0">Email</label>
                    <input class="form-control" type="text" name="email" value="<?php echo e($user->email); ?>" required>
                </div>

                <div class="row mx-0 mb-3">
                    <label class="text-color-text mb-2 mx-0 p-0">Password (Biarkan kosong jika tidak ingin diubah)</label>
                    <input class="form-control" type="text" name="password">
                </div>

                <div class="row mx-0 mb-3">
                    <label class="text-color-text mb-2 mx-0 p-0">Role</label>
                    <select class="form-control" name="hak_akses" required>
                        <option value="admin" <?php echo e($user->hak_akses == 'admin' ? 'selected' : ''); ?>>Admin</option>
                        <option value="petugas" <?php echo e($user->hak_akses == 'petugas' ? 'selected' : ''); ?>>Petugas</option>
                    </select>
                </div> 
                
            </div>
            <div class="modal-footer border-0 p-4">
                <button type="button" class="btn bg-color-primary text-color-base me-4" data-bs-dismiss="modal">Batal</button>
                <button class="btn bg-color-secondary text-color-base" type="submit">Simpan</button>
            </div>
        </form>
      </div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\logistock\resources\views/pengguna.blade.php ENDPATH**/ ?>