<?php $__env->startSection('content'); ?>
<header class="banner-heading clear">
	<h2 class="left">XPS Master Franchise</h2>
	<div class="banner-nav right">
		<ul>
			<li><a href="<?php echo e('/'); ?>">Home</a></li>
			<li>XPS Master Franchise</li>
		</ul>
	</div>
</header>
<section class="section">
    <section class="section-content franchise-content clear">
		<div class="franchise-enquiry"><a href="javascript:void(0)" class="button" data-modal="franchise-master">Enquiry</a></div>
		<h3>Master Franchisee Model Benefits & Costing:</h3>
        <ul class="list">
          <li>Master  Franchisee will be given based on districts.</li>
          <li>Master  franchisee will be given rights to give sub franchisee in a particular region  or city. Also master franchisee has access to open multiple outlets within  selected region or city until or otherwise it does not disturb sub Franchisee.</li>
          <li>XPS  BATTERY STORE already in tie-up with Indian Oil, Barath petroleum. Master  franchisee can open Battery Kiosk or has right to give sub franchisee at  selective fuel stations which will help to create better brand visibility,  reach more customers &amp; to generate better sales. (Note: Setting – up kiosk  will be costing <strong>Rs.1,20,000 + Rs.40,000  for Signage &amp; Branding)</strong></li>
          <li>Master  franchisee will be given complete training on Technology i.e. software (ERP),  Website, Mobile App. &amp; sales team training.</li>
          <li>Customized  &amp; most advanced ERP will be given to master franchisee to track entire  business operations worth <strong>10lakhs.</strong></li>
          <li>Marketing  tools will be provided for master franchisee for better brand promotion.</li>
          <li>Special  distributor pricing will be given for Master franchisee to reach more customer  on following brands Exide, Amaron, SFsonic, AMS Batteries, Microtek, Livguard  UPS &amp; Batteries, Luminious UPS &amp; Batteries.</li>
          <li>Common  business promotion activates like Theater ads, social media promotion, web  promotion for online shopping experience will be done by XPS BATTERY STORE.</li>
          <li>Complete  Interior &amp; execution work will be done by XPS BATTERY STORE for Uniform  Identity.</li>
          <li>Testing &amp; charging equipments will be  provided by XPS BATTERY STORE
            <p>MIDTRONICS ADVANCED BATTERY TESTER -1 Nos.</p>
            <p>CAR LOAD TESTER – 1 Nos. (ELAK BRAND)</p>
            <p>BIKE LOAD TESTER _ 1 Nos. (ELAK BRAND)</p>
            <p>DC CLAMP METER _ 2 Nos.(WARTECH)</p>
            <p>CAR BATTERY CHARGER _ 1 Nos. (ELAK OR FIREFLY)</p>
            <p>BIKE BATTERY CHARGER _ 1 Nos. (ELAK OR FIREFLY BRAND)</p>
            <p>HAND LOAD TESTERS CAR & BIKE _ 2 Nos. (AONE or ALPHA)</p>
            <p>HYDROMETER _ 4 Nos. (THIMSON)</p>
            <p>JUMP START CABLE _ 1 Nos. (FIRE FLY)</p>
          </li>
        </ul>
		<h2>Value worth –Rs.1,00,000</h2>
    </section>
    <div id="franchise-master" class="modal">
  <div class="modal-content-franchise">
    <span class="close">&times;</span>
    <h1>XPS Master Franchise</h1>
      <fieldset class="clear">
      <!-- <form method="post" action="#" onsubmit="return validate();"> -->
               <form  id="form1" name="form1" method="post" action="<?php echo e(url('franchise_enquiry')); ?>" enctype="multipart/form-data" onsubmit="return validate();">
                <?php echo csrf_field(); ?>
        <div class="form-split left">
          <input type="hidden" name="title" value="XPS Master Franchise">
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
                <!-- <div class="clear"></div><br/>
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
<?php echo $__env->make('front_end.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binarycl/xpsbatterystore.com/resources/views/front_end/xps-master-franchise.blade.php ENDPATH**/ ?>