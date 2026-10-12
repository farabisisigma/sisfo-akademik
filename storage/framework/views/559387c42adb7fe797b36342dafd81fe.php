<?php $__env->startSection('title', 'Edit Data Kelas'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
       <div class="container-fluid">
       <?php if($errors->any()): ?>
       <div class="alert alert-danger">
        <ul class="mb-0">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
       </div>
       <?php endif; ?>
       <form action="<?php echo e(route('kelas.update', $kela->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3">
            <label for="nama_kelas" class="form-label">nama kelas</label>
            <input type="text" name="nama_kelas" id="nama_kelas" class="form-control" value="<?php echo e(old ('nama_kelas', $kela->nama_kelas)); ?>">
        </div>
        <div class="mb-3">
            <label for="tingkat" class="form-label">tingkat</label>
            <input type="text" name="tingkat" id="tingkat" class="form-control" value="<?php echo e(old ('nama_kelas', $kela->nama_kelas)); ?>">
        </div>
        <div class="mb-3">
            <label for="jurusan" class="form-label">jurusan</label>
            <input type="text" name="jurusan" id="jurusan" class="form-control" value="<?php echo e(old ('jurusan', $kela->jurusan)); ?>"> 
        </div>
        <div class="mb-3">
            <label for="tahun_ajaran" class="form-label">tahun ajaran</label>
            <input type="text" name="tahun_ajaran" id="tahun_ajaran" value="<?php echo e(old ('tahun_ajaran', $kela->tahun_ajaran)); ?>">
        </div>
        <div class="mb-3">
            <label for="jumlah_siswa" class="form-label">jumlah siswa</label>
            <input type="text" name="jumlah_siswa" id="jumlah_siswa" value="<?php echo e(old ('jumlah_siswa', $kela->jumlah_siswa)); ?>">
        </div>
        <button type="submit" class="btn btn-primary">simpan</button>
        <a href="<?php echo e(route ('kelas.index')); ?>" class="btn btn-secondary">batal</a>
       </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\sisfoxirpl1\resources\views/kelas/edit.blade.php ENDPATH**/ ?>