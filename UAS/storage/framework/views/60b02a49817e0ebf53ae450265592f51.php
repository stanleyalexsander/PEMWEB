

<?php $__env->startSection('title', 'Barang Masuk - Logistock'); ?>

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
                                    <h3 class="m-0 p-0 text-b text-color-text">Barang Masuk</h3>
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
                                                <th>Kode</th>
                                                <th>Jumlah Barang</th>
                                                <th>Tanggal Masuk</th>
                                                <th>Sumber</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $barangMasukData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barangMasuk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($barangMasuk->kode_barang); ?></td>
                                                    <td><?php echo e($barangMasuk->jumlah_masuk); ?></td>
                                                    <td><?php echo e($barangMasuk->tanggal_masuk); ?></td>
                                                    <td><?php echo e($barangMasuk->sumber_barang); ?></td>
                                                    <td class="text-center">
                                                        <a href="" class="btn btn-info text-color-base border-0 mx-1" data-bs-toggle="modal" data-bs-target="#modalEditData<?php echo e($barangMasuk->id_masuk); ?>"><i class="fa-regular fa-pen-to-square"></i></a>
                                                        <a href="" class="btn btn-danger btn-delete text-color-base border-0 mx-1" data-id="<?php echo e($barangMasuk->id_masuk); ?>"><i class="fa-regular fa-trash-can"></i></a>
                                                        <form action="<?php echo e(route('barang-masuk.destroy', $barangMasuk->id_masuk)); ?>" method="POST" id="delete-form-<?php echo e($barangMasuk->id_masuk); ?>">
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
        <form action="<?php echo e(route('barang-masuk.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="modal-body py-0 px-4">
                <div class="row mx-0 mb-3">
                    <label class="text-color-text mb-2 mx-0 p-0">Kode Barang</label>
                    <select class="form-control select2" name="kode_barang" required>
                        <option value="" selected disabled>Pilih atau masukkan kode</option>
                        <?php $__currentLoopData = $barangData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($barang->kode_barang); ?>"><?php echo e($barang->kode_barang); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="row mx-0 mb-3">
                    <label class="text-color-text mb-2 mx-0 p-0">Nama Barang</label>
                    <select class="form-control select2" name="nama_barang" required>
                        <option value="" selected disabled>Pilih atau masukkan nama barang</option>
                        <?php $__currentLoopData = $barangData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($barang->nama_barang); ?>"><?php echo e($barang->nama_barang); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="row mx-0 mb-3">
                    <label class="text-color-text mb-2 mx-0 p-0">Kategori</label>
                    <select class="form-control select2" name="kategori_barang" required>
                        <option value="" selected disabled>Pilih atau masukkan kategori</option>
                        <?php $__currentLoopData = $barangData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($barang->kategori_barang); ?>"><?php echo e($barang->kategori_barang); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="row mx-0 mb-3">
                    <label class="text-color-text mb-2 mx-0 p-0">Jumlah</label>
                    <input class="form-control" type="number" name="jumlah_masuk" required>
                </div>
                <div class="row mx-0 mb-3">
                    <label class="text-color-text mb-2 mx-0 p-0">Tanggal Masuk</label>
                    <input class="form-control" type="date" name="tanggal_masuk" required>
                </div>
                <div class="row mx-0 mb-3">
                    <label class="text-color-text mb-2 mx-0 p-0">Sumber Barang</label>
                    <select class="form-control select2" name="sumber_barang" required>
                        <option value="" selected disabled>Pilih atau masukkan sumber barang</option>
                        <?php $__currentLoopData = $barangMasukData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barangMasuk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($barangMasuk->sumber_barang); ?>"><?php echo e($barangMasuk->sumber_barang); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
            <div class="modal-footer border-0 p-4">
                <button type="button" class="btn bg-color-primary text-color-base me-4" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn bg-color-secondary text-color-base">Simpan</button>
            </div>
        </form>
      </div>
    </div>
</div>


<!-- Modal Edit -->
<?php $__currentLoopData = $barangMasukData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barangMasuk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="modal fade" id="modalEditData<?php echo e($barangMasuk->id_masuk); ?>" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEditDataLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0 p-4">
                    <h3 class="text-b text-color-text m-0 p-0" id="modalEditDataLabel">Edit Barang Masuk</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?php echo e(route('barang-masuk.update', $barangMasuk->id_masuk)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="modal-body py-0 px-4">
                        <div class="row mx-0 mb-3">
                            <label class="text-color-text mb-2 mx-0 p-0">Kode Barang</label>
                            <select class="form-control select2" name="kode_barang" required>
                                <option value="<?php echo e($barangMasuk->kode_barang); ?>" selected><?php echo e($barangMasuk->kode_barang); ?></option>
                                <?php $__currentLoopData = $barangData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($barangMasuk->kode_barang != $barang->kode_barang): ?>
                                        <option value="<?php echo e($barang->kode_barang); ?>"><?php echo e($barang->kode_barang); ?></option>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="row mx-0 mb-3">
                            <label class="text-color-text mb-2 mx-0 p-0">Jumlah Masuk</label>
                            <input class="form-control" type="number" name="jumlah_masuk" value="<?php echo e($barangMasuk->jumlah_masuk); ?>" required>
                        </div>
                        <div class="row mx-0 mb-3">
                            <label class="text-color-text mb-2 mx-0 p-0">Tanggal Masuk</label>
                            <input class="form-control" type="date" name="tanggal_masuk" value="<?php echo e($barangMasuk->tanggal_masuk); ?>" required>
                        </div>
                        <div class="row mx-0 mb-3">
                            <label class="text-color-text mb-2 mx-0 p-0">Sumber Barang</label>
                            <input class="form-control" type="text" name="sumber_barang" value="<?php echo e($barangMasuk->sumber_barang); ?>" required>
                        </div>
                    </div>
                    <div class="modal-footer border-0 p-4">
                        <button type="button" class="btn bg-color-primary text-color-base me-4" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn bg-color-secondary text-color-base">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\logistock\resources\views/barang-masuk.blade.php ENDPATH**/ ?>