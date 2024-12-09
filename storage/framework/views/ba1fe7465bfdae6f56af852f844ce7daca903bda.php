 <?php $__env->startSection('content'); ?>
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Add Store Locator</h4>

                    </div>
                    <div class="col-sm-6">
    <div class="float-right d-none d-md-block">

            <div class="button-items">
                    <button type="button" class="btn btn-primary waves-effect waves-light" onclick="window.location.href='<?php echo e(url('store_location')); ?>'">View Locators</button>
                    <!-- <button type="button" class="btn btn-secondary waves-effect" onclick="window.location.href='<?php echo e(url('editImage')); ?>'" >Edit</button> -->
             
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

                            <div class="m-b-30">
                                <form action="<?php echo e(url('new_store')); ?>" enctype="multipart/form-data" method="post">
                                    <?php echo csrf_field(); ?>
                                    <div class="row">

                                    <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Name</label>

                                                     <input required type="text" class="form-control" name="name"> 
                                                      
                                                </div>     
                                            </div>

                                    <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Address</label>

                                                    <textarea cols="10" rows="4" class="form-control" name="address"></textarea>
                                                      
                                                </div>     
                                            </div>
                                </div>
                                

                                <div class="row">
                                    <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">City</label>

                                                     <input required type="text" class="form-control" name="city"> 
                                                      
                                                </div>     
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Pincode</label>

                                                     <input required type="text" class="form-control" name="pincode"> 
                                                      
                                                </div>     
                                            </div>

                                </div>

                                <div class="row">
                                     <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Contact Person</label>

                                                     <input required type="text" class="form-control" name="contact_person"> 
                                                      
                                                </div>     
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Mobile Number</label>

                                                     <input required type="text" class="form-control" maxlength="10" minlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" name="mobile"> 
                                                      
                                                </div>     
                                            </div>

                                </div>
                                <div class="row">
                                     <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Lan</label>

                                                     <input required type="text" class="form-control" name="lan"> 
                                                      
                                                </div>     
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Lat</label>

                                                     <input required type="text" class="form-control" name="lat"> 
                                                      
                                                </div>     
                                            </div>

                                </div>
                                <div class="row">
                                     <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Map Link</label>

                                                     <input required type="text" class="form-control" name="map"> 
                                                      
                                                </div>     
                                            </div>

                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Status</label>
                                                    <select class="form-control" name="status">
                                                  <option value="Active">Active</option>
                                                  <option value="Inactive">Inactive</option>
                                                </select>

                                                     <!-- <input required type="text" class="form-control" name="pstatus">  -->
                                                      
                                                </div>     
                                            </div>

                                </div>
                                <div class="clear"></div><br/>
                                    <div class="col-md-12" style="text-align:center">
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-primary">Save</button>

                                            <!-- <button onclick="location.href='add_products'"  class="btn btn-danger">Back</button> -->
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

<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binarycl/xpsbatterystore.com/resources/views/back_end/add_store_location.blade.php ENDPATH**/ ?>