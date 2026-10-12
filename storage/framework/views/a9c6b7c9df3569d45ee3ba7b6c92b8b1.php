<?php $__env->startSection('title', 'Input Nilai Siswa'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
         <h1 class="h3 mb-4 text-gray-800">Input Nilai Siswa</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="<?php echo e(route('nilai.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label>Pilih Siswa</label>
                    <select name="siswa_id" class="form-control" required>
                        <option value="">-- Pilih Siswa --</option>
                        <?php $__currentLoopData = $siswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($siswa->id); ?>"><?php echo e($siswa->nama); ?> (NIS: <?php echo e($siswa->nis); ?>)</option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Pilih Mata Pelajaran</label>
                    <select name="mapel_id" class="form-control" required>
                        <option value="">-- Pilih Mata Pelajaran --</option>
                        <?php $__currentLoopData = $mapels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mapel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($mapel->id); ?>"><?php echo e($mapel->nama_mapel); ?> (KKM: <?php echo e($mapel->kkm); ?>)</option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Nilai Tugas (Bobot 30%)</label>
                    <input type="number" step="0.01" name="nilai_tugas" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Nilai UTS (Bobot 30%)</label>
                    <input type="number" step="0.01" name="nilai_uts" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Nilai UAS (Bobot 40%)</label>
                    <input type="number" step="0.01" name="nilai_uas" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan & Hitung Nilai</button>
                <a href="<?php echo e(route('nilai.index')); ?>" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\sisfoxirpl1\resources\views/nilai/create.blade.php ENDPATH**/ ?>