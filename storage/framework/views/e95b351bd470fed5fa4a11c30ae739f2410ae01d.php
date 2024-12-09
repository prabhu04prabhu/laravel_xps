
<?php $__env->startSection('content'); ?>
<div class="content-page">  
        <div class="content">
            <div class="container-fluid">
               <div class="page-title-box">
<div class="row align-items-center">
     <div class="col-sm-6">
<h4 class="page-title"> Contact Enquiry</h4>

</div>                          
      
</div>
</div>
<!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                            <?php if(\Session::has('success2')): ?>
                            <div class="alert alert-success">

                                <?php echo \Session::get('success2'); ?>


                            </div>
                            <?php endif; ?>
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                            <thead>
                            <tr style="text-align:center">
                                <th>S.No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile No</th>
                                <th>Subject</th>
                                <th>Message</th>
                                
                            </tr>
                            </thead>


                            <tbody>
                                    <?php
                                    $info = DB::table('contact_enquiry')->get();

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
                               <td><?php echo e($row->phone_no); ?></td>  
                               <td><?php echo e($row->subject); ?></td>
                               <!-- <td><?php echo e($row->message); ?></td> -->
                               <td><textarea name="" id="" cols="30" rows="3" style="border: none" readonly><?php echo e($row->message); ?></textarea></td> 
                           
                            </td>
                               
                           </tr>
                           <?php $i++; ?>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>

                            
                        </table>

                       
                    </div>

                    
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->      
</div> 
</div> 
</div> 
    
<?php $__env->stopSection(); ?>

        
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binarycl/xpsbatterystore.com/resources/views/back_end/contact_enquiry.blade.php ENDPATH**/ ?>