<p>Dear <?php echo e($admin->name); ?></p>
<p>
    Your pass was changed successfully
    Your login Credentials: <br>
    <b>Login ID: </b><?php echo e($admin->username); ?> or <?php echo e($admin->email); ?> <br>
    <b>Password: </b><?php echo e($new_password); ?>

</p>

<b>Please, keep secret</b> <br>
Do not reply this mail!!<?php /**PATH C:\xampp\htdocs\mini-game\resources\views/email-templates/admin-reset-email-template.blade.php ENDPATH**/ ?>