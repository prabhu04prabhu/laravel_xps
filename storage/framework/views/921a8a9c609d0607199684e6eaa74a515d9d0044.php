 <?php $__env->startSection('content'); ?>
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Add Capacity</h4>

                    </div>
                    <div class="col-sm-6">
                            <div class="float-right d-none d-md-block">
                        
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

                            <div class="m-b-30">
                                <form action="<?php echo e(url('new_capacity')); ?>" enctype="multipart/form-data" method="post">
                                    <?php echo csrf_field(); ?>
                                    <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Capacity Name</label>
                                            <input required type="text" class="form-control" name="cname"> 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Status</label>
                                                    <select name="status" class="custom-select">
                                                        <option value="Active">Active</option>
                                                        <option value="Inactive">Inactive</option>
                                                     </select>
                                                </div>     
                                            </div>
                                    
                                </div>
                                <div class="row">
                                <div class="col-md-6">
                                                <div class="form-group">
                                                 
                                                <label for="">Description</label>

                                                <textarea cols="10" rows="4" class="form-control" name="description"></textarea>
                                                      
                                                </div>     
                                            </div>    

                                </div>
                                    <div class="col-md-12" style="text-align:center">
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>


                    <div class="card">
                            <div class="card-body">
                                   
                                <h4 class="mt-0 header-title">Capacity Details</h4>
                                <p class="text-muted m-b-30">
                                </p>

                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr style="text-align:center">
                                        <th>S.No</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                      
                                    </tr>
                                    </thead>


                                    <tbody>
                                            <?php
                                            $result = DB::table('capacitymaster')->where('Status', '!=', '')->get();
 
                                        ?>
                                         <?php $i = 1; ?>      
                                         <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   <tr style="text-align:center">  
                                       <td><?php echo e($i); ?></td>
                                       <td><?php echo e($row->CapacityName); ?></td>
                                       <td><?php echo e($row->Description); ?></td>
                                       <!-- <td><?php echo e($row->Status); ?></td> -->
                                        <td>
                                            <?php if($row->Status == 'Active'){?>
                                                  <span class="badge badge-pill badge-success">Active</span>
                                                  <!-- <a onclick="#" href="#" class="btn btn-success">Yes</a> -->
                                                <?php }else{ ?>
                                                  <span class="badge badge-pill badge-danger">Inctive</span>
                                               <!--  <a onclick="#" href="#" class="btn btn-danger">No</a> -->
                                                <?php } ?>
                                       </td>
                                       <td><button type="submit" class="btn btn-warning" onclick="window.location.href='edit_capacityname?CapacityID=<?php echo e($row->CapacityID); ?>'">Edit</button></td>
                                       <td><button type="submit" class="btn btn-danger" onclick="window.location.href='delete_capacityname&<?php echo e($row->CapacityID); ?>'">Delete</button></td>
                                       <?php $i++; ?>
                                   </tr>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binarycl/xpsbatterystore.com/resources/views/back_end/add_capacitymaster.blade.php ENDPATH**/ ?>