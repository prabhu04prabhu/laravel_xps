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
                    <button type="button" class="btn btn-primary waves-effect waves-light" onclick="window.location.href='<?php echo e(url('store_location')); ?>'">View Locations</button>
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

                            <?php
                                $id = $_GET['store_id'];
                                $result = DB::table('tbl_storelocator')->where('store_id', $id)->get();
                                foreach ($result as $row) {
                                   $name = $row->name;
                                   $address = $row->address;
                                   $city = $row->city;
                                   $pincode = $row->pincode;
                                   $contact_person = $row->contact_person;
                                   $mobile_no = $row->mobile_no;
                                   $lan = $row->lan;
                                   $lat = $row->lat;
                                   $map_link = $row->map_link;
                                   $status = $row->status;
                                }
                            ?>

                            <div class="m-b-30">
                                <form action="<?php echo e(url('edit_store')); ?>" enctype="multipart/form-data" method="post">
                                    <?php echo csrf_field(); ?>
                                    <div class="row">
                                        <input type="hidden" name="hidden_id" value="<?php echo e($id); ?>">
                                    <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Name</label>

                                                     <input required type="text" class="form-control" name="ename" value="<?php echo e($name); ?>"> 
                                                      
                                                </div>     
                                            </div>

                                    <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Address</label>

                                                    <textarea cols="10" rows="4" class="form-control" name="eaddress" value="<?php echo e($address); ?>"><?php echo e($address); ?></textarea>
                                                      
                                                </div>     
                                            </div>
                                </div>
                                

                                <div class="row">
                                    <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">City</label>

                                                     <input required type="text" class="form-control" name="ecity" value="<?php echo e($city); ?>"> 
                                                      
                                                </div>     
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Pincode</label>

                                                     <input required type="text" class="form-control" name="epincode" value="<?php echo e($pincode); ?>"> 
                                                      
                                                </div>     
                                            </div>

                                </div>

                                <div class="row">
                                     <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Contact Person</label>

                                                     <input required type="text" class="form-control" name="econtact_person" value="<?php echo e($contact_person); ?>"> 
                                                      
                                                </div>     
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Mobile Number</label>

                                                     <input required type="text" maxlength="10" minlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" class="form-control" name="emobile" value="<?php echo e($mobile_no); ?>"> 
                                                      
                                                </div>     
                                            </div>

                                </div>
                                <div class="row">
                                     <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Lan</label>

                                                     <input required type="text" class="form-control" name="elan" value="<?php echo e($lan); ?>"> 
                                                      
                                                </div>     
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Lat</label>

                                                     <input required type="text" class="form-control" name="elat" value="<?php echo e($lat); ?>"> 
                                                      
                                                </div>     
                                            </div>

                                </div>
                                <div class="row">
                                     <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Map Link</label>

                                                     <input required type="text" class="form-control" name="emap" value="<?php echo e($map_link); ?>"> 
                                                      
                                                </div>     
                                            </div>

                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Status</label>
                                                     <select class="form-control" name="estatus">
                                            <option value="Active" <?php if($status=="Active") echo 'selected="selected"'; ?> >Active</option>
                                            <option value="Inactive" <?php if($status=="Inactive") echo 'selected="selected"'; ?> >Inactive</option>
                                                </select>

                                                     <!-- <input required type="text" class="form-control" name="pstatus">  -->
                                                      
                                                </div>     
                                            </div>

                                </div>
                                <div class="clear"></div><br/>
                                    <div class="col-md-12" style="text-align:center">
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                            
                                             <button type="button" class="btn btn-success"  onclick="window.history.back();">Back</button>

                                            <!-- <button onclick="location.href='store_location'"  class="btn btn-danger">Back</button> -->
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

<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binarycl/xpsbatterystore.com/resources/views/back_end/edit_store.blade.php ENDPATH**/ ?>