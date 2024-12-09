
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
<h4 class="page-title">Enquiry Details</h4>

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

                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                   <thead>
                            <tr style="text-align:center">
                                <th>S.No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile No</th>
                                <th>Message</th>
                                <th>Created Date</th>
                                <th>Delete</th>
                            </tr>
                            </thead>


                            <tbody>
                                    <?php
                                    $info = DB::table('send_enquiry')->orderby('id', 'desc')->get();

                                    foreach ($info as $val) {
                                       $reg = $val->id;
                                    }
                                    
                                ?>
                                 <?php $i = 1; ?>
                                   <?php $__currentLoopData = $info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  
                           <tr style="text-align:center">
                            
                           <td><?php echo e($i); ?></td> 
                               <td><?php echo e($row->name); ?></td>  
                               <td><?php echo e($row->email); ?></td> 
                               <td><?php echo e($row->mobile); ?></td> 
                               <td><?php echo e($row->message); ?></td> 
                               <td><?php echo e($row->created_date); ?></td> 
                               
                            <td><button type="submit" class="btn btn-danger" onclick="window.location.href='delete_enquiry&<?php echo e($row->id); ?>'">Delete</button></td>
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

        
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binarycl/xpsbatterystore.com/resources/views/back_end/send_enquiry.blade.php ENDPATH**/ ?>