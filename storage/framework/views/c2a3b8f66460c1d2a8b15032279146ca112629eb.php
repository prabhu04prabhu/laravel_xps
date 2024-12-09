<?php $__env->startSection('content'); ?>
<header class="banner-heading clear">
	<h2 class="left">XPS Silver Franchise</h2>
	<div class="banner-nav right">
		<ul>
			<li><a href="<?php echo e('/'); ?>">Home</a></li>
			<li>XPS Silver Franchise</li>
		</ul>
	</div>
</header>
<section class="section">
    <section class="section-content franchise-content clear">
		<div class="franchise-enquiry"><a href="javascript:void(0)" class="button" data-modal="franchise-silver">Enquiry</a></div>
		<h3>XPS Silver Franchisee Model Benefits & Costing:</h3>
        <ul class="list">
          <li>Franchisee  has rights to open only 1 outlet.</li>
          <li>Franchisee  will be given complete training on Technology i.e. Software (ERP), Website,  Mobile App. &amp; Sales team training.</li>
          <li>Marketing  tools will be provided for master franchisee for better brand promotion.</li>
          <li>Customized  &amp; most advanced ERP will be given to franchisee to track entire business  operations worth <strong>2.5 lakhs.</strong></li>
          <li>Common  business promotion activates like Theater ads, social media promotion, web  promotion for online shopping experience will be done by XPS BATTERY STORE.</li>
          <li>Special  pricing will be given for franchisee to reach more customers &amp; build dealer  network For eg. Exide, Amaron, SFsonic, AMS Batteries, livguard UPS &amp;  Batteries, Luminious UPS &amp; Batteries.</li>
          <li>Complete  Interior &amp; execution work will be done by XPS BATTERY STORE for Uniform  Identity including Signage. <strong>Value worth  Rs.1,20,000</strong>.</li>
          <li>Testing  &amp; charging equipments will be provided by XPS BATTERY STORE
			<p>CAR LOAD TESTER – 1 Nos. (ELAK BRAND)</p>
            <p>BIKE LOAD TESTER _ 1 Nos. (ELAK BRAND)</p>
            <p>DC CLAMP METER _ 1 Nos.(WARTECH)</p>
            <p>CAR BATTERY CHARGER _ 1 Nos. (AONE or ALPHA)</p>
            <p>BIKE BATTERY CHARGER _ 1 Nos. (ELAK BRAND)</p>
            <p>HAND LOAD TESTERS CAR & BIKE _ 2 Nos. (AONE or ALPHA)</p>
            <p>HYDROMETER _ 4 Nos. (THIMSON)</p>
            <p>JUMP START CABLE _ 1 Nos. (FIRE FLY)</p>
          </li>
          <h2>Value worth –Rs.25,000</h2>
          <li>Staff uniform & Id cards will be given by XPS BATTERY STORE for staffs. Total 6 T-shirts & 6 pant Bits.</li>
          <li>SIGNAGES & STANDIES will be provided by XPS BATTERY STORE. VALUE WORTH_ <strong>Rs.20,000.</strong></li>
          <li>BASIC STOCK Will be provided for the Value of <strong>Rs.70,000</strong></li>          
        </ul>
        <h3>Costing Chart:</h3>
        <ul class="list">
          <li>Interior (10*15Sqft) = Rs.1,20,000.</li>
          <li>Erp, Website SEO, Mobile App. Access,Social media promotion (Facebook, linkedin,  youtube) = Rs. 25,000.</li>
          <li>Stock = Rs. 70,000.</li>
          <li>Signage &amp; Standy = Rs.20,000</li>
          <li>Testing equipments = Rs.25,000</li>
          <li>Branding, advertising, Training &amp; consulting   charges = Rs.65,000</li>
          <li>Deposit = Rs.25,000 (Refundable)</li>
        </ul>
          <h2>SILVER Franchisee Cost: Rs.3,50,000/-</h2>
    </section>
        <div id="franchise-silver" class="modal">
  <div class="modal-content-franchise">
    <span class="close">&times;</span>
    <h1>XPS Silver Franchise</h1>
      <fieldset class="clear">
      <!-- <form method="post" action="#" onsubmit="return validate();"> -->
               <form  id="form1" name="form1" method="post" action="<?php echo e(url('franchise_enquiry')); ?>" enctype="multipart/form-data" onsubmit="return validate();">
                <?php echo csrf_field(); ?>
        <div class="form-split left">
          <input type="hidden" name="title" value="XPS Silver Franchise">
          <input name="name" type="text" placeholder="Name" required>            
                </div>
        <div class="form-split right">
                    <input name="email" type="email" placeholder="Email" required>                
                </div>
        <input name="mobile" type="text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="10" minlength="10" placeholder="Mobile No" required>
        <textarea name="address" rows="2" placeholder="Address" required></textarea>
              <!--   <div class="file-upload">
                    <label for="upload" class="file-upload__label">Upload Documents </label>
                    <input type="hidden" name="mode" value="Upload Documents">
                    <input id="upload" class="file-upload__input" type="file" accept=".doc,.docx,application/pdf" name="file_upload">
                </div> -->
              <!--   <div class="clear"></div><br/>
                    <label for="upload">Upload Documents </label><br/><br/>
                    <input id="upload"  type="file" accept=".doc,.docx,application/pdf" name="file_upload"> -->
                    <div class="clear"></div>
        <div class="custom-select">
         <select class="select-options" name="franchise_locations">
            <option value="Franchise Locations">Franchise Locations</option>
            <?php
                  $locations = DB::table('tbl_cities')->get();
                    ?>
                    <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($row->city_name); ?>"><?php echo e($row->city_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
                </div>
        <input name="contact-button" type="submit" value="Submit" id="contact-button"/>
      </form>
    </fieldset>
  </div>
</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front_end.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binarycl/xpsbatterystore.com/resources/views/front_end/xps-silver-franchise.blade.php ENDPATH**/ ?>