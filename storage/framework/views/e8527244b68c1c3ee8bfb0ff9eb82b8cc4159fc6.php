
<?php $__env->startSection('content'); ?>
<div class="content-page">  
        <div class="content">
            <div class="container-fluid">
<!--                <div class="page-title-box">
<div class="row align-items-center">
     <div class="col-sm-6">
<h4 class="page-title"> Product Details</h4>

</div>                          
      
</div>
</div> -->
       <div class="page-title-box">
<div class="row align-items-center">
<div class="col-sm-6">
<h4 class="page-title">Manage Vehicle Model</h4>

</div>
<div class="col-sm-6">
    <div class="float-right d-none d-md-block">

            <div class="button-items">
                    <button type="button" class="btn btn-primary waves-effect waves-light" onclick="window.location.href='<?php echo e(url('add_vehicle_model')); ?>'">Add Model</button>
                   <!--  <button type="button" class="btn btn-secondary waves-effect" onclick="window.location.href='<?php echo e(url('editImage')); ?>'" >Edit</button> -->
             
        </div>
         
     </div>
     
</div>

</div>
</div>
<!-- end row -->

        <div class="row">
            <div class="col-12">
               <div class="card">
                            <div class="card-body">
                              <?php if(\Session::has('success')): ?>
                            <div class="alert alert-success">

                                <?php echo \Session::get('success'); ?>


                            </div>
                            <?php endif; ?>

                             <?php if(\Session::has('success2')): ?>
                            <div class="alert alert-danger">

                                <?php echo \Session::get('success2'); ?>


                            </div>
                            <?php endif; ?>

                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr style="text-align:center">
                                        <th>S.No</th>
                                        <th>Category Name</th>
                                        <th>Brand Name</th>
                                        <!-- <th>Description</th>  -->                                      
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                      
                                    </tr>
                                    </thead>


                                    <tbody>
                                            <?php
                                            
                                            $result = DB::table('tbl_vehiclemodel')
                                            ->join('tbl_vehiclebrand', 'tbl_vehiclebrand.v_id', '=', 'tbl_vehiclemodel.v_id')                                            
                                            ->get();
 
                                        ?>
                                         <?php $i = 1; ?>      
                                         <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   <tr style="text-align:center">  
                                       <td><?php echo e($i); ?></td>
                                       <td><?php echo e($row_product->brand_name); ?></td>
                                       <td><?php echo e($row_product->model_name); ?></td>
                                       <td>
                                        <?php if($row_product->m_status == 'Active'){?>
                                                <span class="badge badge-pill badge-success">Active</span>
                                                  <!-- <a onclick="#" href="#" class="btn btn-success">Active</a> -->
                                                <?php }else{ ?>
                                                  <span class="badge badge-pill badge-danger">Inactive</span>
                                                <!-- <a onclick="#" href="#" class="btn btn-danger">Inactive</a> -->
                                                <?php } ?></td>

                            
                                       <td><button type="submit" class="btn btn-warning" onclick="window.location.href='edit_vehicle_model?m_id=<?php echo e($row_product->m_id); ?>'">Edit</button></td>
                                       <td><button type="submit" class="btn btn-danger" onclick="window.location.href='delete_vehiclemodel&<?php echo e($row_product->m_id); ?>'">Delete</button></td>
                                       <?php $i++; ?>
                                   </tr>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
</div> 
</div> 
    
<?php $__env->stopSection(); ?>

        
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binarycl/xpsbatterystore.com/resources/views/back_end/vehicle_model.blade.php ENDPATH**/ ?>