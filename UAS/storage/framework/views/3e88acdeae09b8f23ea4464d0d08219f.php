

<?php $__env->startSection('title', 'Dashboard - Logistock'); ?>

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

                        <div class="col-12 col-lg-6 p-0">
                            <div class="row mb-3 mx-0">
                                <h3 class="m-0 p-0 text-b text-color-text">Barang Tersedia</h3>
                            </div>
                            <div class="row m-0">
                                <canvas class="p-0" id="barangTersediaChart"></canvas>
                            </div>
                        </div>

                        <div class="col-12 col-lg-6 p-0">
                            <div class="row mb-3 mx-0">
                                <h3 class="m-0 p-0 text-b text-color-text">Hampir Habis</h3>
                            </div>
                            <div class="row m-0">
                                <canvas class="p-0" id="barangHampirHabisChart"></canvas>
                            </div>
                        </div>

                        <div class="col-12 p-0">
                            <div class="row mb-3 mx-0">
                                <h3 class="m-0 p-0 text-b text-color-text">Riwayat Barang</h3>
                            </div>
                            <div class="row m-0">
                                <table id="riwayatTable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Kode</th>
                                            <th>Nama Barang</th>
                                            <th>Stok</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $barangData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($barang->kode_barang); ?></td>
                                                <td><?php echo e($barang->nama_barang); ?></td>
                                                <td><?php echo e($barang->stok); ?></td>
                                                <td><?php echo e(\Carbon\Carbon::parse($barang->tanggal)->format('d-m-Y')); ?></td>
                                                <td><?php echo e($barang->keterangan); ?></td>
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
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const barangTersedia = {
        labels: <?php echo json_encode($labelBarangTersedia, 15, 512) ?>,
        datasets: [{
            data: <?php echo json_encode($stokBarangTersedia, 15, 512) ?>,
            backgroundColor: '#F79279'
        }]
    };

    const barangHampirHabis = {
        labels: <?php echo json_encode($labelHampirHabis, 15, 512) ?>,
        datasets: [{
            data: <?php echo json_encode($stokHampirHabis, 15, 512) ?>,
            backgroundColor: '#4682B4'
        }]
    };

    const configBarangTersedia = {
        type: 'bar',
        data: barangTersedia,
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: false
                },
                title: {
                    display: false
                }
            }
        }
    };

    const configBarangHampirHabis = {
        type: 'bar',
        data: barangHampirHabis,
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: false
                },
                title: {
                    display: false
                }
            }
        }
    };

    new Chart(document.getElementById('barangTersediaChart'), configBarangTersedia);
    new Chart(document.getElementById('barangHampirHabisChart'), configBarangHampirHabis);
</script>

<script>
    $(document).ready(function() {
        $('#riwayatTable').DataTable({
            pageLength: 5,
            lengthMenu: [5, 10, 20, 50],
            order: [[3, 'desc']],
            language: {
                search: "Cari:",
                lengthMenu: "Tampilkan _MENU_ entri",
                info: "Menampilkan _START_ hingga _END_ dari _TOTAL_ entri",
                paginate: {
                    first: "Pertama",
                    last: "Terakhir",
                    next: "Berikutnya",
                    previous: "Sebelumnya"
                }
            }
        });
    });
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\logistock\resources\views/dashboard.blade.php ENDPATH**/ ?>