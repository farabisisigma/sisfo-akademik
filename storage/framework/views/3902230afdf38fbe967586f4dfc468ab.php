<?php $__env->startSection('title', 'Tambah Data Kelas'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <form action="<?php echo e(route('kelas.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <div class="mb-3">
                <label for="nama_kelas" class="form-label">Nama kelas</label>
                <input type="text" name="nama_kelas" id="nama_kelas" class="form-control" value="<?php echo e(old('nama_kelas')); ?>">
            </div>
            <div class="mb-3">
                <label for="tingkat" class="form-label">tingkat</label>
                <input type="text" name="tingkat" id="tingkat" class="form-control" value="<?php echo e(old('tingkat')); ?>">
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">jurusan</label>
                <input type="text" name="jurusan" id="jurusan" class="form-control" value="<?php echo e(old('jurusan')); ?>">
            </div>
            <div class="mb-3">
                <label for="tahun_ajaran" class="form-label">tahun ajaran</label>
                <input type="text" name="tahun_ajaran" id="tahun_ajaran" class="form-control" value="<?php echo e(old('tahun_ajaran')); ?>">
            </div>
            <button type="submit" class="btn btn-primary">simpan</button>
            <a href="<?php echo e(route('kelas.index')); ?>" class="btn btn-secondary">batal</a>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\sisfoxirpl1\resources\views/kelas/create.blade.php ENDPATH**/ ?>