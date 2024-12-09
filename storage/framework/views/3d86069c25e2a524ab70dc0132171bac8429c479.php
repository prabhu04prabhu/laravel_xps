
<?php $__env->startSection('content'); ?>
<div class="content-page">  
        <div class="content">
            <div class="container-fluid">
               <div class="page-title-box">
<div class="row align-items-center">
     <div class="col-sm-6">
<h4 class="page-title">Career Details</h4>

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
                                <th>Resume</th>
                                
                                <th>View</th>
                                
                            </tr>
                            </thead>


                            <tbody>
                                    <?php
                                    $info = DB::table('career')->get();

                                    foreach ($info as $val) {
                                       $reg = $val->id;
                                    }
                                    
                                ?>
                                 <?php $i = 1; ?>
                                   <?php $__currentLoopData = $info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  
                           <tr style="text-align:center">
                            
                           <td><?php echo e($i); ?></td> 
                               <td><?php echo e($row->first_name); ?></td>  
                               <td><?php echo e($row->email); ?></td> 
                               <td><?php echo e($row->phone); ?></td>  
                               <td><a href="<?php echo e($row->career_doc); ?>" target="_blank"><i class="fa fa-file-pdf-o"  aria-hidden="true"></i></a></td> 
                              
                               <td><a href="#" class="btn btn-success" data-toggle="modal" data-target="#bs-example-modal-lg2<?php echo e($row->id); ?>" ><i class="fa fa-eye" aria-hidden="true"></i></a></td>  
                         

                            <?php if(!empty($reg)) {?>
                                <div class="modal fade bs-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="bs-example-modal-lg2<?php echo e($row->id); ?>">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0" id="myLargeModalLabel">Career Details</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                            <div class="row">
                                                    <div class="col-md-6 form-group">
                                                            <label>First Name</label>
                                                        <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="<?php echo e($row->first_name); ?>" readonly/>
                                                        </div>
                                                        <div class="col-md-6 form-group">
                                                                <label>Last Name</label>
                                                                <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="<?php echo e($row->last_name); ?>" readonly/>
                                                                </div>
                                                            </div>
                                                              <div class="row">
                                                    <div class="col-md-6 form-group">
                                                            <label>Mobile No</label>
                                                        <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="<?php echo e($row->phone); ?>" readonly/>
                                                        </div>
                                                        <div class="col-md-6 form-group">
                                                                <label>Email</label>
                                                                <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="<?php echo e($row->email); ?>" readonly/>
                                                                </div>
                                                            </div>
                                                     
                                            <div class="row">
                                                              <div class="col-md-6 form-group">
                                                                <label>State</label>
                                                                <input type="text" class="form-control" required placeholder="" name="type" value="<?php echo e($row->state); ?>" readonly/>
                                                                </div>

                                                              <div class="col-md-6 form-group">
                                                                <label>Key Function Area</label>
                                                                <input type="text" class="form-control" required placeholder="" name="type" value="<?php echo e($row->key_function); ?>" readonly/>
                                                                </div>
                                                            </div>

                                                    <div class="row">
                                                                 <div class="col-md-6 form-group">
                                                                <label>Address</label>
                                                                <input type="text" class="form-control" required placeholder="" name="type" value="<?php echo e($row->address); ?>" readonly/>
                                                                </div>

                                                              <div class="col-md-6 form-group">
                                                                <label>Comments</label>
                                                                <input type="text" class="form-control" required placeholder="" name="type" value="<?php echo e($row->comments); ?>" readonly/>
                                                                </div> 
                                                            </div>

                                                            
                                        </form>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                                        
                                    </div>
                            <?php } ?>
                           
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

        
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binarycl/xpsbatterystore.com/resources/views/back_end/career_details.blade.php ENDPATH**/ ?>