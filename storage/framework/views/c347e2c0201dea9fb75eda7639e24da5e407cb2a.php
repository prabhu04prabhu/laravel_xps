

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
<h4 class="page-title">Manage Products</h4>

</div>
<div class="col-sm-6">
    <div class="float-right d-none d-md-block">

            <div class="button-items">                    
                    <button type="button" class="btn btn-primary waves-effect waves-light" onclick="window.location.href='<?php echo e(url('add_products')); ?>'">Add Products</button>
                    <button type="button" class="btn btn-secondary waves-effect waves-light import_btn" data-toggle="modal" data-target="#exampleModal" >Import Price Data</button>
                    <button type="button" class="btn btn-success waves-effect waves-light" onclick="window.location.href='<?php echo e(url('export_product_data')); ?>'">Export Price Data</button>
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
                                        <th>Category Name</th>
                                        <th>Brand Name</th>
                                        <th>Sub Brand Name</th>
                                        <th>Model No</th>
                                        <th>Mapping</th>
                                        <th>Availability</th>
                                        <th>Feature</th>
                                        <th>View</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                      
                                    </tr>
                                    </thead>


                                    <tbody>
                                            <?php
                                            
                                            $result = DB::table('productmaster')
                                            ->join('categorymaster', 'categorymaster.CategoryID', '=', 'productmaster.CategoryID')
                                            ->join('brandmaster', 'brandmaster.BrandID', '=', 'productmaster.BrandID')
                                            ->join('subbrand', 'subbrand.SubBrandID', '=', 'productmaster.SubBrandID')->orderBy('ProductID', 'desc')                                            
                                            ->get();
 
                                        ?>
                                         <?php $i = 1; ?>      
                                         <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   <tr style="text-align:center">  
                                       <td><?php echo e($i); ?></td>
                                       <td><?php echo e($row_product->CategoryName); ?></td>
                                       <td><?php echo e($row_product->BrandName); ?></td>
                                       <td><?php echo e($row_product->SubBrandName); ?></td>
                                       <td><?php echo e($row_product->ProductModelNo); ?></td>
                                       <td> <?php if($row_product->CategoryName == 'Car Battery' || $row_product->CategoryName == 'Bike Battery'){?>
                                                <a href="#" data-toggle="modal" data-target="#bs-example-modal-lg3<?php echo e($row_product->ProductID); ?>" ><span class="badge badge-pill badge-secondary"><i class="fa fa-plus" id="ii<?php echo e($row_product->ProductID); ?>" onclick=getmodel(<?php echo e($row_product->ProductID); ?>) aria-hidden="true"></i></span></a>
                                                <?php }else{ ?>
                                                  <!-- <span class="badge badge-pill badge-danger">Inactive</span> -->
                                                
                                                <?php } ?>

                                       

                                        <?php if(!empty($result)) {?>
                                <div class="modal fade bs-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="bs-example-modal-lg3<?php echo e($row_product->ProductID); ?>">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                           <form>
                                      <?php echo csrf_field(); ?>
                                            <input type="hidden" name="cat_id" id="cat_id<?php echo e($row_product->ProductID); ?>" value="<?php echo e($row_product->CategoryID); ?>">
                                            <input type="hidden" name="pro_id" id="pro_id" value="<?php echo e($row_product->ProductID); ?>">

                                          <!-- Modal Header -->
                                          <div class="modal-header">
                                            <h4 class="modal-title"><?php echo e($row_product->BrandName); ?> - <?php echo e($row_product->SubBrandName); ?> - <?php echo e($row_product->ProductModelNo); ?></h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          </div>

                                          <!-- Modal body -->
                                          <div class="modal-body">
                                            <div class="row">
                                                    <div class="col-md-4 form-group">
                                                      <label style="float: left;">Brand Name</label>
                                                        <select class="form-control" class="brandname"
                                                        id='brandname<?php echo e($row_product->ProductID); ?>' name="brandname" onchange="getmodel(<?php echo e($row_product->ProductID); ?>)">
                                                          <?php
                                                              $brand = DB::table('tbl_vehiclebrand')->where('status', '=', 'Active')->get();
                                                          ?>
                                                          <?php $__currentLoopData = $brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                          <option value="<?php echo e($row->v_id); ?>"><?php echo e($row->brand_name); ?></option>
                                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                          </select> 
                                                        </div>
                                                  <div class="col-md-4 form-group">
                                                      <label style="float: left;">Model Name</label>
                                                        <select class="form-control" name="modelname" id="modelname<?php echo e($row_product->ProductID); ?>" >
                                                          </select> 
                                                        </div>
                                                <div class="col-md-3 form-group">
                                                  <label style="float: left;">Fuel Type</label><br/><br/>
                                                      <input type="checkbox" id="petrol<?php echo e($row_product->ProductID); ?>" name="petrol" value="1">
                                                      <label for="">Petrol</label>&nbsp;&nbsp;
                                                      <input type="checkbox" id="diesel<?php echo e($row_product->ProductID); ?>" name="diesel" value="1">
                                                      <label for="">Diesel</label>
                                                        </div>
                                                <div class="col-md-1 form-group">
                                                     <button id="btnsavemapping" type="button" class="btn btn-success" style="margin-top: 1.7rem;" onclick=btnsavemapping_click(<?php echo e($row_product->ProductID); ?>)><i class="fa fa-plus" aria-hidden="true"></i></button>
                                                        </div>
                                            </div>
                                             </form>
                                              <table class="table table-striped" style="border: 1px solid #dee2e6;">
                                        <thead>
                                          <tr>
                                            <th>S.No</th>
                                            <th>Brand Name</th>
                                            <th>Model Name</th>
                                            <th>Petrol</th>
                                            <th>Diesel</th>
                                            <th>Option</th>
                                          </tr>
                                        </thead>
                                        <tbody id="tblmapping_body<?php echo e($row_product->ProductID); ?>">
                                           <?php
                                            
                                            
                                          $result2 = DB::table('tbl_mapping')
                                                ->join('tbl_vehiclemodel', 'tbl_vehiclemodel.m_id', '=', 'tbl_mapping.modelname')
                                                    ->join('tbl_vehiclebrand', 'tbl_vehiclebrand.v_id', '=', 'tbl_mapping.brandname')
                                                    ->where('tbl_mapping.pro_id',$row_product->ProductID)
                                                    ->get();
 
                                        ?>
                                        <?php $j = 1; ?>      
                                         <?php $__currentLoopData = $result2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row_product2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <tr>
                                            <td><?php echo e($j); ?></td>
                                            <td><?php echo e($row_product2->brand_name); ?></td>
                                            <td><?php echo e($row_product2->model_name); ?></td>
                                            <td><?php echo e($row_product2->is_petrol); ?></td>
                                            <td><?php echo e($row_product2->is_disel); ?></td>
                                            <td><i class="fa fa-trash" aria-hidden="true" onclick="deletemapping(<?php echo e($row_product2->map_id); ?>)"></i></td>
                                          <?php $j++; ?>
                                   </tr>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                          
                                        </tbody>
                                      </table>
                                      </div>

                                          <!-- Modal footer -->
                                          <!-- <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                          </div> -->
                                       
                                        </div>
                                      </div>
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                                        
                                    </div>
                            <?php } ?>
                                    </td> 
                                     <td>
                                        <?php if($row_product->availability == 'Yes'){?>
                                                <span class="badge badge-pill badge-success">Yes</span>
                                                  <!-- <a onclick="#" href="#" class="btn btn-success">Yes</a> -->
                                                <?php }else{ ?>
                                                  <span class="badge badge-pill badge-danger">No</span>
                                             <!--    <a onclick="#" href="#" class="btn btn-danger">No</a> -->
                                                <?php } ?>
                                       </td>
                                       <td>
                                           <?php if($row_product->feature == 'Yes'){?>
                                                  <span class="badge badge-pill badge-success">Yes</span>
                                                  <!-- <a onclick="#" href="#" class="btn btn-success">Yes</a> -->
                                                <?php }else{ ?>
                                                  <span class="badge badge-pill badge-danger">No</span>
                                               <!--  <a onclick="#" href="#" class="btn btn-danger">No</a> -->
                                                <?php } ?>
                                       </td>
                                       <td><a href="#" class="btn btn-success" data-toggle="modal" data-target="#bs-example-modal-lg2<?php echo e($row_product->ProductID); ?>" ><i class="fa fa-eye" aria-hidden="true"></i></a></td>  
                         

                            <?php if(!empty($result)) {?>
                                <div class="modal fade bs-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="bs-example-modal-lg2<?php echo e($row_product->ProductID); ?>">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0" id="myLargeModalLabel">Product Details</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                            <div class="row">
                                                    <div class="col-md-6 form-group">
                                                            <label>Product Code</label>
                                                        <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="<?php echo e($row_product->ProductCode); ?>" readonly/>
                                                        </div>
                                                        <div class="col-md-6 form-group">
                                                                <label>Product Model No</label>
                                                                <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="<?php echo e($row_product->ProductModelNo); ?>" readonly/>
                                                                </div>
                                                            </div>
                                                <div class="row">
                                                    <div class="col-md-6 form-group">
                                                            <label>Warranty</label>
                                                        <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="<?php echo e($row_product->Warranty); ?>" readonly/>
                                                        </div>
                                                        <div class="col-md-6 form-group">
                                                                <label>Tax ID</label>
                                                                <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="<?php echo e($row_product->TaxID); ?>" readonly/>
                                                                </div>
                                                            </div>
                                                     
                                          
                                                            <div class="row">
                                                           
                                                        <div class="col-md-6 form-group">
                                                                <label>Online Pricing</label>
                                                                 <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="<?php echo e($row_product->OnlinePricing); ?>" readonly/>
                                                               
                                                            </div>

                                                            <div class="col-md-6 form-group">
                                                                    <label>MRP</label>
                                                                <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="<?php echo e($row_product->MRP); ?>" readonly/>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-6 form-group">
                                                                    <label>Purchase Price</label>
                                                                <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="<?php echo e($row_product->PurchasePrice); ?>" readonly/>
                                                                </div>
                                                                <div class="col-md-6 form-group">
                                                                    <label>Status</label>
                                                                <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="<?php echo e($row_product->Status); ?>" readonly/>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                           <!--   <div class="col-md-6 form-group">
                                                            <label>Description</label>
                                                            <textarea name="" id="" cols="30" rows="3" class="form-control" readonly><?php echo e($row_product->Description); ?></textarea>
                                                        </div>  -->      

                                                                <div class="col-md-6 form-group">
                                                                        <label>Product Image</label>
                                                                        <a href="<?php echo e($row_product->image); ?>" target="_blank" style="margin-left: 48px;"><img src="<?php echo e($row_product->image); ?>" alt="" srcset="" width="100px" height="100px" ></a>
                                                                </div>
                                                            </div>
                                                            
                                        </form>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                                        
                                    </div>
                            <?php } ?>
                                       <td><button type="submit" class="btn btn-warning" onclick="window.location.href='edit_product?ProductID=<?php echo e($row_product->ProductID); ?>'">Edit</button></td>
                                       <td><button type="submit" class="btn btn-danger" onclick="window.location.href='delete_product&<?php echo e($row_product->ProductID); ?>'">Delete</button></td>
                                       <?php $i++; ?>
                                   </tr>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
</div> 
</div> 
</div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Import New Price</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="import_product_data" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
      <div class="modal-body">
            <div class="form-group">
              <label>Select File</label>
              <input type="file" name="data" class="form-control"/>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>
<script type='text/javascript' src='assets/front_end/js/jquery.js'></script>
<script type="text/javascript">
//  $(".brandname").change(function (e) {
//         e.preventDefault();
//         var ele = $(this);
//         ele.siblings('.btn-loading').show();
//         $.ajax({
//             url: '<?php echo e(url('get-modal-by-brand')); ?>',
//             method: "post",
//             data: {id: document.getElementById("brandname").value,
//             _token: '<?php echo e(csrf_token()); ?>'},
//             dataType: "json",
//             success: function (response) { 
//               $("#modelname").empty();
//               var obj = response.data;
//               for (var index = 0; index < obj.length; index++) {
//                 $("#modelname").append('<option value=' + obj[index].m_id + ' >' + obj[index].model_name + '</option>');
//               }
//             }
//         });
//     });

    function getmodel(id){
        $.ajax({
            url: '<?php echo e(url('get-modal-by-brand')); ?>',
            method: "post",
            data: {id: document.getElementById("brandname"+id).value,
            _token: '<?php echo e(csrf_token()); ?>'},
            dataType: "json",
            success: function (response) { 
              $("#modelname"+id).empty();
              var obj = response.data;
              for (var index = 0; index < obj.length; index++) {
                $("#modelname"+id).append('<option value=' + obj[index].m_id + ' >' + obj[index].model_name + '</option>');
              }
            }
        });
     
    }

    

    function btnsavemapping_click(id) {
        $.ajax({
            url: '<?php echo e(url('update_mapping')); ?>',
            method: "post",
            data: {cat_id: document.getElementById("cat_id"+id).value,
            pro_id: id,
            brandname: document.getElementById("brandname"+id).value,
            modelname: document.getElementById("modelname"+id).value,
            petrol: document.getElementById("petrol"+id).checked,
            diesel: document.getElementById("diesel"+id).checked,
            _token: '<?php echo e(csrf_token()); ?>'},
            dataType: "json",
            success: function (response) { 
              loadmappingtable(id);
            }
        });
    }

    function deletemapping(mapid, pid) {
      console.log(mapid);
        $.ajax({
            url: '<?php echo e(url('delete_mapping')); ?>',
            method: "post",
            data: {id: mapid,
            _token: '<?php echo e(csrf_token()); ?>'},
            dataType: "json",
            success: function (response) { 
              loadmappingtable(response.id);
            }
        });
    }

    // data: {_token: '<?php echo e(csrf_token()); ?>'},
    function loadmappingtable(id){
        $.ajax({
            url: '<?php echo e(url('get_mappingdata')); ?>',
            data: {
            pro_id: id,
            _token: '<?php echo e(csrf_token()); ?>'},
            method: "post",            
            dataType: "json",
            success: function (response) { 
              var obj = response.data;
              $("#tblmapping_body"+id).empty();
              for (var index = 0; index < obj.length; index++) {
                var itable = "<tr><td>"+parseInt(index + 1)+"</td><td>"+obj[index].brand_name+"</td><td>"+obj[index].model_name+"</td><td>"+obj[index].is_petrol+"</td><td>"+obj[index].is_disel+"</td><td><i class='fa fa-trash' onclick='deletemapping("+obj[index].map_id+")'></i></td></tr>";
              $("#tblmapping_body"+id).append(itable);
            }
                
            }
        });
    }
</script>    
<?php $__env->stopSection(); ?>

        
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binarycl/xpsbatterystore.com/resources/views/back_end/product_details.blade.php ENDPATH**/ ?>