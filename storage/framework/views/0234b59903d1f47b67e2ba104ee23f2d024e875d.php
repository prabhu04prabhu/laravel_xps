 <?php $__env->startSection('content'); ?>
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Manage Testimonial</h4>

                    </div>
                    <div class="col-sm-6">
                  <div class="float-right d-none d-md-block">

            <div class="button-items">
                    <button type="button" class="btn btn-primary waves-effect waves-light" onclick="window.location.href='<?php echo e(url('add_testimonial')); ?>'">Add Testimonial</button>
                  <!--   <button type="button" class="btn btn-secondary waves-effect" onclick="window.location.href='<?php echo e(url('editImage')); ?>'" >Edit</button> -->
             
        </div>
                             
                        </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-12"><br/>
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
                            <br/>


                    <div class="card">
                            <div class="card-body">
                                   
                               <!--  <h4 class="mt-0 header-title">Testimonials in Use</h4> -->
                                <p class="text-muted m-b-30">
                                </p>

                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr style="text-align:center">
                                        <th>S.No</th>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th>Content</th>
                                        <th>Image</th>
                                        <!-- <th>Created By</th> -->
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                      
                                    </tr>
                                    </thead>


                                    <tbody>
                                            <?php
                                            $result = DB::table('testimonial')->where('type', '!=', '')->Orderby('t_id', 'desc')->get();
                                            foreach ($result as $val) {
                                       $reg = $val->t_id;
                                       //$profile =$val->status;
                                    }
                                        ?>
                                         <?php $i = 1; ?>      
                                         <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                   <tr style="text-align:center">  
                                       <td><?php echo e($i); ?></td>
                                       <td><?php echo e($row->name); ?></td>
                                       <td><?php echo e($row->designation); ?></td>
                                       <td><textarea name="" id="" cols="30" rows="10" style="border: none" readonly><?php echo e($row->content); ?></textarea></td>
                                       <td><a href="image/<?php echo e($row->image); ?>" target="_blank"><img src="image/<?php echo e($row->image); ?>" alt="" srcset="" width="42px" height="42px"></a></td>
                                        <!-- <td><?php echo e($row->type); ?></td> -->
                                        <td><a href="#" data-toggle="modal" data-target="#bs-example-modal-lg2<?php echo e($row->t_id); ?>"  >
                                <?php if($row->status == 'Approved') { ?>
                                        <span class="badge badge-pill badge-success">Approved</span>
                                <?php } else{ ?>
                                    <span class="badge badge-pill badge-danger">Request</span>
                                 <?php } ?>
                                    </a></td>
                                    <?php if(!empty($reg)) {?>
                                <div class="modal fade bs-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="bs-example-modal-lg2<?php echo e($row->t_id); ?>">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                             <form action="<?php echo e(url('approve')); ?>" enctype="multipart/form-data" method="post">
                                                <?php echo csrf_field(); ?>
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0" id="myLargeModalLabel">Customer Details</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                            <div class="row">
                                                    <div class="col-md-6 form-group">
                                                            <label>Customer Name</label>
                                                        <input type="text" class="form-control" required placeholder="" name="type" value="<?php echo e($row->name); ?>" readonly/>
                                                        </div>
                                                        <div class="col-md-6 form-group">
                                                                <label>Company Name</label>
                                                                <input type="text" class="form-control" required placeholder="" name="type" value="<?php echo e($row->company_name); ?>" readonly/>
                                                                </div>
                                                            </div>
                                                     
                                            <div class="row">
                                                              <div class="col-md-6 form-group">
                                                                <label>Content</label>
                                                                <textarea readonly class="form-control" cols="30" rows="7"  required><?php echo e($row->content); ?></textarea>
                                                                <!-- <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="<?php echo e($row->content); ?>" readonly/> -->
                                                                </div>

                                                                <div class="col-md-6 form-group">
                                                                        <label>Customer Photo</label>
                                                                        <a href="<?php echo url('/'); ?>/image/<?php echo e($row->image); ?>" target="_blank" style="margin-left: 34px;"><img src="<?php echo url('/'); ?>/image/<?php echo e($row->image); ?>" alt="" srcset="" width="100px" height="100px" ></a>
                                                                </div>
                                                            </div>
                                                             <input type="hidden" name="edit_id" value="<?php echo e($row->t_id); ?>">
                                                            <div class="modal-footer">
                                                            <button type="submit" class="btn btn-success waves-effect waves-light">Approve</button>
                                                           <!--  <a href="#" data-toggle="modal" data-target="#bs-example-modal-lg4<?php echo e($row->t_id); ?>" type="button" class="btn btn-secondary waves-effect waves-light">Re-Issuse</a> -->
                                                            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                                        </div>
                                                            
                                        </form>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                                        
                                    </div>
                            <?php } ?>
                           
                            </td>
                                       <td><button type="submit" class="btn btn-warning" onclick="window.location.href='edit_testimonial?id=<?php echo e($row->t_id); ?>'">Edit</button></td>
                                       <td><button type="submit" class="btn btn-danger" onclick="window.location.href='delete_testimonial&<?php echo e($row->t_id); ?>'">Delete</button></td>
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


<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binarycl/xpsbatterystore.com/resources/views/back_end/view_testimonial.blade.php ENDPATH**/ ?>