<?php $__env->startSection('title', 'Edit Data Mata Pelajaran'); ?>

<?php $__env->startSection('content'); ?>
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
       <form action="<?php echo e(route('mapel.update', $mapel->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3">
            <label for="kode_mapel" class="form-label">kode mapel</label>
            <input type="text" name="kode_mapel" id="kode_mapel" class="form-control" value="<?php echo e(old ('kode_mapel', $mapel->kode_mapel)); ?>">
        </div>
        <div class="mb-3">
            <label for="nama_mapel" class="form-label">Nama mapel</label>
            <input type="text" name="nama_mapel" id="nama_mapel" class="form-control" value="<?php echo e(old ('nama_mapel', $mapel->nama_mapel)); ?>">
        </div>
        <div class="mb-3">
                <label for="kkm" class="form-label">kkm</label>
                <input type="number" name="kkm" id="kkm" class="form-control" value="<?php echo e(old('kkm', $mapel->kkm)); ?>" min:"0" max:"100" >
        </div>
        <button type="submit" class="btn btn-primary">simpan</button>
        <a href="<?php echo e(route ('kelas.index')); ?>" class="btn btn-secondary">batal</a>
       </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\sisfoxirpl1\resources\views/mapel/edit.blade.php ENDPATH**/ ?>