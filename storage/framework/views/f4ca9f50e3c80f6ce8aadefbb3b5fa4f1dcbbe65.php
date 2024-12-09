<?php $__env->startSection('content'); ?>
<header class="banner-heading clear">
             <?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <?php if($index == 0): ?>

    <h2><?php echo e($row->name); ?></h2>
    <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
    <div class="banner-nav right">
        <ul>
            <li><a href="<?php echo e('/'); ?>">Home</a></li>
            <li>Gallery</li>
            <li><?php echo e($row->name); ?></li>
        </ul>
    </div>
</header>
<section class="section">
    <section class="section-content clear">
    	<div class="photo-gallery clear">
            <ul id="grid">
                  <?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><a href="<?php echo url('/'); ?>/image/<?php echo e($row->image); ?>"><span></span><img src="<?php echo url('/'); ?>/image/<?php echo e($row->image); ?>"></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                <!-- <li><a href="images/Gallery/2.jpg"><img src="images/Gallery/2.jpg"></a></li>
                <li><a href="images/Gallery/3.jpg"><img src="images/Gallery/3.jpg"></a></li>
                <li><a href="images/Gallery/4.jpg"><img src="images/Gallery/4.jpg"></a></li>
                <li><a href="images/Gallery/5.jpg"><img src="images/Gallery/5.jpg"></a></li>
                <li><a href="images/Gallery/6.jpg"><img src="images/Gallery/6.jpg"></a></li>
                <li><a href="images/Gallery/7.jpg"><img src="images/Gallery/7.jpg"></a></li>
                <li><a href="images/Gallery/8.jpg"><img src="images/Gallery/8.jpg"></a></li>
                <li><a href="images/Gallery/9.jpg"><img src="images/Gallery/9.jpg"></a></li>
                <li><a href="images/Gallery/10.jpg"><img src="images/Gallery/10.jpg"></a></li>
                <li><a href="images/Gallery/11.jpg"><img src="images/Gallery/11.jpg"></a></li>
                <li><a href="images/Gallery/12.jpg"><img src="images/Gallery/12.jpg"></a></li>
                <li><a href="images/Gallery/13.jpg"><img src="images/Gallery/13.jpg"></a></li>
                <li><a href="images/Gallery/14.jpg"><img src="images/Gallery/14.jpg"></a></li>
                <li><a href="images/Gallery/15.jpg"><img src="images/Gallery/15.jpg"></a></li>
                <li><a href="images/Gallery/16.jpg"><img src="images/Gallery/16.jpg"></a></li>
                <li><a href="images/Gallery/17.jpg"><img src="images/Gallery/17.jpg"></a></li>
                <li><a href="images/Gallery/18.jpg"><img src="images/Gallery/18.jpg"></a></li>
                <li><a href="images/Gallery/19.jpg"><img src="images/Gallery/19.jpg"></a></li>
                <li><a href="images/Gallery/20.jpg"><img src="images/Gallery/20.jpg"></a></li>
                <li><a href="images/Gallery/21.jpg"><img src="images/Gallery/21.jpg"></a></li>
                <li><a href="images/Gallery/22.jpg"><img src="images/Gallery/22.jpg"></a></li>
                <li><a href="images/Gallery/23.jpg"><img src="images/Gallery/23.jpg"></a></li>
                <li><a href="images/Gallery/24.jpg"><img src="images/Gallery/24.jpg"></a></li>
                <li><a href="images/Gallery/25.jpg"><img src="images/Gallery/25.jpg"></a></li>
                <li><a href="images/Gallery/26.jpg"><img src="images/Gallery/26.jpg"></a></li>
                <li><a href="images/Gallery/27.jpg"><img src="images/Gallery/27.jpg"></a></li>
                <li><a href="images/Gallery/28.jpg"><img src="images/Gallery/28.jpg"></a></li> -->
            </ul>
        </div>
    </section>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front_end.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binarycl/xpsbatterystore.com/resources/views/front_end/image-gallery.blade.php ENDPATH**/ ?>