

<?php $__env->startSection('title', 'Data Barang - Logistock'); ?>

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
                                <h3 class="m-0 p-0 text-b text-color-text">Data Barang</h3>
                            </div>
                            <div class="row m-0">
                                <div class="table-responsive">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Kode</th>
                                                <th>Nama Barang</th>
                                                <th>Kategori</th>
                                                <th>Stok</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>     
                                                <?php $__currentLoopData = $barangData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($barang->kode_barang); ?></td>
                                                        <td><?php echo e($barang->nama_barang); ?></td>
                                                        <td><?php echo e($barang->kategori_barang); ?></td>
                                                        <td><?php echo e($barang->stok); ?></td>
                                                        <td class="text-center">
                                                            <a href="" class="btn btn-info text-color-base border-0 mx-1" data-bs-toggle="modal" data-bs-target="#modalEditData<?php echo e($barang->id_barang); ?>"><i class="fa-regular fa-pen-to-square"></i></a>
                                                            <a href="" class="btn btn-danger btn-delete text-color-base border-0 mx-1" data-id="<?php echo e($barang->id_barang); ?>"><i class="fa-regular fa-trash-can"></i></a>
                                                            <form action="<?php echo e(route('data-barang.destroy', $barang->id_barang)); ?>" method="POST" id="delete-form-<?php echo e($barang->id_barang); ?>">
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

<!-- Modal -->
<?php $__currentLoopData = $barangData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="modal fade" id="modalEditData<?php echo e($barang->id_barang); ?>" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEditDataLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0 p-4">
                <h3 class="text-b text-color-text m-0 p-0" id="modalEditDataLabel">Edit Data Barang</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?php echo e(route('data-barang.update', $barang->id_barang)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="modal-body py-0 px-4">
                    <div class="row mx-0 mb-3">
                        <label class="text-color-text mb-2 mx-0 p-0">Kode</label>
                        <input class="form-control" type="text" name="kode_barang" value="<?php echo e($barang->kode_barang); ?>" required>
                    </div>
                    <div class="row mx-0 mb-3">
                        <label class="text-color-text mb-2 mx-0 p-0">Nama Barang</label>
                        <input class="form-control" type="text" name="nama_barang" value="<?php echo e($barang->nama_barang); ?>" required>
                    </div>
                    <div class="row mx-0 mb-3">
                        <label class="text-color-text mb-2 mx-0 p-0">Kategori</label>
                        <select class="form-control select2" id="mySelect2" name="kategori_barang" required>
                            <option value="<?php echo e($barang->kategori_barang); ?>" selected><?php echo e($barang->kategori_barang); ?></option>
                            <?php $__currentLoopData = $kategoriBarang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($barang->kategori_barang != $kategori->kategori_barang): ?>
                                    <option value="<?php echo e($kategori->kategori_barang); ?>"><?php echo e($kategori->kategori_barang); ?></option>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="row mx-0 mb-3">
                        <label class="text-color-text mb-2 mx-0 p-0">Stok</label>
                        <input class="form-control" type="number" name="stok" value="<?php echo e($barang->stok); ?>" required>
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

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\logistock\resources\views/data-barang.blade.php ENDPATH**/ ?>