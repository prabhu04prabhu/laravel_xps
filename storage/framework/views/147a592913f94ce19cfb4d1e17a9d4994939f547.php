<?php $__env->startSection('content'); ?>
         <div class="content-page">  
            <div class="content">
                <div class="container-fluid">
                   <div class="page-title-box">
    <div class="row align-items-center">
         <div class="col-sm-6">
     <h4 class="page-title">Dashboard</h4>
    <!--  <ol class="breadcrumb">
         <li class="breadcrumb-item active">Welcome to Muyal Mark</li>
     </ol> -->
     <br/>
</div>
            
    </div>
</div>
<!-- end row -->
<?php
    
     $career = DB::table('career')->where('email', '!=', null)->count();
    $testimonial = DB::table('testimonial')->where('type', '=', 'customer')->count();
    $total_orders = DB::table('ordertrans')->count();
    $pending_orders = DB::table('ordertrans')->where('Status', '=', 'Pending')->count();

?>

                        <div class="row">
                             <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-success text-white">
                                    <div class="card-body">
                                        <a href="admin-total-orders">
                                            <div class="mb-4">
                                            <div class="float-left mini-stat-img mr-4">
                                                <img src="assets/images/services-icon/02.png" alt="" >
                                            </div>
                                            <h5 class="font-16 text-uppercase mt-0 text-white-50">Total Orders &nbsp;</h5>
                                        <h4 class="font-500"  style="color:#fff;"><?php echo e($total_orders); ?></h4>  
                                        </div></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-danger text-white">
                                    <div class="card-body">
                                       <a href="admin-orders"> 
                                        <div class="mb-4">
                                            <div class="float-left mini-stat-img mr-4">
                                                <img src="assets/images/services-icon/01.png" alt="" >
                                            </div>
                                             <h5 class="font-16 text-uppercase mt-0 text-white-50">Pending Orders</h5>
                                        <h4 class="font-500"  style="color:#fff;"><?php echo e($pending_orders); ?></h4>
                                           
                                        </div></a>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-secondary text-white">
                                    <div class="card-body">
                                        <a href="view_testimonial">
                                            <div class="mb-4">
                                            <div class="float-left mini-stat-img mr-4">
                                                <img src="assets/images/services-icon/03.png" alt="" >
                                            </div>
                                            <h5 class="font-16 text-uppercase mt-0 text-white-50">Testimonial <br/>&nbsp;</h5>
                                        <h4 class="font-500"  style="color:#fff;"><?php echo e($testimonial); ?></h4>
                                          
                                        </div></a>
                                   
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-info text-white">
                                    <div class="card-body">
                                        <a href="career_details">
                                            <div class="mb-4">
                                            <div class="float-left mini-stat-img mr-4">
                                                <img src="assets/images/services-icon/02.png" alt="" >
                                            </div>
                                             <h5 class="font-16 text-uppercase mt-0 text-white-50">Career <br/>&nbsp;</h5>
                                        <h4 class="font-500"  style="color:#fff;"><?php echo e($career); ?></h4>
                                            
                                           
                                        </div></a>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        <!-- end row -->
                </div> 
            </div> 
        </div> 
       
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binarycl/xpsbatterystore.com/resources/views/back_end/home.blade.php ENDPATH**/ ?>