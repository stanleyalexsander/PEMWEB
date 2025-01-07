

<?php $__env->startSection('title', 'Barang Keluar - Logistock'); ?>

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
                                    <h3 class="m-0 p-0 text-b text-color-text">Barang Keluar</h3>
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
                                                <th>Tanggal Keluar</th>
                                                <th>Tujuan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $barangKeluarData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barangKeluar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($barangKeluar->kode_barang); ?></td>
                                                    <td><?php echo e($barangKeluar->jumlah_keluar); ?></td>
                                                    <td><?php echo e($barangKeluar->tanggal_keluar); ?></td>
                                                    <td><?php echo e($barangKeluar->tujuan_barang); ?></td>
                                                    <td class="text-center">
                                                        <a href="" class="btn btn-info text-color-base border-0 mx-1" data-bs-toggle="modal" data-bs-target="#modalEditData<?php echo e($barangKeluar->id_keluar); ?>"><i class="fa-regular fa-pen-to-square"></i></a>
                                                        <a href="" class="btn btn-danger btn-delete text-color-base border-0 mx-1" data-id="<?php echo e($barangKeluar->id_keluar); ?>"><i class="fa-regular fa-trash-can"></i></a>
                                                        <form action="<?php echo e(route('barang-keluar.destroy', $barangKeluar->id_keluar)); ?>" method="POST" id="delete-form-<?php echo e($barangKeluar->id_keluar); ?>">
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
            <h3 class="text-b text-color-text m-0 p-0" id="modalTambahDataLabel">Data Barang Keluar</h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="<?php echo e(route('barang-keluar.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="modal-body py-0 px-4">
                <div class="row mx-0 mb-3">
                    <label class="text-color-text mb-2 mx-0 p-0">Kode Barang</label>
                    <select class="form-control" name="kode_barang" id="kode_barang" required>
                        <option value="" selected disabled>Pilih kode barang</option>
                        <?php $__currentLoopData = $barangData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($barang->kode_barang); ?>"><?php echo e($barang->kode_barang); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="row mx-0 mb-3">
                    <label class="text-color-text mb-2 mx-0 p-0">Nama Barang</label>
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" readonly disabled>
                </div>
                <div class="row mx-0 mb-3">
                    <label class="text-color-text mb-2 mx-0 p-0">Kategori</label>
                    <input type="text" class="form-control" id="kategori_barang" name="kategori_barang" readonly disabled>
                </div>
                <div class="row mx-0 mb-3">
                    <label class="text-color-text mb-2 mx-0 p-0">Jumlah</label>
                    <input class="form-control" type="number" name="jumlah_keluar" required>
                </div>
                <div class="row mx-0 mb-3">
                    <label class="text-color-text mb-2 mx-0 p-0">Tanggal Keluar</label>
                    <input class="form-control" type="date" name="tanggal_keluar" required>
                </div>
                <div class="row mx-0 mb-3">
                    <label class="text-color-text mb-2 mx-0 p-0">Tujuan Barang</label>
                    <select class="form-control select2" name="tujuan_barang" required>
                        <option value="" selected disabled>Pilih atau masukkan tujuan barang</option>
                        <?php $__currentLoopData = $barangKeluarData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barangKeluar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($barangKeluar->tujuan_barang); ?>"><?php echo e($barangKeluar->tujuan_barang); ?></option>
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
<?php $__currentLoopData = $barangKeluarData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barangKeluar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="modal fade" id="modalEditData<?php echo e($barangKeluar->id_keluar); ?>" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEditDataLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0 p-4">
                    <h3 class="text-b text-color-text m-0 p-0" id="modalEditDataLabel">Edit Barang Masuk</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?php echo e(route('barang-keluar.update', $barangKeluar->id_keluar)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="modal-body py-0 px-4">
                        <div class="row mx-0 mb-3">
                            <label class="text-color-text mb-2 mx-0 p-0">Kode Barang</label>
                            <select class="form-control select2" name="kode_barang" required>
                                <option value="<?php echo e($barangKeluar->kode_barang); ?>" selected><?php echo e($barangKeluar->kode_barang); ?></option>
                                <?php $__currentLoopData = $barangData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($barangKeluar->kode_barang != $barang->kode_barang): ?>
                                        <option value="<?php echo e($barang->kode_barang); ?>"><?php echo e($barang->kode_barang); ?></option>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="row mx-0 mb-3">
                            <label class="text-color-text mb-2 mx-0 p-0">Jumlah Keluar</label>
                            <input class="form-control" type="number" name="jumlah_keluar" value="<?php echo e($barangKeluar->jumlah_keluar); ?>" required>
                        </div>
                        <div class="row mx-0 mb-3">
                            <label class="text-color-text mb-2 mx-0 p-0">Tanggal Keluar</label>
                            <input class="form-control" type="date" name="tanggal_keluar" value="<?php echo e($barangKeluar->tanggal_keluar); ?>" required>
                        </div>
                        <div class="row mx-0 mb-3">
                            <label class="text-color-text mb-2 mx-0 p-0">Tujuan Keluar</label>
                            <input class="form-control" type="text" name="tujuan_barang" value="<?php echo e($barangKeluar->tujuan_barang); ?>" required>
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
<script>
    document.getElementById('tgl').value = new Date().toISOString().split('T')[0];
</script>

<script>
    document.getElementById('kode_barang').addEventListener('change', function() {
        let kodeBarang = this.value;

        if (kodeBarang) {
            fetch(`/barang/get-data/${kodeBarang}`)
                .then(response => response.json())
                .then(data => {
                    if (data.error) {
                        alert(data.error);
                    } else {
                        document.getElementById('nama_barang').value = data.nama_barang;
                        document.getElementById('kategori_barang').value = data.kategori_barang;
                    }
                })
                .catch(error => console.error('Error:', error));
        } else {
            document.getElementById('nama_barang').value = '';
            document.getElementById('kategori_barang').value = '';
        }
    });
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\logistock\resources\views/barang-keluar.blade.php ENDPATH**/ ?>