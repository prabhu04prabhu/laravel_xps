
<?php $__env->startSection('content'); ?>
<?php $page="sett"; ?>
    <div class="content-page">  
        <div class="content">
            <div class="container-fluid">
               <div class="page-title-box">
<div class="row align-items-center">
     <div class="col-sm-6">
<h4 class="page-title">SMTP Settings</h4>

</div>
      
</div>
</div>
<!-- end row -->
             
<div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    
                                        <?php if(\Session::has('success')): ?>
                                        <div class="alert alert-success">
            
                                            <?php echo \Session::get('success'); ?>

            
                                        </div>
                                        <?php endif; ?>
                                <form class="" action="<?php echo e('smtp'); ?>" method="POST">
                                    <?php echo csrf_field(); ?>

                                    <?php
                                        $smtp = DB::table('smtp')->get();
                                        $host = '';
                                            $user_name = '';
                                            $password = '';
                                            $smtp_secure ='';
                                            $port = '';
                                            $smtp_id = '';
                                            $receiver_address = '';
                                        foreach($smtp as $row){
                                            $host = $row->host;
                                            $user_name = $row->user_name;
                                            $password = $row->password;
                                            $smtp_secure = $row->smtp_secure;
                                            $port = $row->port;
                                            $smtp_id = $row->smtp_id;
                                            $receiver_mail = $row->receiver_address;
                                        }

                                
                                    ?>
                                        <div class="form-group">
                                            <label>Host</label>
                                        <input type="text" class="form-control" required placeholder="Enter Host Name" name="host" value="<?php echo e($host); ?>"/>
                                        </div>

                                        <div class="form-group">
                                            <label>User Name</label>
                                            <input type="email" class="form-control" required
                                        parsley-type="email" placeholder="Enter a valid e-mail" name="user_name" value="<?php echo e($user_name); ?>"/>
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                        <input type="password" class="form-control" required placeholder="Enter Password" name="password" value="<?php echo e($password); ?>" <?php if(!empty($password)): ?>
                                            readonly
                                        <?php endif; ?>/>
                                        </div>

                                        <div class="form-group">
                                            <label>SMTP Secure</label>
                                        <input type="text" class="form-control" required placeholder="Enter SMTP Secure" name="smtp_secure" value="<?php echo e($smtp_secure); ?>"/>
                                        </div>

                                        <div class="form-group">
                                            <label>Port</label>
                                        <input type="text" class="form-control" required placeholder="Enter Port Number" name="port" value="<?php echo e($port); ?>"/>
                                        </div>

                                        <div class="form-group">
                                                <label>Receiving  Mail Id</label>
                                            <input type="text" class="form-control" required placeholder="Enter Port Number" name="receiver_address" value="<?php echo e($receiver_mail); ?>"/>
                                            </div>
    
                                       
                                       
                                        <div class="form-group">
                                            <div>
                                               
                                                
                                            </form>
                                                <a href="#" class="btn btn-success" data-toggle="modal" data-target="#bs-example-modal-lg<?php echo e($smtp_id); ?>" <?php if(empty($smtp_id)): ?>
                                                    disabled
                                                <?php endif; ?>>Edit</a>
                                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="bs-example-modal-lg<?php echo e($smtp_id); ?>">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title mt-0" id="myLargeModalLabel">Edit Information</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">

                                                    <form action="<?php echo e('smtp_edit'); ?>" method="post">
                                                        <?php echo csrf_field(); ?>
                                                            <div class="form-group">
                                                                    <label>Host</label>
                                                                <input type="text" class="form-control" required placeholder="Enter Host Name" name="host" value="<?php echo e($host); ?>" readonly/>
                                                                </div>
                        
                                                                <div class="form-group">
                                                                    <label>User Name</label>
                                                                    <input type="email" class="form-control" required
                                                                parsley-type="email" placeholder="Enter a valid e-mail" name="user_name" value="<?php echo e($user_name); ?>" readonly/>
                                                                </div>
                        
                                                                <div class="form-group">
                                                                    <label>Password</label>
                                                                <input type="text" class="form-control" required placeholder="Enter Password" name="password" value="<?php echo e($password); ?>" readonly>
                                                                </div>
                        
                                                                <div class="form-group">
                                                                    <label>SMTP Secure</label>
                                                                <input type="text" class="form-control" required placeholder="Enter SMTP Secure" name="smtp_secure" value="<?php echo e($smtp_secure); ?>" readonly/>
                                                                </div>
                        
                                                                <div class="form-group">
                                                                    <label>Port</label>
                                                                <input type="text" class="form-control" required placeholder="Enter Port Number" name="port" value="<?php echo e($port); ?>" readonly/>
                                                                </div>

                                                                <div class="form-group">
                                                                        <label>Receiving  Mail Id</label>
                                                                    <input type="text" class="form-control" required placeholder="Enter Receiving  Mail Id" name="receiver_address" value="<?php echo e($receiver_mail); ?>"/>
                                                                    </div>

                                                            <input type="hidden" name="hiiden_id" value="<?php echo e($smtp_id); ?>">
                                                                <div class="form-group">
                                                                        <div>
                                                                            <button type="submit" class="btn btn-success waves-effect waves-light">
                                                                                Update
                                                                            </button>
                                                                        </div>
                                                    </div>

                                                </form>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
                                                
                                            </div>
                                        </div>
                                  
    
                                </div>
                            </div>
                        </div> <!-- end col -->
    
                        
                    </div> <!-- end row -->              
            </div> 
        </div> 
    </div> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binarycl/xpsbatterystore.com/resources/views/back_end/settings.blade.php ENDPATH**/ ?>