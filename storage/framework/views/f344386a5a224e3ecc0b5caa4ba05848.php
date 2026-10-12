<?php $__env->startSection('title', 'Edit Data Guru'); ?>

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
       <form action="<?php echo e(route('guru.update', $guru->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3">
            <label for="nip" class="form-label">NIP</label>
            <input type="text" name="nip" id="nip" class="form-control" value="<?php echo e(old ('nip', $guru->nip)); ?>">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" value="<?php echo e(old ('nama', $guru->nama)); ?>">
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis kelamin</label>
            <select name="jenis_kelamin" id="jenis_kelamin" class="form-select">
                <option value="">--pilih--</option>
                <option value="L" <?php echo e(old('jenis_kelamin', $guru->jenis_kelamin) == 'L' ?  'selected' : ''); ?>>Laki-Laki</option>
                <option value="P" <?php echo e(old('jenis_kelamin', $guru->jenis_kelamin) == 'P' ?  'selected' : ''); ?>>perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">email</label>
            <input type="text" name="email" id="email" class="form-control" value="<?php echo e(old ('email', $guru->email)); ?>">
        </div>
        <div class="mb-3">
            <label for="no_hp" class="form-label">No Hp</label>
            <input type="text" name="no_hp" id="no_hp" class="form-control" value="<?php echo e(old ('no_hp', $guru->no_hp)); ?>">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">alamat</label>
            <input type="text" name="alamat" id="alamat" class="form-control" value="<?php echo e(old ('alamat', $guru->alamat)); ?>">
        </div>
        <button type="submit" class="btn btn-primary">simpan</button>
        <a href="<?php echo e(route('guru.index')); ?>" class="btn btn-secondary">batal</a>
       </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\sisfoxirpl1\resources\views/guru/edit.blade.php ENDPATH**/ ?>