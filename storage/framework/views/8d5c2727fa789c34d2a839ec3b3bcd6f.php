<div>
    <div class="profile-tab height-100-p">
        <div class="tab height-100-p">
            <ul class="nav nav-tabs customtab" role="tablist">
                <li class="nav-item">
                    <a wire:click.prevent='selectTab("personal_details")' class="nav-link <?php echo e($tab=='personal_details' ? 'active' : ''); ?>" data-toggle="tab" href="#personal_details" role="tab">Personal details</a>
                </li>
                <li class="nav-item">
                    <a wire:click.prevent='selectTab("update_password")' class="nav-link <?php echo e($tab=='update_password' ? 'active' : ''); ?>" data-toggle="tab" href="#update_password" role="tab">Updata password</a>
                </li>
            </ul>
            <div class="tab-content">
                <!-- Timeline Tab start -->
                <div class="tab-pane fade <?php echo e($tab=='personal_details' ? 'show active' : ''); ?>" id="personal_details" role="tabpanel">
                    <div class="pd-20">
                        <form wire:submit.prevent='updateAdminPersonalDetails()'>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" class="form-control" wire:model='name' placeholder="Fullname">
                                        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text" class="form-control" wire:model='email' placeholder="Email">
                                        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Username</label>
                                        <input type="text" class="form-control" wire:model='username' placeholder="Username">
                                        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Save changed</button>
                        </form>
                    </div>
                </div>
                <!-- Timeline Tab End -->
                <!-- Tasks Tab start -->
                <div class="tab-pane fade <?php echo e($tab=='update_password' ? 'show active' : ''); ?>" id="update_password" role="tabpanel">
                    <div class="pd-20 profile-task-wrap">
                        <form wire:submit.prevent="updatePassword()">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Current password</label>
                                        <input type="password" class="form-control" placeholder="Enter current password" wire:model.defer="current_password">
                                        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['current_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">New password</label>
                                        <input type="password" class="form-control" placeholder="Enter new password" wire:model.defer="new_password">
                                        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Confirm new password</label>
                                        <input type="password" class="form-control" placeholder="Re-type new password" wire:model.defer="new_password_confirmation">
                                        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['new_password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Update password</button>
                        </form>
                    </div>
                </div>
                <!-- Tasks Tab End -->
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\admin-manage-sys\resources\views/livewire/admin-profile-tabs.blade.php ENDPATH**/ ?>