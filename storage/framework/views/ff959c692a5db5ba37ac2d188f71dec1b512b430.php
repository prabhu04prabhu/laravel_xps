<?php $__env->startSection('content'); ?>
<header class="banner-heading clear">
	<h2 class="left">Contact Us</h2>
	<div class="banner-nav right">
		<ul>
			<li><a href="<?php echo e('/'); ?>">Home</a></li>
			<li>Contact Us</li>
		</ul>
	</div>
</header>
<section class="section">
<div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15630.21110593039!2d78.1713857!3d11.6551835!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x16d8103d96be50de!2sXPS%20Battery%20Store%20(Battery%20Dealers%20Exide%2C%20Amaron)!5e0!3m2!1sen!2sin!4v1593099168282!5m2!1sen!2sin" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
    <section class="section-content contact clear">
    	<aside class="left" align="center">
			<h2>XPS Battery Store</h2>	
			<p><i class="fa fa-map-marker"></i><strong>Address</strong><br>143 Chairman Ramalingam Road,<br>
Opp.Sidhaswara Bus stop, Ammapet Main Road,<br>
Salem. Tamilnadu, India.</p>
			<p><i class="fa fa-phone"></i><strong>Phone No</strong><br><a href="tel:+0427-2908402">+0427-2908402</a></p>
			<p><i class="fa fa-envelope"></i><strong>Email</strong><br><a href="mailto:info@xpsbatterystore.com">info@xpsbatterystore.com</a></p>
		</aside>
        <fieldset class="right">
                   <?php if(\Session::has('success')): ?>
                            <div class="alert alert-success">

                                <?php echo \Session::get('success'); ?>


                            </div>
                            <?php endif; ?>

                    <?php if(\Session::has('success2')): ?>
                            <div class="alert alert-danger">

                                <?php echo \Session::get('success2'); ?>


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

			<h2>Get In Touch</h2>
			<p>Please fill in all data fields to ensure we can process your inquiry as quickly as possible (* required fields).</p>
			<!-- <form method="post" action="#" onsubmit="return validate();"> -->
            <form id="contact_form" method="post" action="<?php echo e(url('contact_enquiry')); ?>"  enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
				<div class="form-split left"><label>Name<span>*</span></label><input name="name" type="text" required></div>
				<div class="form-split right"><label>Phone No<span>*</span></label><input name="phone" type="text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="10" minlength="10" required></div>
                <label>Email<span>*</span></label><input name="email" type="email" required>
                <label>Subject<span>*</span></label><input name="subject" type="text" required>
                <label>Message<span>*</span></label>
				<textarea name="msg" rows="4" required></textarea>
                <div class="clear"></div>
				<input name="contact-button" type="submit" value="Submit" id="contact-button"/>
				<input name="reset" type="reset" value="Reset" id="reset"/>
			</form>
		</fieldset>
    </section>
    <!--<section class="contact-branch clear">
    	<h2>Branch Office</h2>
    	<ul>
        	<li>
            	<figcaption>
                    <a href="#" class="view-map" title="View Map"><i class="fa fa-map-marker"></i></a>
                    <h3>Salem</h3>
                    <p><strong>XPS Battery Store</strong>143 Chairman Ramalingam Road,<br>Opp. Sidhaswara Bus Stop,<br>Ammapet main road, Salem.</p>
                    <p><strong>Phone No</strong><a href="tel:+91-7338841112">+91-73388 41112</a></p>
                    <p><strong>Email</strong><a href="mailto:salem@xpsbatterystore.com">salem@xpsbatterystore.com</a></p>
                </figcaption>
            </li>
        	<li>
            	<figcaption>
                    <a href="#" class="view-map" title="View Map"><i class="fa fa-map-marker"></i></a>
                    <h3>Attur</h3>
                    <p><strong>XPS Battery Store</strong>1235/487, Salem-Kadalur Main road,<br>Opp. Velmurugan theater, Attur.</p>
                    <p><strong>Phone No</strong><a href="tel:+91-7338841113">+91-73388 41113</a></p>
                    <p><strong>Email</strong><a href="mailto:attur@xpsbatterystore.com">attur@xpsbatterystore.com</a></p>
                </figcaption>
            </li>
        	<li>
            	<figcaption>
                    <a href="#" class="view-map" title="View Map"><i class="fa fa-map-marker"></i></a>
                    <h3>Salem</h3>
                    <p><strong>XPS Battery Store</strong>156f, Salem Road,<br>(Near sanu international hotel),<br>Namakkal.</p>
                    <p><strong>Phone No</strong><a href="tel:+91-7397011122">+91-73970 11122</a></p>
                    <p><strong>Email</strong><a href="mailto:namakkal@xpsbatterystore.com">namakkal@xpsbatterystore.com</a></p>
                </figcaption>
            </li>
        </ul>
    </section>-->
</section>

<script src="https://www.google.com/recaptcha/api.js?render=6LcEt6MZAAAAAA6iL6AtG1lvHpeJkhkDt3dbUBql"></script>

<script type="text/javascript">

$(document).ready(function() {
     $('#contact_form').submit(function(event) {
        event.preventDefault();
        grecaptcha.ready(function() {
            grecaptcha.execute('6LcEt6MZAAAAAA6iL6AtG1lvHpeJkhkDt3dbUBql', {action: 'subscribe_newsletter'}).then(function(token) {
                $('#contact_form').prepend('<input type="hidden" name="token" value="' + token + '">');
                $('#contact_form').prepend('<input type="hidden" name="action" value="subscribe_newsletter">');
                $('#contact_form').unbind('submit').submit();
            });
        });
      });

        });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front_end.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binarycl/xpsbatterystore.com/resources/views/front_end/contact-us.blade.php ENDPATH**/ ?>