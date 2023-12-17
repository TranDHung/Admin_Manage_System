<div>
    <div class="tab">
        <ul class="nav nav-tabs customtab" role="tablist">
            <li class="nav-item">
                <a wire:click.prevent='selectTab("general_settings")' class="nav-link <?php echo e($tab=='general_settings'?'active':''); ?>" data-toggle="tab" href="#general_settings" role="tab" aria-selected="true">General settings</a>
            </li>
            <li class="nav-item">
                <a wire:click.prevent='selectTab("logo_icon")' class="nav-link <?php echo e($tab=='logo_icon'?'active':''); ?>" data-toggle="tab" href="#logo_icon" role="tab" aria-selected="false">Logo & Icon</a>
            </li>
            <li class="nav-item">
                <a wire:click.prevent='selectTab("social_networks")' class="nav-link <?php echo e($tab=='social_networks'?'active':''); ?>" data-toggle="tab" href="#social_networks" role="tab" aria-selected="false">Social networks</a>
            </li>
            <li class="nav-item">
                <a wire:click.prevent='selectTab("payment_methods")' class="nav-link <?php echo e($tab=='payment_methods'?'active':''); ?>" data-toggle="tab" href="#payment_methods" role="tab" aria-selected="false">Payment methods</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade <?php echo e($tab=='general_settings'?'show active':''); ?>" id="general_settings" role="tabpanel">
                <div class="pd-20">
                    <form wire:submit.prevent='updateGeneralSettings()'>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Site name</label>
                                    <input type="text" class="form-control" placeholder="Enter site name" wire:model.defer='site_name'>
                                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['site_name'];
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Site email</label>
                                    <input type="text" class="form-control" placeholder="Enter site enail" wire:model.defer='site_email'>
                                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['site_email'];
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
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Site phone</label>
                                    <input type="text" class="form-control" placeholder="Enter site phone" wire:model.defer='site_phone'>
                                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['site_phone'];
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Site meta keywords</label>
                                    <input type="text" class="form-control" placeholder="Enter site metea keywords" wire:model.defer='site_meta_keywords'>
                                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['site_meta_keywords'];
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
                        <div class="form-group">
                            <label for="">Site description</label>
                            <textarea cols="4" rows="4" placeholder="Enter site description" class="form-control" wire:model.defer='site_description'></textarea>
                            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['site_description'];
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
                        <button type="submit" class="btn btn-primary">Save changed</button>
                    </form>
                </div>
            </div>
            <div class="tab-pane fade <?php echo e($tab=='logo_icon'?'show active':''); ?>" id="logo_icon" role="tabpanel">
                <div class="pd-20">
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Site LOGO</h6>
                            <div class="mb-2" style="max-height: 60px; max-width: 200px;">
                                <img src="/images/site/<?php echo e(get_settings()->site_logo); ?>" class="img-thumbnail" id="site_logo_img_preview" style="object-fit: contain;">
                            </div>
                            <form action="<?php echo e(route('admin.change-logo')); ?>" method="POST" enctype="multipart/form-data" id="change_logo_form">
                                <?php echo csrf_field(); ?>
                                <div class="mb-2">
                                    <input type="file" name="site_logo" id="site_logo" class="form-control"
                                    onchange="document.getElementById('site_logo_img_preview').src = window.URL.createObjectURL(this.files[0])"
                                    >
                                    <span class="text-danger error-text site_logo_error"></span>
                                </div>
                                <button type="submit" class="btn btn-primary">Save changed</button>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <h6>Site favicon</h6>
                            <div class="mb-2" style="max-height: 60px; max-width: 60px;">
                                <img src="/images/site/<?php echo e(get_settings()->site_favicon); ?>" class="img-thumbnail" id="site_fav_img_preview" style="object-fit: contain;">
                            </div>
                            <form action="<?php echo e(route('admin.change-favicon')); ?>" method="POST" enctype="multipart/form-data" id="change_favicon_form">
                                <?php echo csrf_field(); ?>
                                <div class="mb-2">
                                    <input type="file" name="site_favicon" id="site_favicon" class="form-control"
                                    onchange="document.getElementById('site_fav_img_preview').src = window.URL.createObjectURL(this.files[0])"
                                    >
                                    <span class="text-danger error-text site_favicon_error"></span>
                                </div>
                                <button type="submit" class="btn btn-primary">Save changed</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade <?php echo e($tab=='social_networks'?'show active':''); ?>" id="social_networks" role="tabpanel">
                <div class="pd-20">
                    <form wire:submit.prevent='updateSocialNetwork()'>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Github</label>
                                    <input type="text" class="form-control" wire:model.defer='github_url' placeholder="Github URL">
                                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['github_url'];
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
                                    <label for="">Youtube</label>
                                    <input type="text" class="form-control" wire:model.defer='youtube_url' placeholder="Youtube URL">
                                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['youtube_url'];
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
                                    <label for="">Tiktok</label>
                                    <input type="text" class="form-control" wire:model.defer='tiktok_url' placeholder="Tiktok URL">
                                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['tiktok_url'];
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
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Facebook</label>
                                    <input type="text" class="form-control" wire:model.defer='facebook_url' placeholder="Facebook URL">
                                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['facebook_url'];
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
                                    <label for="">Instagram</label>
                                    <input type="text" class="form-control" wire:model.defer='instagram_url' placeholder="Instagram URL">
                                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['instagram_url'];
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
                                    <label for="">Twitter</label>
                                    <input type="text" class="form-control" wire:model.defer='twitter_url' placeholder="Twitter URL">
                                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['twitter_url'];
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
                        <button type="submit" class="btn btn-primary">Save changed</button>
                    </form>
                </div>
            </div>
            <div class="tab-pane fade <?php echo e($tab=='payment_methods'?'show active':''); ?>" id="payment_methods" role="tabpanel">
                <div class="pd-20">
                    Payment methods
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\mini-game\resources\views/livewire/admin-settings.blade.php ENDPATH**/ ?>