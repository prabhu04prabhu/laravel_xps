<?php $__env->startSection('content'); ?>
<header class="banner-heading clear">
	<h2 class="left">About Us</h2>
	<div class="banner-nav right">
		<ul>
			<li><a href="<?php echo e('/'); ?>">Home</a></li>
			<li>About Us</li>
		</ul>
	</div>
</header>
<section class="section">
    <section class="section-content clear">
        <p><b>XPS BATTERY STORE</b> is a group concern of <b>INDIA BATTERY WORKS</b> which was started in <b>1948</b>, with over <b>70</b> years of leadership experience & served over lakhs of customers in battery trading. We have created a strong goodwill in customers heart & mind.</p>
        <p>The ultimate mission of XPS Battery Store is to deliver superior Quality Products & services to our valuable customers with our hi-tech facility.</p>
        <p><b>WE ARE AUTHORISED DEALERS & DISTRIBUTORS FOR</b></p>

    
        <?php
        $cat_info = DB::table('brandmaster')->where('Brand_Status','Active')->orderBy('BrandID', 'asc')->get();
        $brands = array();
        ?>

        <?php $__currentLoopData = $cat_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row_shop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!-- <p><b><?php echo e($row_shop->BrandName); ?></b> chargers & load testers, <b>NUMERIC, POWERZONE, DYNEX, LUMINIOUS UPS & BATTERIES</b> etc.</p> -->
        <?php array_push($brands,$row_shop->BrandName); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <p><b style="text-transform: uppercase;"><?php echo implode(", ",$brands); ?></b> chargers & load testers, <b>NUMERIC, LUMINIOUS UPS & BATTERIES</b> etc.</p>



        <!-- <p><b>AMARON, AMS BATTERIES, Z POWER, EXIDE, ELAK</b> chargers & load testers, <b>NUMERIC, POWERZONE, DYNEX, LUMINIOUS UPS & BATTERIES</b> etc.</p> -->
        <p>As for the customer satisfaction & better understanding of the products they buy, we conduct special training & development program for our staff to make easy & effective purchase.</p>
        <p>Battery is now a brand that has earned a unique status by becoming almost generic to the category with a high unaided recall with target audiences.</p>
    </section>
    <section class="about-batteries clear">
    	<h2><span>XPS BATTERY STORE</span> IS A PRIMARY TRADERS FOR</h2>
        <ul>
			<li><figcaption><img src="assets/front_end/images/battery1.jpg"><h4>AUTOMOTIVE BATTERIES</h4></figcaption></li>
			<li><figcaption><img src="assets/front_end/images/battery2.jpg"><h4>INDUSTRIAL / UPS BATTERIES</h4></figcaption></li>
			<li><figcaption><img src="assets/front_end/images/battery3.jpg"><h4>HOME UPS, OFFLINE UPS & ONLINE UPS.(STARTS FROM 400VA -20KVA)</h4></figcaption></li>
			<li><figcaption><img src="assets/front_end/images/battery4.jpg"><h4>BATTERY SPARES</figcaption></h4></li>
			<li><figcaption><img src="assets/front_end/images/battery5.jpg"><h4>BATTERY CHARGERS & TESTING EQUIPMENTS</figcaption></h4></li>
        </ul>
    </section>
    <section class="section-content clear">
    	<h3>We are authorised dealers & distributors for</h3>
        <p>Amaron, AMS Batteries, Base Terminal, Exide, Elak chargers & load testers, Numeric UPS, Powerzone, SF Sonic, Shine Technology UPS etc.</p>
        <p>As for the customer satisfaction & better understanding of the products they buy, we conduct special training & development program for our staff to make easy & effective purchase.For further details releated to our services contact our customer care no. <a href="tel:+918056821111">+91-80568 21111</a></p>
    </section>
    <section class="section-contact clear">
    	<h3>Get in Touch with us Today!</h3>
    	<h2>Feedback and Complaints</h2>
        <a href="<?php echo e('contact'); ?>">Contact US</a>
    </section>
    <section class="section-testimonial clear">
    	<h2><span>Our Happy</span> Customers</h2>
		<div class="testimonial owl-carousel owl-theme">
             <?php
            $result = DB::table('testimonial')->where('type', '!=', '')->get();
        ?>
        <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="item">
            	<figure class="left"><img src="<?php echo url('/'); ?>/image/<?php echo e($row->image); ?>"></figure>
                <aside class="right">
                	<p><?php echo e($row->content); ?></p>
                    <h3><?php echo e($row->name); ?></h3>
                </aside>
         	<div class="clear"></div>
			</div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<!-- <div class="item">
            	<figure class="left"><img src="assets/front_end/images/photo.jpg"></figure>
                <aside class="right">
                	<p>This is my first time, I am really impressed with the co. The easy way to select battery plus competitive price and timely installation and online chat helped me in selection and also claring my doubts??</p>
                    <h3>Client Name</h3>
                </aside>
         	<div class="clear"></div>
			</div>
			<div class="item">
            	<figure class="left"><img src="assets/front_end/images/photo.jpg"></figure>
                <aside class="right">
                	<p>This is my first time, I am really impressed with the co. The easy way to select battery plus competitive price and timely installation and online chat helped me in selection and also claring my doubts??</p>
                    <h3>Client Name</h3>
                </aside>
         	<div class="clear"></div>
			</div> -->
		</div>
    </section>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front_end.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binarycl/xpsbatterystore.com/resources/views/front_end/about-us.blade.php ENDPATH**/ ?>