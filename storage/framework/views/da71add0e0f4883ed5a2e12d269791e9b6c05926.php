
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
<h4 class="page-title">Delivered Orders</h4>

</div>
<div class="col-sm-6">        
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

                                <table id="datatable1" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr style="text-align:center">
                                        <th>S.No</th>                                        
                                        <th>Brand Name</th>
                                        <th>Model No</th>
                                        <th>Customer Name </th>
                                        <th>Mobile No</th>
                                        <th>Address</th>
                                        <th>Quantity </th>
                                        <th>Amount</th>
                                        <th>Scrap Value</th>
                                        <th>Status</th>
                                      
                                    </tr>
                                    </thead>
                                    <tbody>
                                  <?php
                                   $result = DB::table('ordertrans')
                                  ->join('ordermaster', 'ordermaster.OrderID', '=', 'ordertrans.OrderID')
                                  ->join('productmaster', 'productmaster.ProductID', '=', 'ordertrans.ProductID')
                                  ->join('brandmaster', 'brandmaster.BrandID', '=', 'productmaster.BrandID')
                                  ->where('ordertrans.status','Delivered')->orderBy('OrderTransID', 'desc')->get();
                                  ?>
                                         <?php $i = 1; ?>      
                                         <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   <tr style="text-align:center">  
                                       <td><?php echo e($i); ?></td>
                                       <td><?php echo e($row_product->BrandName); ?></td>
                                       <td><?php echo e($row_product->ProductModelNo); ?></td>
                                       <td><?php echo e($row_product->CustomerName); ?></td>
                                       <td><?php echo e($row_product->MobileNo); ?></td>
                                       <td><?php echo e($row_product->Address); ?></td>
                                       <td><?php echo e($row_product->Quantity); ?></td>
                                       <td><?php echo e($row_product->Subtotal); ?></td>
                                       <td><?php echo e($row_product->ScrabAmount); ?></td>
                                       <td><span class="badge badge-pill badge-success"><?php echo e($row_product->Status); ?></span></td>
                                       
                                       <?php $i++; ?>
                                   </tr>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
</div> 
</div> 
    
<?php $__env->stopSection(); ?>

        

<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binarycl/xpsbatterystore.com/resources/views/back_end/admin-delivered-orders.blade.php ENDPATH**/ ?>