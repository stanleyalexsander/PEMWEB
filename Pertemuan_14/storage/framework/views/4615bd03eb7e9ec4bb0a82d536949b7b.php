<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Biodata</title>
</head>
<body>
    <h1>Daftar Biodata</h1>
    <a href="<?php echo e(route('biodatas.create')); ?>">Tambah Biodata</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Depan</th>
                <th>Nama Belakang</th>
                <th>Jenis Kelamin</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $biodatas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $biodata): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($biodata->first_name); ?></td>
                <td><?php echo e($biodata->last_name); ?></td>
                <td><?php echo e($biodata->gender); ?></td>
                <td>
                    <a href="<?php echo e(route('biodatas.edit', $biodata->id)); ?>">Edit</a>
                    <form action="<?php echo e(route('biodatas.destroy', $biodata->id)); ?>" method="POST" style="display: inline;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html><?php /**PATH C:\laragon\www\pemrograman-web-a\resources\views/biodatas/index.blade.php ENDPATH**/ ?>