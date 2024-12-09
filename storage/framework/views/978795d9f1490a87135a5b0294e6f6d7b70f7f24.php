<?php $__env->startSection('content'); ?>
<section class="section">
    <section class="section-content dashboard wishlist clear">
        <?php 
          if((Session::get('id')) != ''){
            ?>
            <?php 
            $details = DB::table('users')->where('id',Session::get('id'))->get();
            ?>
            <?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!-- <div class="header-contact right call_us">
              <a onclick="showHide('hidden_div'); return false;" href="javascript:void(0)"><i class="fa fa-user"></i> Hi <?php echo e($row->first_name); ?></a>
            </div> -->

        <aside class="sidebar left">
            <div class="profile-name-and-photo clear">
              
                <figure><img src="assets/front_end/images/photo.jpg"></figure>
                <h3><small>Hello,</small><?php echo e($row->first_name); ?></h3>
                <!-- <figure><img src="assets/front_end/images/photo.jpg"></figure>
                <h3><small>Hello,</small>Ganesh Kumar</h3> -->
                
            </div>
             <nav class="dashboard-nav clear">
                <h3><i class="fa fa-user"></i> Account</h3>
                <a href="<?php echo e('personal-information'); ?>">Profile Information</a>
                <a href="<?php echo e('manage-addresses'); ?>">Manage Addresses</a>
                <a href="<?php echo e('change-password'); ?>">Change Password</a>
                <h3><i class="fa fa-shopping-cart"></i> Order</h3>
                <a href="<?php echo e('my_orders'); ?>">My Orders</a>
                
                <h3><i class="fa fa-heart"></i> My Stuff</h3>
                
                <a href="<?php echo e('wishlist'); ?>">Wishlist</a>
            </nav>
        </aside>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php }
            ?>
        <aside class="content right myorders my-orders list-wrapper">
             <?php 
          if((Session::get('id')) != ''){
            ?>
            <?php
            $sub = DB::table('ordertrans')
            ->join('ordermaster', 'ordermaster.OrderID', '=', 'ordertrans.OrderID')
            ->join('productmaster', 'productmaster.ProductID', '=', 'ordertrans.ProductID')
            ->join('brandmaster', 'brandmaster.BrandID', '=', 'productmaster.BrandID')
            ->where('ordermaster.UserID',Session::get('id'))->orderBy('OrderTransID', 'desc')->get();

            $sub2 = $sub->count();
            //echo $sub2;
            ?>
            <h3>My Orders (<?php echo $sub2; ?>)</h3>
               <?php $__currentLoopData = $sub; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <article class="clear list-item">
            <figure class="left"><img src="<?php echo e($row->image); ?>"></figure>
            <aside class="left">
                <h4><?php echo e($row->BrandName); ?>  <?php echo e($row->ProductModelNo); ?></h4>
                <p><strong>Product Brand:</strong> <?php echo e($row->BrandName); ?><br><strong>Model Number:</strong> <?php echo e($row->ProductModelNo); ?></p>
            </aside>
            <h3 class="left">₹ <?php echo e($row->Subtotal); ?></h3>
            <?php if($row->Status =='Pending'): ?>  
            <h2 class="left">Delivery Expected by <?php echo date('M d', strtotime($row->Delivery_Date. ' + 3 days')); ?><small>Your item has been shipped</small></h2>
            <?php else: ?>
            <h2 class="left">Delivered on <?php echo date('M d', strtotime($row->DeliveryDate)); ?></h2>
            <?php endif; ?>
        </article>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php }
            ?>
            <div id="pagination-container"></div>
        </aside>
    </section>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front_end.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binarycl/xpsbatterystore.com/resources/views/front_end/my-orders.blade.php ENDPATH**/ ?>