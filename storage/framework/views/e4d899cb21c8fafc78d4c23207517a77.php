
<?php $__env->startSection('pageTitle', isset($pageTitle) ? $pageTitle : 'Home Admin'); ?>
<?php $__env->startSection('content'); ?>
<div class="page-header">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="title">
                <h4>Settings</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?php echo e(route('admin.home')); ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Settings
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="pd-20 card-box mb-4">
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('admin-settings');

$__html = app('livewire')->mount($__name, $__params, 'Bc0KRs5', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script>
    //    $('input[type="file"][name="site_logo"][id="site_logo"]').ijaboViewer([
    //     preview: '#site_logo_img_preview',
    //     imageShape:'rectangular',
    //     allowedExtensions:['png', 'jpg'],
    //     onErrorShape: function(message, element) {
    //         alert(message)
    //     },
    //     onInvalidType: function(message, element) {
    //         alert(message)
    //     },
    //     onSuccess: function(message, element) {}
    //    ])

    $('#change_logo_form').on('submit', function(e) {
        e.preventDefault();
        var form =  this;
        var formData =  new FormData(form);
        var inputFVal = $(form).find('input[type="file"][name="site_logo"]').val();

        if(inputFVal.length > 0) {
            $.ajax({
                url:$(form).attr('action'),
                method:$(form).attr('method'),
                data:formData,
                processData:false,
                dataType:'json',
                contentType: false,
                beforeSend:function(){
                    toastr.remove();
                    $(form).find('span.error-text').text('');
                },
                success: function(response) {
                    if(response.sts == 1){
                        toastr.success(response.msg);
                        $(form)[0].reset();
                    }else{
                        toastr.error(response.msg);
                    }
                }
            })
        }else{
            $(form).find('span.error-text').text('Please select logo image file (.jpg, .png)');
        }
    })

    $('#change_favicon_form').on('submit', function(e) {
        e.preventDefault();
        var form =  this;
        var formData =  new FormData(form);
        var inputFVal = $(form).find('input[type="file"][name="site_favicon"]').val();

        if(inputFVal.length > 0) {
            $.ajax({
                url:$(form).attr('action'),
                method:$(form).attr('method'),
                data:formData,
                processData:false,
                dataType:'json',
                contentType: false,
                beforeSend:function(){
                    toastr.remove();
                    $(form).find('span.error-text').text('');
                },
                success: function(response) {
                    if(response.sts == 1){
                        toastr.success(response.msg);
                        $(form)[0].reset();
                    }else{
                        toastr.error(response.msg);
                    }
                }
            })
        }else{
            $(form).find('span.error-text').text('Please select logo image file (.jpg, .png)');
        }
    })
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('back.layout.pages-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mini-game\resources\views/back/pages/settings.blade.php ENDPATH**/ ?>