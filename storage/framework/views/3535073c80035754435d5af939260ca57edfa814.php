
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
<h4 class="page-title">Manage Appliance</h4>

</div>
<div class="col-sm-6">
    <div class="float-right d-none d-md-block">

            <div class="button-items">
                    <button type="button" class="btn btn-primary waves-effect waves-light" onclick="window.location.href='<?php echo e(url('add_appliance')); ?>'">Add Appliance</button>
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
                                        <th>Name</th>
                                        <th>Per Unit</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                      
                                    </tr>
                                    </thead>


                                    <tbody>
                                            <?php
                                            
                                            $result = DB::table('tbl_appliance')->get();
 
                                        ?>
                                         <?php $i = 1; ?>      
                                         <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   <tr style="text-align:center">  
                                       <td><?php echo e($i); ?></td>
                                       <td><?php echo e($row->name); ?></td>
                                       <td><?php echo e($row->per_unit); ?></td>

                            
                                       <td><button type="submit" class="btn btn-warning" onclick="window.location.href='edit_appliance?app_id=<?php echo e($row->app_id); ?>'">Edit</button></td>
                                       <td><button type="submit" class="btn btn-danger" onclick="window.location.href='delete_appliance&<?php echo e($row->app_id); ?>'">Delete</button></td>
                                       <?php $i++; ?>
                                   </tr>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
</div> 
</div> 
<?php /*<div class="modal fade bs-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="bs-example-modal-lg2">
                                    <div class="modal-dialog modal-lg" style="width: 40%;">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0" id="myLargeModalLabel">Add Appliances</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                               <form action="{{url('new_appliance')}}" enctype="multipart/form-data" method="post">
                                            @csrf
                                            <div class="row">
                                                    <div class="col-md-12 form-group">
                                                            <label>Name</label>
                                                        <input type="text" class="form-control" required placeholder="" name="name" value="">
                                                        </div>
                                                        <div class="col-md-12 form-group">
                                                                <label>Per Unit(Hours)</label>
                                                                <input type="text" class="form-control" required placeholder="" name="perunit" value="" >
                                                                </div>

                                                        <div class="col-md-12 ">
                                                           <button type="submit" class="btn btn-primary">Save</button>
                                                        </div>
                                                                
                                                            </div>
                                                          </form>
                                               
                                                            </div>
                                                            
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal --> */ ?>
    
<?php $__env->stopSection(); ?>

        
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binarycl/xpsbatterystore.com/resources/views/back_end/appliance_details.blade.php ENDPATH**/ ?>