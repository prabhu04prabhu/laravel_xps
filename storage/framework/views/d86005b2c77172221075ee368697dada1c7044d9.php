<?php $__env->startSection('content'); ?>
<section class="section">
    <section class="section-content dashboard personal-information clear">
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

        <!-- <aside class="sidebar left profile_sidebar"> -->
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
               <!--  <a href="#">Reports</a> -->
                <h3><i class="fa fa-heart"></i> My Stuff</h3>
                <!-- <a href="#">Feeback & Enquiry</a>
                <a href="<?php echo e('notifications'); ?>">Notifications</a> -->
                <a href="<?php echo e('wishlist'); ?>">Wishlist</a>
            </nav>
        </aside>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php }
            ?>

    	<aside class="content right profile_content">
            <fieldset class="clear">
                  <?php if(\Session::has('success')): ?>
                            <div class="alert alert-success">

                                <?php echo \Session::get('success'); ?>


                            </div>
                            <?php endif; ?>

                           <?php if(count($errors) > 0): ?>
                                <div class="alert alert-danger">
                                    <ul>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                <form method="post" action="#" onsubmit="return validate();"><br/><br/>                
        			<h3>Personal Information <a href="edit-personal-details">Edit</a></h3><br/>                   
                    <div class="form-split left"><p><strong style="color: #000;">First Name&nbsp;:&nbsp;</strong> <?php echo e($row->first_name); ?></p></div>
                    <div class="form-split right"><p><strong style="color: #000;">Last Name&nbsp;:&nbsp;</strong> <?php echo e($row->last_name); ?></p></div>
                    <div class="clear"></div>

                    <div class="form-split left"><p><strong style="color: #000;">Email ID&nbsp;:&nbsp;</strong> <?php echo e($row->email); ?></p></div>
                    <div class="form-split right"><p><strong style="color: #000;">Phone No&nbsp;:&nbsp;</strong> <?php echo e($row->phone); ?></p></div>
                    <div class="clear"></div>

                    <div class="form-split left"><p><strong style="color: #000;">Country&nbsp;:&nbsp;</strong> <?php echo e($row->country); ?></p></div>
                    <div class="form-split right"><p><strong style="color: #000;">State&nbsp;:&nbsp;</strong> <?php echo e($row->state); ?></p></div>
                    <div class="clear"></div>

                    <div class="form-split left"><p><strong style="color: #000;">City&nbsp;:&nbsp;</strong> <?php echo e($row->city); ?></p></div>
                    <div class="form-split right"><p><strong style="color: #000;">Pincode&nbsp;:&nbsp;</strong> <?php echo e($row->pincode); ?></p></div>
                    <div class="clear"></div>

                    <div class="form-split left"><p><strong style="color: #000;">Address&nbsp;:&nbsp;</strong> <?php echo e($row->address); ?></p></div>
                    <div class="form-split right"><p><strong style="color: #000;">Gender&nbsp;:&nbsp;</strong> <?php echo e($row->gender); ?></p></div>
                    <div class="clear"></div>
                </form>
            </fieldset>
        </aside>

    </section>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front_end.header2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binarycl/xpsbatterystore.com/resources/views/front_end/personal-information.blade.php ENDPATH**/ ?>