 <?php $__env->startSection('content'); ?>
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Edit Product</h4>

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
                                $id = $_GET['ProductID'];
                                $result = DB::table('productmaster')->where('ProductID', $id)->get();
                                foreach ($result as $row) {
                                   $ProductCode = $row->ProductCode;
                                   $ProductModelNo = $row->ProductModelNo;
                                   $Warranty = $row->Warranty;
                                   $TaxID = $row->TaxID;
                                   $OnlinePricing = $row->OnlinePricing;
                                   $MRP = $row->MRP;
                                   $PurchasePrice = $row->PurchasePrice;
                                   $Status = $row->display;
                                   $image = $row->image;
                                   $CategoryID = $row->CategoryID;
                                   $BrandID = $row->BrandID;
                                   $SubBrandID = $row->SubBrandID;
                                   $CapacityID = $row->CapacityID;
                                   $Description = $row->Descriptions;
                                   $specification = $row->specification;
                                   $availability = $row->availability;
                                   $feature = $row->feature;
                                   $scrab_amount = $row->scrab_amount;
                                   $discount_percentage = $row->discount_percent;
                                }
                            ?>
                            <div class="m-b-30">
                                <form id="form" action="<?php echo e(url('edit_products')); ?>" enctype="multipart/form-data" method="post">
                                    <?php echo csrf_field(); ?>
                                    <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Choose Category</label>
                                            <select class="form-control" name="ca_id">
                                                <?php
                                                    $cat_select = DB::table('categorymaster')->get();
                                                ?>
                                                <?php $__currentLoopData = $cat_select; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row_cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($row_cat->CategoryID); ?>" <?php if($CategoryID == $row_cat->CategoryID): ?>
                                        selected
                                    <?php endif; ?>><?php echo e($row_cat->CategoryName); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select> 
                                        </div>
                                        <input type="hidden" name="hidden_id" value="<?php echo e($id); ?>">
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Choose Brand</label>
                                            <select class="form-control" name="br_id" id="b_id">
                                                <?php
                                                    $brand = DB::table('brandmaster')->get();
                                                ?>
                                                <?php $__currentLoopData = $brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row_bran): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($row_bran->BrandID); ?>" <?php if($BrandID == $row_bran->BrandID): ?>
                                        selected
                                    <?php endif; ?>><?php echo e($row_bran->BrandName); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select> 
                                        </div>
                                    </div>
                                    <input type="hidden" name="hidden_id" value="<?php echo e($id); ?>">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Choose Sub Brand</label>
                                            <select class="form-control" name="sub_id" id="s_id">
                                                <?php
                                                    $sub = DB::table('subbrand')->get();
                                                ?>
                                                <?php $__currentLoopData = $sub; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row_sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($row_sub->SubBrandID); ?>" <?php if($SubBrandID == $row_sub->SubBrandID): ?>
                                        selected
                                    <?php endif; ?>><?php echo e($row_sub->SubBrandName); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select> 
                                        </div>
                                    </div>
                                </div>
                                

                                <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Product Code</label>

                                                     <input required type="text" class="form-control" name="ecode"  value="<?php echo e($ProductCode); ?>"> 
                                                      
                                                </div>     
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Product Model No</label>

                                                     <input required type="text" class="form-control" name="emodel"  value="<?php echo e($ProductModelNo); ?>"> 
                                                      
                                                </div>     
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Warranty</label>

                                                     <input required type="text" class="form-control" name="ewarranty"  value="<?php echo e($Warranty); ?>"> 
                                                      
                                                </div>     
                                            </div>

                                </div>
                                <div class="row">
                                     <div class="col-md-6" style="display: none;">
                                                <div class="form-group">
                                                    <label for="">TaxID</label>

                                                     <input type="text" class="form-control" name="etax"  value="<?php echo e($TaxID); ?>"> 
                                                      
                                                </div>     
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Purchase Price</label>

                                                     <input required type="text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="5" class="form-control" name="epurchase"  value="<?php echo e($PurchasePrice); ?>"> 
                                                      
                                                </div>     
                                            </div>
                                           
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">MRP</label>

                                                     <input required type="text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="5" class="form-control" name="emrp"  id="mrp_price" value="<?php echo e($MRP); ?>"> 
                                                      
                                                </div>     
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Pricing Discount in %</label>

                                                     <input required type="text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,''); " onchange="fetch_online_price()" maxlength="5" class="form-control" name="discount_percentage" id="discount_percentage" value="<?php echo e($discount_percentage); ?>"> 
                                                      
                                                </div>     
                                            </div>

                                           
                                </div>
                                <div class="row">
                                <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Online Pricing</label>

                                                     <input required type="text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="5" class="form-control" name="eprice"  value="<?php echo e($OnlinePricing); ?>" id="online_price"> 
                                                      
                                                </div>     
                                            </div>
                                     <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Status</label>
                                                    <select class="form-control" name="estatus">
                                            <option value="Active" <?php if($Status=="Active") echo 'selected="selected"'; ?> >Active</option>
                                            <option value="Inactive" <?php if($Status=="Inactive") echo 'selected="selected"'; ?> >Inactive</option>
                                                </select>


                                                     <!-- <input required type="text" class="form-control" name="estatus"  value="<?php echo e($Status); ?>"> --> 
                                                      
                                                </div>     
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Avaiability</label>
                                                    <select class="form-control" name="eavailable">
                                            <option value="Yes" <?php if($availability=="Yes") echo 'selected="selected"'; ?> >Yes</option>
                                            <option value="No" <?php if($availability=="No") echo 'selected="selected"'; ?> >No</option>
                                                </select>


                                                     <!-- <input required type="text" class="form-control" name="estatus"  value="<?php echo e($Status); ?>"> --> 
                                                      
                                                </div>     
                                            </div>
                                            
                                               
                                </div>

                                <div class="row">
                                <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Features</label>
                                                    <select class="form-control" name="efeature">
                                            <option value="Yes" <?php if($feature=="Yes") echo 'selected="selected"'; ?> >Yes</option>
                                            <option value="No" <?php if($feature=="No") echo 'selected="selected"'; ?> >No</option>
                                                </select>


                                                     <!-- <input required type="text" class="form-control" name="estatus"  value="<?php echo e($Status); ?>"> --> 
                                                      
                                                </div>     
                                            </div>
                                     
                                            <div class="col-md-4">
                                     <div class="form-group">
                                            <label for="">Choose Capacity</label>
                                            <select class="form-control" name="capacity_id">
                                                <?php
                                                    $cat_select = DB::table('capacitymaster')->get();
                                                ?>
                                                <?php $__currentLoopData = $cat_select; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($row->CapacityID); ?>"  <?php if($CapacityID == $row->CapacityID): ?>
                                        selected
                                    <?php endif; ?>><?php echo e($row->CapacityName); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select> 
                                               
                                        </div>    
                                      </div>
                                      <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Scrab Amount</label>

                                                     <input required type="text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="5" class="form-control" name="scrab_amount" value="<?php echo e($scrab_amount); ?>"> 
                                                      
                                                </div>     
                                            </div>
                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">Choose Image</label>
                                                        <input type="file" class="form-control" name="images[]" accept=".jpg,.png,.gif,.jpeg" value="">  
                                                    </div>
                                                    <p style="color: red;">Note:Accept Files: .png,.jpg,.jpeg<br/>
                                                File size: 800px * 800px</p>
                                                
                                                </div>

                                <div class="col-md-4 text-center">
                                                    <a href="<?php echo e($image); ?>" target="_blank"><img src="<?php echo e($image); ?>" alt="" srcset="" class="edit-img" width="150px" height="150px"></a>
                                                   <!--  <?php if(!empty($image)): ?>
                                                    <button type="button" onclick="window.location.href='delete_product_image&<?php echo e($id); ?>'">Delete</button>
                                                    <?php endif; ?> -->
                                                   
                                                </div>
                                </div><br/>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Description</label>
                                        
                                            <div>

                                                <textarea class="summernote" name="edescription"><?php echo e($Description); ?></textarea>                                                

                                            </div>
                            
                                        <!-- <form action="" method="post">
                                            <div>
                                                <textarea id="example" nam style="height:300px;width:600px;"></textarea>

                                            </div>
                                        </form> -->

                                        
                                </div>

                                <div class="col-md-6">
                                        <label for="">Specifications</label>
                                            <div>
                                                <textarea class="summernote" name="especifications"><?php echo e($specification); ?></textarea>

                                            </div>
                                        
                                </div>
                                </div><br/>
                               <!--  <div class="row">
                                     <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Description</label>

                                            <textarea cols="10" rows="4" class="form-control" name="edescription"  value="<?php echo e($Description); ?>"><?php echo $Description; ?></textarea>
                                           
                                        </div>
                                    </div> 

                                </div> -->
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
<script type='text/javascript' src='assets/front_end/js/jquery.js'></script>
<script type="text/javascript">
function fetch_online_price() {
        var mrp = $('#mrp_price').val();
        var discount = $('#discount_percentage').val();
        var price = mrp / 100;
        price = price * discount;
        $('#online_price').val(mrp - price);
    }
$(document).ready(function() {
  //  getsubbrand();
});

function getsubbrand(){
        $.ajax({
            url: '<?php echo e(url('get-subbrand-by-brand')); ?>',
            method: "post",
            data: {id: document.getElementById("b_id").value,
            _token: '<?php echo e(csrf_token()); ?>'},
            dataType: "json",
            success: function (response) { 
              $("#s_id").empty();
              var obj = response.data;
              for (var index = 0; index < obj.length; index++) {
                $("#s_id").append('<option value=' + obj[index].SubBrandID + ' >' + obj[index].SubBrandName + '</option>');
              }
            }
        });
     
    }
</script>

</script>

<!-- <script type="text/javascript">

$("#form").submit(function(event) {
    var form = this;
        event.preventDefault(); //Stop the submit for now

        var fileInput = $(this).find("input[type=file]")[0],
        file = fileInput.files && fileInput.files[0];
    if( file ) {
        var img = new Image();
        img.src = window.URL.createObjectURL( file );
       
        img.onload = function() {
            var width = img.naturalWidth,
                height = img.naturalHeight;
        if (width == 800 && height == 800) {
            form.submit();
        } else {
            alert("The image resolution is too low.");
        }
        }
    }
});
</script> -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binarycl/xpsbatterystore.com/resources/views/back_end/edit_product.blade.php ENDPATH**/ ?>