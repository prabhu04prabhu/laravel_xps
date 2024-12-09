 
<?php $__env->startSection('content'); ?>
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Add Vehicle Brand</h4>

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
                                <form action="<?php echo e(url('new_vehicle')); ?>" enctype="multipart/form-data" method="post">
                                    <?php echo csrf_field(); ?>
                                    <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Choose Category</label>
                                            <select class="form-control" name="CategoryID">
                                                <?php
                                                    $cat_select = DB::table('categorymaster')->where('Status', '=', 'Active')->get();
                                                ?>
                                                <?php $__currentLoopData = $cat_select; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($row->CategoryID); ?>"><?php echo e($row->CategoryName); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select> 
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Brand Name</label>
                                            <input required type="text" class="form-control" name="brand_name"> 
                                        </div>
                                    </div>
                                </div>
                                

                                <div class="row">
                                        <!-- <div class="col-md-6">
                                                <div class="form-group">
                                                 
                                                <label for="">Description</label>

                                                <textarea cols="10" rows="4" class="form-control" name="description"></textarea>
                                                      
                                                </div>     
                                            </div> -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                        <label for="">Choose Logo</label>
                                                        <input required type="file" onchange="ValidateSize(this)" class="form-control" name="images" accept=".jpg,.png,.gif,.jpeg" multiple> 
                                                    </div>
                                                    <p style="color: red;">Note: Accept Files: .png,.jpg,.jpeg<br/>
                                                File size: 800px * 800px</p>    
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
                                    <div class="col-md-12" style="text-align:center">
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

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


<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binarycl/xpsbatterystore.com/resources/views/back_end/add_vehicle_brand.blade.php ENDPATH**/ ?>