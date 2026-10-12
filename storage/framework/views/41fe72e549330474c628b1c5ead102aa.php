<?php $__env->startSection('title', 'Tambah Data Guru'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <form action="<?php echo e(route('guru.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <div class="mb-3">
                <label for="nip" class="form-label">NIP</label>
                <input type="text" name="nip" id="nip" class="form-control" value="<?php echo e(old('nip')); ?>">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" value="<?php echo e(old('nama')); ?>">
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">jenis kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-select">
                    <option value="">-- pilih --</option>
                    <option value="L" <?php echo e(old ('jenis_kelamin') == 'L' ? 'selected' : ''); ?>>laki laki</option>
                    <option value="P" <?php echo e(old ('jenis_kelamin') == 'P' ? 'selected' : ''); ?>>perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" id="email" class="form-control" value="<?php echo e(old('email')); ?>">
            </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label">No hp</label>
                <input type="text" name="no_hp" id="no_hp" class="form-control" value="<?php echo e(old('no_hp')); ?>">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control" value="<?php echo e(old('alamat')); ?>">
            </div>
            <button type="submit" class="btn btn-primary">simpan</button>
            <a href="<?php echo e(route('guru.index')); ?>" class="btn btn-secondary">batal</a>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\sisfoxirpl1\resources\views/guru/create.blade.php ENDPATH**/ ?>