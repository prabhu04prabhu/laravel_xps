<?php $__env->startSection('content'); ?>
<section class="section">
    <section class="section-content dashboard manage-addresses clear">
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
    	<aside class="content right">
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
                            <br/>
        	<h3>Manage Addresses</h3>
        	<button class="accordion">Add New Address</button>
            <div class="panel clear">
                <fieldset class="clear">
                    <form method="post" action="address_process" onsubmit="">
                        <?php echo csrf_field(); ?>
                        <div class="form-split left">
                             <input type="hidden" name="userid" value="<?php echo Session::get('id'); ?>">
                            <input name="name" type="text" placeholder="Name" required></div>
                        <div class="form-split right"><input name="phone" type="text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" minlength="10" maxlength="10"   placeholder="10 Digit Mobile Number" required></div>
                        <div class="form-split left"><input name="pincode" type="text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" minlength="6" maxlength="6" placeholder="Pincode" required></div>
                        <div class="form-split right"><input name="locality" type="text" placeholder="Locality" required></div>
                        <div class="clear"></div>
                        <textarea name="address" rows="5" placeholder="Address (Area and Street)" required></textarea>
                        <input name="city" type="text" placeholder="City/District/Town" required>
                        <div class="clear"></div>
                        <div class="form-split left"><input name="landmark" type="text" placeholder="Landmark (Optional)"></div>
                        <div class="form-split right"><input name="alt_number" type="text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="10" minlength="10" placeholder="Alternate Phone No (Optional)" ></div>
                        
                        <div class="clear"></div>
                        <input name="contact-button" type="submit" value="Submit" id="contact-button"/>
                        <input name="reset" type="reset" value="Reset" id="reset"/>
                    </form>
                </fieldset>
            </div>
            
                 <?php
                    $cus_info = DB::table('customer_address')->where('cus_id',Session::get('id'))->where('status','Active')->get();
                
                ?>
                <?php $__currentLoopData = $cus_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row_info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <article class="clear">
            	<!-- <h4>Home</h4> -->
                <div class="clear"></div>
                <h2><?php echo e($row_info->name); ?></h2><br/>
                <br/><br/>
                <h3><i class="fa fa-mobile"></i> +91-<?php echo e($row_info->mobile); ?></h3>
                <p><?php echo e($row_info->address); ?></p>
                <p><?php echo e($row_info->landmark); ?></p>
                <p><?php echo e($row_info->city); ?></p>
                <nav>
                	<ul>
                    	<li><a href="#">&bull;<br>&bull;<br>&bull;</a>
                        	<ul>
                                <li><a href="edit-manage-addresses&id=<?php echo e($row_info->id); ?>">Edit</a></li>
                                <li><a href="del-address&id=<?php echo e($row_info->id); ?>">Remove</a></li>
                                <!-- <li><a href="del_address">Remove</a></li> -->
                            </ul>
                        </li>
                    </ul>
                </nav>
                </article>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            
            <!-- <article class="clear">
            	<h4>Work</h4>
                <div class="clear"></div>
                <h2>Ganesh Kumar</h2>
                <h3><i class="fa fa-mobile"></i> +91-8056821111</h3>
                <p>143 Chairman Ramalingam Road, Opp.Sidhaswara Bus Stop, Ammapet Main Road, Salem. Tamilnadu, India.</p>
                <nav>
                	<ul>
                    	<li><a href="#">&bull;<br>&bull;<br>&bull;</a>
                        	<ul>
                                <li><a href="#">Edit</a></li>
                                <li><a href="#">Remove</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </article> -->            
        </aside>
    </section>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front_end.header2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binarycl/xpsbatterystore.com/resources/views/front_end/manage-addresses.blade.php ENDPATH**/ ?>