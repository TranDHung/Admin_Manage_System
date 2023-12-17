
<?php $__env->startSection('pageTitle', isset($pageTitle) ? $pageTitle : 'This is page title'); ?>
<?php $__env->startSection('content'); ?>
<div class="login-box bg-white box-shadow border-radius-10">
    <div class="login-title">
        <h2 class="text-center text-primary">Reset Password</h2>
    </div>
    <h6 class="mb-20">Enter your new password, confirm and submit</h6>
    <form action=" <?php echo e(route('admin.reset-password-handler', ['token'=>request()->token])); ?> " method="POST">
        <?php echo csrf_field(); ?>
        <?php if( Session::get('fail')): ?>
            <div class="alert alert-danger">
                <?php echo e(Session::get('fail')); ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times</span>
                </button>
            </div>
        <?php endif; ?>
        <?php if( Session::get('success')): ?>
            <div class="alert alert-success">
                <?php echo e(Session::get('success')); ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times</span>
                </button>
            </div>
        <?php endif; ?>
        <div class="input-group custom">
            <input
                type="text"
                class="form-control form-control-lg"
                placeholder="New Password"
                name="new_password"
                value="<?php echo e(old('new_password')); ?>"
            />
            <div class="input-group-append custom">
                <span class="input-group-text"
                    ><i class="dw dw-padlock1"></i
                ></span>
            </div>
        </div>
        <?php $__errorArgs = ['new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="d-block text-danger" style="margin-top:-20px; margin-bottom:15px">
                <?php echo e($message); ?>

            </div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <div class="input-group custom">
            <input
                type="text"
                class="form-control form-control-lg"
                placeholder="Confirm New Password"
                name="new_password_confirmation"
                value="<?php echo e(old('new_password_confirmation')); ?>"
            />
            <div class="input-group-append custom">
                <span class="input-group-text"
                    ><i class="dw dw-padlock1"></i
                ></span>
            </div>
        </div>
        <?php $__errorArgs = ['new_password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="d-block text-danger" style="margin-top:-20px; margin-bottom:15px">
                <?php echo e($message); ?>

            </div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <div class="row align-items-center">
            <div class="col-5">
                <div class="input-group mb-0">
                    <input class="btn btn-primary btn-lg btn-block" type="submit" value="Submit">
                    
                </div>
            </div>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back.layout.auth-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mini-game\resources\views/back/pages/admin/auth/reset-password.blade.php ENDPATH**/ ?>