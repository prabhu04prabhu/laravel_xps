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
                                $id = $_GET['CategoryID'];
                                $result = DB::table('categorymaster')->where('CategoryID', $id)->get();
                                foreach ($result as $row) {
                                   $CategoryName = $row->CategoryName;
                                   $PointsValue = $row->PointsValue;
                                   $Description = $row->Description;
                                   $Status = $row->Status;
                                }
                            ?>
                            <div class="m-b-30">
                                <form action="<?php echo e(url('edit_category_new')); ?>" enctype="multipart/form-data" method="post">
                                    <?php echo csrf_field(); ?>
                                    <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Category Name</label>
                                            <input required type="text" class="form-control" name="cname" value="<?php echo e($CategoryName); ?>"> 
                                        </div>
                                    </div>
                            <input type="hidden" name="hidden_id" value="<?php echo e($id); ?>">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Points Value</label>
                                            <input required type="text" class="form-control" name="points" value="<?php echo e($PointsValue); ?>"> 
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Description</label>

                                            <textarea cols="10" rows="4" class="form-control" name="description" value="<?php echo e($Description); ?>"><?php echo $Description; ?></textarea>
                                            <!-- <label for="">Description</label>
                                            <input required type="text" class="form-control" name="description" value="<?php echo e($Description); ?>"> --> 
                                        </div>
                                    </div>
                            <input type="hidden" name="hidden_id" value="<?php echo e($id); ?>">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label for="">Status</label>
                                            <select name="status" class="custom-select">
                                            <option value="Active" <?php if($Status=="Active") echo 'selected="selected"'; ?> >Active</option>
                                            <option value="Inactive" <?php if($Status=="Inactive") echo 'selected="selected"'; ?> >Inactive</option>
                                            </select>
                                             </div>
                                    </div>
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


<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binarycl/xpsbatterystore.com/resources/views/back_end/edit_category_new.blade.php ENDPATH**/ ?>