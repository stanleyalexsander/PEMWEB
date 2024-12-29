<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Biodata</title>
</head>
<body>
    <h1>Edit Biodata</h1>
    <form action="<?php echo e(route('biodatas.update', $biodata->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <label for="first_name">Nama Depan:</label>
        <input type="text" name="first_name" id="first_name" value="<?php echo e($biodata->first_name); ?>" required>
        <br>

        <label for="last_name">Nama Belakang:</label>
        <input type="text" name="last_name" id="last_name" value="<?php echo e($biodata->last_name); ?>" required>
        <br>

        <label for="gender">Jenis Kelamin:</label>
        <select name="gender" id="gender" required>
            <option value="male" <?php echo e($biodata->gender == 'male' ? 'selected' : ''); ?>>Laki-laki</option>
            <option value="female" <?php echo e($biodata->gender == 'female' ? 'selected' : ''); ?>>Perempuan</option>
        </select>
        <br>
        <button type="submit">Simpan</button>
    </form>
    <a href="<?php echo e(route('biodatas.index')); ?>">Kembali ke Daftar Biodata</a>
</body>
</html><?php /**PATH C:\laragon\www\pemrograman-web-a\resources\views/biodatas/edit.blade.php ENDPATH**/ ?>