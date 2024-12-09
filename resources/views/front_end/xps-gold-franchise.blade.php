@extends('front_end.header')
@section('content')
<header class="banner-heading clear">
	<h2 class="left">XPS Gold Franchise</h2>
	<div class="banner-nav right">
		<ul>
			<li><a href="{{'/'}}">Home</a></li>
			<li>XPS Gold Franchise</li>
		</ul>
	</div>
</header>
<section class="section">
    <section class="section-content franchise-content clear">
		<div class="franchise-enquiry"><a href="javascript:void(0)" class="button" data-modal="franchise-gold">Enquiry</a></div>
		<h3>XPS Gold Franchisee Model Benefits & Costing:</h3>
        <ul class="list">
          <li>Franchisee  has rights to open multiple outlets.</li>
          <li>XPS  BATTERY STORE already in tie-up with Indian Oil, Barath petroleum. Master  franchisee can open Battery Kiosk at selective fuel stations which will help to  create better brand visibility, reach more customers &amp; give better sales. (<strong>Note: Setting – up kiosk will be costing  Rs.1,20,000 + Rs.40,000 for Signage &amp; Branding).</strong></li>
          <li>Franchisee  will be given complete training on Technology i.e. software (ERP), Website,  Mobile App. &amp; Sales team training.</li>
          <li>Marketing  tools will be provided for GOLD franchisee for better brand promotion.</li>
          <li>Customized  &amp; most advanced ERP will be given to franchisee to track entire business  operations worth <strong>6lakhs.</strong></li>
          <li>Common  business promotion activates like Theater ads, social media promotion, web  promotion for online shopping experience will be done by XPS BATTERY STORE.</li>
          <li>Special  distributor pricing will be given for GOLD franchisee to reach more customer on  following brands Exide, Amaron, SFsonic, AMS Batteries, Microtek, Livguard UPS  &amp; Batteries, Luminious UPS &amp; Batteries.</li>
          <li>Complete  Interior &amp; execution work will be done by XPS BATTERY STORE for Uniform  Identity including Signage&rsquo;s. <strong>Value  worth Rs.1,20,000</strong></li>
          <li>Testing &amp; charging equipments will be  provided by XPS BATTERY STORE
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
          <li>SIGNAGES & STANDIES will be provided by XPS BATTERY STORE. VALUE WORTH_<strong>Rs.20,000.</strong></li>
          <li>BASIC STOCK Will be provided for the Value of <strong>Rs.1,00,000</strong></li>          
        </ul>
        <h3>Costing Chart:</h3>
        <ul class="list">
          <li>Interior (10*15Sqft) = Rs.1,20,000.</li>
          <li>Erp, Website SEO, Mobile App. Access, Social media promotion (Facebook, linkedin,  youtube) = Rs. 50,000.</li>
          <li>Stock = Rs. 1,00,000.</li>
          <li>Signage &amp; standy = Rs.20,000</li>
          <li>Testing equipments = Rs.25,000</li>
          <li>Branding, advertising, Training &amp; consulting   charges = Rs.95,000</li>
          <li>Deposit = Rs.40,000 (Refundable)</li>
        </ul>
        <h2>GOLD Franchisee cost : Rs.4,50,000/-</h2>
    </section>
<div id="franchise-gold" class="modal">
  <div class="modal-content-franchise">
    <span class="close">&times;</span>
    <h1>XPS Gold Franchise</h1>
      <fieldset class="clear">
      <!-- <form method="post" action="#" onsubmit="return validate();"> -->
               <form  id="form1" name="form1" method="post" action="{{url('franchise_enquiry')}}" enctype="multipart/form-data" onsubmit="return validate();">
                @csrf
        <div class="form-split left">
          <input type="hidden" name="title" value="XPS Gold Franchise">
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
            @php
                  $locations = DB::table('tbl_cities')->get();
                    @endphp
                    @foreach ($locations as $row)
                    <option value="{{$row->city_name}}">{{$row->city_name}}</option>
                @endforeach
          </select>
                </div>
        <input name="contact-button" type="submit" value="Submit" id="contact-button"/>
      </form>
    </fieldset>
  </div>
</div>
</section>
@endsection