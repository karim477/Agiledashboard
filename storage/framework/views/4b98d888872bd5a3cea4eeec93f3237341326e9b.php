<?php $__env->startSection('content'); ?>
<div class="container">
        <div class="jumbotron text-center" >
            <h1>Welcome to Agile Dash Board</h1>
            <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a><a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>

</div>
        </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>