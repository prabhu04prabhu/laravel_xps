<?php $__env->startSection('content'); ?>

<header class="banner-heading clear">
	<h2 class="left">Testimonials</h2>
	<div class="banner-nav right">
		<ul>
			<li><a href="<?php echo e('/'); ?>">Home</a></li>
			<li>Testimonials</li>
		</ul>
	</div>
</header>
<section class="section">
    <section class="section-content testimonials clear">
        <aside class="left" align="center">
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
        </aside>
        <div class="clear"></div>

	<div class="add-testimonial"><a href="javascript:void(0)" class="button" data-modal="Add-Testimonials">Add Testimonials</a></div>
    	<h2>What our clients say about us.</h2>
        <ul>
            <?php
                $testimonial = DB::table('testimonial')->where('status', '=', 'Approved')->get();
            ?>
            <?php $__currentLoopData = $testimonial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        	<li>
            <figcaption>
            <p><?php echo e($row->content); ?></p>
            <h3><?php echo e($row->name); ?></h3>
            <img src="<?php echo url('/'); ?>/image/<?php echo e($row->image); ?>">
            </figcaption>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!--         	<li>
            <figcaption>
            <p>This is my first time, I am really impressed with the co. The easy way to select battery plus competitive price and timely installation.</p>
            <h3>Client Name</h3>
            <img src="assets/front_end/images/photo.jpg">
            </figcaption>
            </li>
        	<li>
            <figcaption>
            <p>This is my first time, I am really impressed with the co. The easy way to select battery plus competitive price and timely installation.</p>
            <h3>Client Name</h3>
            <img src="assets/front_end/images/photo.jpg">
            </figcaption>
            </li>
        	<li>
            <figcaption>
            <p>This is my first time, I am really impressed with the co. The easy way to select battery plus competitive price and timely installation.</p>
            <h3>Client Name</h3>
            <img src="assets/front_end/images/photo.jpg">
            </figcaption>
            </li>
        	<li>
            <figcaption>
            <p>This is my first time, I am really impressed with the co. The easy way to select battery plus competitive price and timely installation.</p>
            <h3>Client Name</h3>
            <img src="assets/front_end/images/photo.jpg">
            </figcaption>
            </li>
        	<li>
            <figcaption>
            <p>This is my first time, I am really impressed with the co. The easy way to select battery plus competitive price and timely installation.</p>
            <h3>Client Name</h3>
            <img src="assets/front_end/images/photo.jpg">
            </figcaption>
            </li> -->
        </ul>
    </section>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front_end.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binarycl/xpsbatterystore.com/resources/views/front_end/testimonials.blade.php ENDPATH**/ ?>