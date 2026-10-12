<?php $__env->startSection('title', 'Edit Data Siswa'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Edit Data Siswa</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="<?php echo e(route('siswa.update', $siswa->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="form-group">
                    <label>NIS</label>
                    <input type="text" name="nis" class="form-control" value="<?php echo e($siswa->nis); ?>" required>
                </div>
                <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" name="nama" class="form-control" value="<?php echo e($siswa->nama); ?>" required>
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control" required>
                        <option value="L" <?php echo e($siswa->jenis_kelamin == 'Laki-Laki' ? 'selected' : ''); ?>>Laki-Laki</option>
                        <option value="P" <?php echo e($siswa->jenis_kelamin == 'Perempuan' ? 'selected' : ''); ?>>Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Kelas</label>
                    <select name="kelas_id" class="form-control" required>
                        <?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($k->id); ?>" <?php echo e($siswa->kelas_id == $k->id ? 'selected' : ''); ?>><?php echo e($k->nama_kelas); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>No HP</label>
                    <input type="text" name="no_hp" class="form-control" value="<?php echo e($siswa->no_hp); ?>" required>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control" required><?php echo e($siswa->alamat); ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Perbarui</button>
                <a href="<?php echo e(route('siswa.index')); ?>" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\sisfoxirpl1\resources\views/siswa/edit.blade.php ENDPATH**/ ?>