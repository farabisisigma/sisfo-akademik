<?php $__env->startSection('title', 'Login SISFO'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center align-items-center" style="min-height: 100vh;">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div
                                class="col-lg-6 d-none d-lg-flex align-items-center justify-content-center bg-light p-5 border-right">
                                <div class="text-center">
                                    <img src="<?php echo e(asset('img/undraw_rocket.svg')); ?>" class="img-fluid mb-4"
                                        style="max-height: 260px;" alt="Login Illustration">
                                    <h5 class="font-weight-bold text-primary">SISFO AKADEMIK</h5>
                                    <p class="text-muted small mb-0">Sistem Informasi Akademik Sekolah Terpadu &amp;
                                        Terintegrasi.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center mb-4">
                                        <h1 class="h4 text-gray-900 font-weight-bold">Selamat Datang Kembali!</h1>
                                        <p class="text-muted small">Masuk ke Sistem Informasi Akademik</p>
                                    </div>

                                    <?php if(session('status')): ?>
                                        <div class="alert alert-success alert-dismissible fade show small" role="alert">
                                            <?php echo e(session('status')); ?>

                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    <?php endif; ?>

                                    <form class="user" method="POST" action="<?php echo e(route('login')); ?>">
                                        <?php echo csrf_field(); ?>

                                        <div class="form-group">
                                            <input type="email"
                                                class="form-control form-control-user <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                id="email" name="email" value="<?php echo e(old('email', 'admin@admin.com')); ?>"
                                                required autocomplete="email" autofocus
                                                placeholder="Alamat Email (admin@admin.com)">
                                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback ml-3" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>

                                        <div class="form-group">
                                            <input type="password"
                                                class="form-control form-control-user <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                id="password" name="password" required autocomplete="current-password"
                                                placeholder="Kata Sandi">
                                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback ml-3" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>

                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck"
                                                    name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                                <label class="custom-control-label" for="customCheck">Ingat Saya</label>
                                            </div>
                                        </div>

                                        <button type="submit"
                                            class="btn btn-primary btn-user btn-block font-weight-bold shadow-sm">
                                            <i class="fas fa-sign-in-alt mr-2"></i> Masuk Sekarang
                                        </button>
                                    </form>

                                    <hr>

                                    

                                    <?php if(Route::has('password.request')): ?>
                                        <div class="text-center">
                                            <a class="small" href="<?php echo e(route('password.request')); ?>">Lupa Kata Sandi?</a>
                                        </div>
                                    <?php endif; ?>

                                    <?php if(Route::has('register')): ?>
                                        <div class="text-center mt-2">
                                            <a class="small font-weight-bold" href="<?php echo e(route('register')); ?>">Belum punya
                                                akun? Daftar Akun Baru!</a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\sisfoxirpl1\resources\views/auth/login.blade.php ENDPATH**/ ?>