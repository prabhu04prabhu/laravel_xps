
<?php $__env->startSection('content'); ?>

<div class="content-page">  
        <div class="content">
            <div class="container-fluid">
               <div class="page-title-box">
<div class="row align-items-center">
     <div class="col-sm-6">
 <h4 class="page-title">Change Password</h4>
</div>
   
</div>
</div>
<!-- end row -->
         <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                    <div class="card-body">
                                    <?php if(session('error')): ?>
                                        <div class="alert alert-danger">
                                            <?php echo e(session('error')); ?>

                                        </div>
                                    <?php endif; ?>
                                    <?php if(session('success')): ?>
                                        <div class="alert alert-success">
                                            <?php echo e(session('success')); ?>

                                        </div>
                                    <?php endif; ?>
                                    <form class="form-horizontal" method="POST" action="<?php echo e(route('changePassword')); ?>">
                                        <?php echo e(csrf_field()); ?>

            
                                        <div class="form-group<?php echo e($errors->has('current-password') ? ' has-error' : ''); ?>">
                                            <label for="new-password" class="col-md-4 control-label">Current Password</label>
            
                                            <div class="col-md-6">
                                                <input id="current-password" type="password" class="form-control" name="current-password" required>
            
                                                <?php if($errors->has('current-password')): ?>
                                                    <span class="help-block">
                                                    <strong><?php echo e($errors->first('current-password')); ?></strong>
                                                </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
            
                                        <div class="form-group<?php echo e($errors->has('new-password') ? ' has-error' : ''); ?>">
                                            <label for="new-password" class="col-md-4 control-label">New Password</label>
            
                                            <div class="col-md-6">
                                                <input id="new-password" type="password" class="form-control" name="new-password" required>
            
                                                <?php if($errors->has('new-password')): ?>
                                                    <span class="help-block">
                                                    <strong><?php echo e($errors->first('new-password')); ?></strong>
                                                </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
            
                                        <div class="form-group">
                                            <label for="new-password-confirm" class="col-md-4 control-label">Confirm New Password</label>
            
                                            <div class="col-md-6">
                                                <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                                            </div>
                                        </div>
            
                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-4">
                                                <button type="submit" class="btn btn-primary">
                                                    Change Password
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
    
                        
                    </div>
            </div> 
        </div> 
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binarycl/xpsbatterystore.com/resources/views/auth/changepassword.blade.php ENDPATH**/ ?>