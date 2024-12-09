
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
<h4 class="page-title">Franchise Enquiry Details</h4>

</div>

</div>
</div>
<!-- end row -->

        <div class="row">
            <div class="col-12">
               <div class="card">
                            <div class="card-body">
                              <?php if(\Session::has('success2')): ?>
                            <div class="alert alert-danger">

                                <?php echo \Session::get('success2'); ?>


                            </div>
                            <?php endif; ?>

                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                   <thead>
                            <tr style="text-align:center">
                                <th>S.No</th>
                                <th>Type</th>
                                <th>Name</th>
                                <th>Email</th>
                                <!-- <th>Mobile No</th> -->
                                
                                
                                <th>View</th>
                                <th>Delete</th>
                                
                            </tr>
                            </thead>


                            <tbody>
                                    <?php
                                    $info = DB::table('tbl_franchiseenquiry')->Orderby('enquiry_id', 'desc')->get();

                                    foreach ($info as $val) {
                                       $reg = $val->enquiry_id ;
                                    }
                                    
                                ?>
                                 <?php $i = 1; ?>
                                   <?php $__currentLoopData = $info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  
                           <tr style="text-align:center">
                            
                           <td><?php echo e($i); ?></td> 
                               <td><?php echo e($row->type); ?></td>  
                               <td><?php echo e($row->name); ?></td> 
                               <td><?php echo e($row->email); ?></td> 
                               <!-- <td><?php echo e($row->mobile); ?></td>--> 

                               <!-- <td><a href="<?php echo e($row->documents); ?>" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></td> -->

                               <td><a href="#" class="btn btn-success" data-toggle="modal" data-target="#bs-example-modal-lg2<?php echo e($row->enquiry_id); ?>" ><i class="fa fa-eye" aria-hidden="true"></i></a></td>  
                         

                            <?php if(!empty($reg)) {?>
                                <div class="modal fade bs-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="bs-example-modal-lg2<?php echo e($row->enquiry_id); ?>">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0" id="myLargeModalLabel">View Details</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                            <div class="row">
                                                    <div class="col-md-6 form-group">
                                                            <label>Franchise Type</label>
                                                        <input type="text" class="form-control" required placeholder="Enter Franchise Type" name="type" value="<?php echo e($row->type); ?>" readonly/>
                                                        </div>
                                                        <div class="col-md-6 form-group">
                                                                <label>Name</label>
                                                                <input type="text" class="form-control" required placeholder="Enter Name" name="type" value="<?php echo e($row->name); ?>" readonly/>
                                                                </div>
                                                            </div>
                                                              <div class="row">
                                                    <div class="col-md-6 form-group">
                                                            <label>Email</label>
                                                        <input type="text" class="form-control" required placeholder="Enter Email" name="type" value="<?php echo e($row->email); ?>" readonly/>
                                                        </div>
                                                        <div class="col-md-6 form-group">
                                                                <label>Mobile No</label>
                                                                <input type="text" class="form-control" required placeholder="Enter Mobile No" name="type" value="<?php echo e($row->mobile); ?>" readonly/>
                                                                </div>
                                                            </div>
                                                     
                                            <div class="row">
                                                              <div class="col-md-6 form-group">
                                                                <label>Address</label>
                                                                <input type="text" class="form-control" required placeholder="Enter Address" name="type" value="<?php echo e($row->address); ?>" readonly/>
                                                                </div>

                                                              <div class="col-md-6 form-group">
                                                                <label>Enter Location</label>
                                                                <input type="text" class="form-control" required placeholder="Enter Location" name="type" value="<?php echo e($row->location); ?>" readonly/>
                                                                </div>
                                                            </div>


                                                            
                                        </form>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                                        
                                    </div>
                            <?php } ?>
                           
                            </td>
                               

                            <!-- <td><button type="submit" class="btn btn-danger" onclick="window.location.href='delete_franchise&<?php echo e($row->enquiry_id); ?>'">Delete</button></td> -->
                            <td><button type="submit" class="btn btn-danger" onclick="window.location.href='delete_franchise&<?php echo e($row->enquiry_id); ?>'">Delete</button></td>
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

        
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binarycl/xpsbatterystore.com/resources/views/back_end/franchise_enquiry.blade.php ENDPATH**/ ?>