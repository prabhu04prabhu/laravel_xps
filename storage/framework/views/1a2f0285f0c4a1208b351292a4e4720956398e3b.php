 <?php $__env->startSection('content'); ?>
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Edit Category</h4>

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

                            <?php
                                $id = $_GET['v_id'];
                                $result = DB::table('tbl_vehiclebrand')
                                            ->join('categorymaster', 'categorymaster.CategoryID', '=', 'tbl_vehiclebrand.cat_id') 
                                            ->where('tbl_vehiclebrand.v_id',$id)->get();                           
                                foreach ($result as $row) {
                                   $CategoryName = $row->CategoryName;
                                   $brand_name = $row->brand_name;
                                   $status = $row->status;
                                   $images = $row->images;
                                }
                            ?>
                            <div class="m-b-30">
                                <form action="<?php echo e(url('edit_vehiclebrand')); ?>" enctype="multipart/form-data" method="post">
                                    <?php echo csrf_field(); ?>
                                    <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Category Name</label>
                                            <select class="form-control" name="CategoryID">
                                                <?php
                                                    $cat_select = DB::table('categorymaster')->where('Status', '=', 'Active')->get();
                                                ?>
                                                <?php $__currentLoopData = $cat_select; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($row->CategoryID); ?>"><?php echo e($row->CategoryName); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select> 
                                            <!-- <input required type="text" class="form-control" name="cat_name" value="<?php echo e($CategoryName); ?>">  -->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Brand Name</label>
                                            <input required type="text" class="form-control" name="vbname" value="<?php echo e($brand_name); ?>"> 
                                        </div>
                                    </div>
                            <input type="hidden" name="hidden_id" value="<?php echo e($id); ?>">
                                        
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                                <div class="form-group">
                                                        <label for="">Choose Logo</label>
                                                        <input type="file" onchange="ValidateSize(this)" class="form-control" name="images[]" accept=".jpg,.png,.gif,.jpeg" multiple> 
                                                    </div>
                                                    <p style="color: red;">Note: Accept Files: .png,.jpg,.jpeg<br/>
                                                File size: 800px * 800px</p>    
                                            </div>

                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Status</label>
                                            <select class="form-control" name="vstatus">
                                            <option value="Active" <?php if($status=="Active") echo 'selected="selected"'; ?> >Active</option>
                                            <option value="Inactive" <?php if($status=="Inactive") echo 'selected="selected"'; ?> >Inactive</option>
                                                </select>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                       <a href="<?php echo e($images); ?>" target="_blank"><img src="<?php echo e($images); ?>" alt="" srcset="" class="edit-img" width="150px" height="150px"></a>
                                    </div>

                            <input type="hidden" name="hidden_id" value="<?php echo e($id); ?>">
                                </div>
                                
                                    <div class="col-md-12" style="text-align:center">
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-primary">Save</button>

                                            <button type="button" class="btn btn-success"  onclick="window.history.back();">Back</button>
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


<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binarycl/xpsbatterystore.com/resources/views/back_end/edit_vehicle_brand.blade.php ENDPATH**/ ?>