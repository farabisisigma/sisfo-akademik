<?php $__env->startSection('title', 'Detail Data Siswa'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
       <h1 class="h3 mb-4 text-gray-800">Detail Profil Siswa</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <table class="table table-borderless">
                <tr>
                    <th width="200">NIS</th>
                    <td>: <?php echo e($siswa->nis); ?></td>
                </tr>
                <tr>
                    <th>Nama Lengkap</th>
                    <td>: <?php echo e($siswa->nama); ?></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>: <?php echo e($siswa->jenis_kelamin == 'L' ? 'Laki-Laki' : 'Perempuan'); ?></td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <td>: <?php echo e($siswa->kelas->nama_kelas ?? '-'); ?> (<?php echo e($siswa->kelas->jurusan ?? '-'); ?>)</td>
                </tr>
                <tr>
                    <th>No HP</th>
                    <td>: <?php echo e($siswa->no_hp); ?></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>: <?php echo e($siswa->alamat); ?></td>
                </tr>
            </table>
            <a href="<?php echo e(route('siswa.index')); ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\sisfoxirpl1\resources\views/siswa/show.blade.php ENDPATH**/ ?>