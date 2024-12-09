<?php $__env->startSection('content'); ?>
<header class="banner-heading clear">
	<h2 class="left">Services</h2>
	<div class="banner-nav right">
		<ul>
			<li><a href="<?php echo e('/'); ?>">Home</a></li>
			<li>Services</li>
		</ul>
	</div>
</header>
<section class="section">
    <section class="section-content services clear">
    	<h3>We provide customer some unique services for our customer like</h3>
    	<article class="clear">
        	<figure><img src="assets/front_end/images/Mobile-Application.jpg"></figure>
            <aside>
            <h2>Mobile Application</h2>
            <p>Xps is India's first battery store to provide mobile application services for the customers, by which they can avail fast & reliable service, track our store using navigation, place orders and get exciting offers, also send us your feedbacks to improve our service. Lot's more services waiting for you.(Why do you need to walk for a battery store, when we bring it to your finger tips! <a href="https://play.google.com/store/apps/details?id=com.xpsbatt.gokul.xpsbattery&hl=en_IN" target="_blank">Download XPS Application</a></p>
            <a href="<?php echo e('contact'); ?>" class="link">Send Enquiry</a>
            </aside>
        </article>        
        <article class="clear">
            <aside class="showpanel">
            <h2>Spot Charging Facilities</h2>
            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.</p>
            <a href="<?php echo e('contact'); ?>" class="link">Send Enquiry</a>
            </aside>
        	<figure><img src="assets/front_end/images/Spot-Charging-Facilities.jpg"></figure>
            <aside class="hidepanel">
            <h2>Spot Charging Facilities</h2>
            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.</p>
            <a href="<?php echo e('contact'); ?>" class="link">Send Enquiry</a>
            </aside>
        </article>
    	<article class="clear">
        	<figure><img src="assets/front_end/images/Jump-Start-Services.jpg"></figure>
            <aside>
            <h2>Jump Start Services</h2>
            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.</p>
            <a href="<?php echo e('contact'); ?>" class="link">Send Enquiry</a>
            </aside>
        </article>    
        <article class="clear">
            <aside class="showpanel">
            <h2>Free Door Step Installation</h2>
            <p>XPS saves customer valuable time by providing free door step installation services. Customers can experience our service at home or office.</p>
            <a href="<?php echo e('contact'); ?>" class="link">Send Enquiry</a>
            </aside>
        	<figure><img src="assets/front_end/images/Free-Door-Step-Installation.jpg"></figure>
            <aside class="hidepanel">
            <h2>Free Door Step Installation</h2>
            <p>XPS saves customer valuable time by providing free door step installation services. Customers can experience our service at home or office.</p>
            <a href="<?php echo e('contact'); ?>" class="link">Send Enquiry</a>
            </aside>
        </article>
        <article class="clear">
        	<figure><img src="assets/front_end/images/Free-Battery-Check-Up-Camp.jpg"></figure>
            <aside>
            <h2>Free Battery Check Up Camp</h2>
            <p>We always care for your battery. As an initiative, we provide free battery check up camps at petrol bunks & in other well known areas. Through this, customers can check their batteries with free of cost.<strong>"WE SERVE YOU FREE, AS YOU ARE VALUABLE"</strong></p>
            <a href="<?php echo e('contact'); ?>" class="link">Send Enquiry</a>
            </aside>
        </article>
        <article class="clear">
            <aside class="showpanel">
            <h2>Expert Advice</h2>
            <p>XPS is the first store which provides the facility like "Expert advice", where customer can get proper guidance and exact information related to battery and UPS.YOU CALL, WE ARE ALWAYS THERE FOR U!. <a href="tel:+91-9944402002">+91-99444 02002</a></p>
            <a href="<?php echo e('contact'); ?>" class="link">Send Enquiry</a>
            </aside>
        	<figure><img src="assets/front_end/images/Expert-Advice.jpg"></figure>
            <aside class="hidepanel">
            <h2>Expert Advice</h2>
            <p>XPS is the first store which provides the facility like "Expert advice", where customer can get proper guidance and exact information related to battery and UPS.YOU CALL, WE ARE ALWAYS THERE FOR U!. <a href="tel:+91-9944402002">+91-99444 02002</a></p>
            <a href="<?php echo e('contact'); ?>" class="link">Send Enquiry</a>
            </aside>
        </article>
        <article class="clear">
        	<figure><img src="assets/front_end/images/5T-Testing-Process.jpg"></figure>
            <aside>
            <h2>5T Testing Process</h2>
            <p>This is one of our unique service which helps to improve life of ur invertor batteries by upto 25%.</p>
            <a href="<?php echo e('contact'); ?>" class="link">Send Enquiry</a>
            </aside>
        </article>
        <div class="services-tab clear">
            <ul>
                <li><figcaption><img src="assets/front_end/images/Charging-Testing.png"><h4>Charging Testing</h4></figcaption></li>
                <li><figcaption><img src="assets/front_end/images/Voltage-Testing.png"><h4>Voltage Testing</h4></figcaption></li>
                <li><figcaption><img src="assets/front_end/images/Acid-Gravity-Testing.png"><h4>Acid Gravity Testing</h4></figcaption></li>
                <li><figcaption><img src="assets/front_end/images/Temperature-Testing.png"><h4>Temperature Testing</h4></figcaption></li>
                <li><figcaption><img src="assets/front_end/images/Discharge-Testing.png"><h4>Discharge Testing</h4></figcaption></li>
            </ul>
        </div>
    </section>
    <section class="section-contact clear">
    	<h3>Get in Touch with us Today!</h3>
    	<h2>Feedback and Complaints</h2>
        <a href="<?php echo e('contact'); ?>">Contact US</a>
    </section>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front_end.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binarycl/xpsbatterystore.com/resources/views/front_end/services.blade.php ENDPATH**/ ?>