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
        <aside class="content right">
            <h3>My Wishlist (3)</h3>
            <article class="clear">
                <button value="delete"><i class="fa fa-trash"></i></button>
                <figure class="left"><img src="assets/front_end/images/battery1.jpg"></figure>
                <aside class="left">
                    <h3>Exide FEM0-IMST1000</h3>
                    <h4>Availability : <span>In Stock</span></h4>
                    <figcaption>Price: <del>Rs. 7921</del> <span>20% OFF</span> <strong>₹ 5721</strong></figcaption>
                </aside>
            </article>
            <article class="clear">
                <button value="delete"><i class="fa fa-trash"></i></button>
                <figure class="left"><img src="assets/front_end/images/battery1.jpg"></figure>
                <aside class="left">
                    <h3>Exide FEM0-IMST1000</h3>
                    <h4>Availability : <span>In Stock</span></h4>
                    <figcaption>Price: <del>Rs. 7921</del> <span>20% OFF</span> <strong>₹ 5721</strong></figcaption>
                </aside>
            </article>
            <article class="clear">
                <button value="delete"><i class="fa fa-trash"></i></button>
                <figure class="left"><img src="assets/front_end/images/battery1.jpg"></figure>
                <aside class="left">
                    <h3>Exide FEM0-IMST1000</h3>
                    <h4>Availability : <span>In Stock</span></h4>
                    <figcaption>Price: <del>Rs. 7921</del> <span>20% OFF</span> <strong>₹ 5721</strong></figcaption>
                </aside>
            </article>
        </aside>
    </section>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front_end.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binarycl/xpsbatterystore.com/resources/views/front_end/wishlist.blade.php ENDPATH**/ ?>