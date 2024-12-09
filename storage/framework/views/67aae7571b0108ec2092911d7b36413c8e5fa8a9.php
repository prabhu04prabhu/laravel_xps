<?php $__env->startSection('content'); ?>
<header class="banner-heading clear">
	<h2 class="left">Gallery</h2>
	<div class="banner-nav right">
		<ul>
			<li><a href="<?php echo e('/'); ?>">Home</a></li>
			<li>Gallery</li>
		</ul>
	</div>
</header>
<section class="section">
    <section class="section-content photo-gallery clear">
    	<ul id="grid">
    		<?php

              $gallery = DB::table('gallery_category')->select("gallery_category.*", DB::raw("(SELECT image FROM images WHERE images.cat_id = gallery_category.cat_id limit 1) as image"))->get();

                ?>
                 <?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><a href="image_gallery&<?php echo e($row->cat_id); ?>"  ><span></span><img src="<?php echo url('/'); ?>/image/<?php echo e($row->image); ?>"><figcaption><div><?php echo e($row->name); ?></div></figcaption></a><!-- <br/>
                 <h4 style="text-align: center;"><?php echo e($row->name); ?></h4> --></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
<!-- 			<li><a href="assets/front_end/images/Gallery/1.jpg" rel="lightbox[group1]"><img src="assets/front_end/images/Gallery/1.jpg"><figcaption><div>Gallery Name</div></figcaption></a>
			<a href="assets/front_end/images/Gallery/2.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/3.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/4.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/5.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/6.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/7.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/8.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/9.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/10.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/11.jpg" rel="lightbox[group1]"></a></li>
            
			<li><a href="assets/front_end/images/Gallery/1.jpg" rel="lightbox[group1]"><img src="assets/front_end/images/Gallery/1.jpg"><figcaption><div>Gallery Name</div></figcaption></a>
			<a href="assets/front_end/images/Gallery/2.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/3.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/4.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/5.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/6.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/7.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/8.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/9.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/10.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/11.jpg" rel="lightbox[group1]"></a></li>
            
			<li><a href="assets/front_end/images/Gallery/1.jpg" rel="lightbox[group1]"><img src="assets/front_end/images/Gallery/1.jpg"><figcaption><div>Gallery Name</div></figcaption></a>
			<a href="assets/front_end/images/Gallery/2.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/3.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/4.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/5.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/6.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/7.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/8.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/9.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/10.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/11.jpg" rel="lightbox[group1]"></a></li> -->
  		</ul>
    </section>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front_end.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binarycl/xpsbatterystore.com/resources/views/front_end/gallery.blade.php ENDPATH**/ ?>