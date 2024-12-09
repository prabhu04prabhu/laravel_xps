@extends('front_end.header')
@section('content')
<header class="banner-heading clear">
	<h2 class="left">XPS Battery Kiosk</h2>
	<div class="banner-nav right">
		<ul>
			<li><a href="{{'/'}}">Home</a></li>
			<li>XPS Battery Kiosk</li>
		</ul>
	</div>
</header>
<section class="section">
    <section class="section-content franchise-content clear">
		<div class="franchise-enquiry"><a href="javascript:void(0)" class="button" data-modal="franchise-kiosk">Enquiry</a></div>
		<h3>XPS Check Point Franchisee Model Benefits & Costing:</h3>
        <ul class="list">
          <li>This  model is basically for start-up &amp; fresher who wish to start business with  low risk &amp; investment with good returns of 10k to 15k monthly.<strong></strong></li>
          <li>Franchisee  will be given complete training on Technology i.e software (ERP),website,  Mobile App. &amp;  Sales team training.</li>
          <li>Marketing  tools will be provided for franchisee for better brand promotion.</li>
          <li>Customized  &amp; most advanced ERP will be given to franchisee to track entire business  operations worth <strong>2.5 lakhs.</strong></li>
          <li>Common  business promotion activates like Theater ads, social media promotion, web  promotion for online shopping experience will be done by XPS BATTERY STORE.</li>
          <li>Special  pricing will be given for franchisee for better margins for all top brands  Exide, Amaron, SFsonic, AMS Batteries,  livguard UPS &amp; Batteries, Luminious UPS &amp; Batteries.</li>
          <li>Kiosk  will be provided by XPS BATTERY STORE for Uniform Identity including Signage&rsquo;s. <strong>KIOSK</strong> <strong>Value worth Rs.1,20,000</strong>.</li>
          <li>Testing &amp; charging equipments will be  provided by XPS BATTERY STORE</p>
			<p>CAR LOAD TESTER – 1 Nos. (ELAK BRAND)</p>
            <p>BIKE LOAD TESTER _ 1 Nos. (ELAK BRAND)</p>
            <p>DC CLAMP METER _ 1 Nos.(WARTECH)</p>
            <p>CAR BATTERY CHARGER _ 1 Nos. (AONE or ALPHA)
            <p>BIKE BATTERY CHARGER _ 1 Nos. (ELAK BRAND)</p>
            <p>HAND LOAD TESTERS CAR & BIKE _ 2 Nos. (AONE or ALPHA)</p>
            <p>HYDROMETER _ 4 Nos. (THIMSON)
            <p>JUMP START CABLE _ 1 Nos. (FIRE FLY)</p>
          </li>
          <h2>Value worth –Rs.22,500</h2>
          <li>Staff uniform & Id cards will be given by XPS BATTERY STORE for staffs. Total 3 T-shirts & 3 pant Bits.</li>
          <li>SIGNAGES & STANDIES will be provided by XPS BATTERY STORE. VALUE WORTH_ <strong>Rs.15,000.</strong></li>
          <li>BASIC STOCK Will be provided for the Value of <strong>Rs.35,000</strong></li>          
        </ul>
        <h3>Costing Chart:</h3>
        <ul class="list">
          <li>Kiosk Set-Up = <strong>Rs.1,20,000</strong>( Refundable amount ₹<strong>80,000</strong>)</li>
          <li>Erp, Website SEO,  Mobile App. Access, Social media promotion (Facebook, linkedin, Youtube) = ₹<strong>20,000</strong>.</li>
          <li>Stock = ₹<strong>35,000.</strong></li>
          <li>Signage&rsquo;s &amp; standy  = ₹<strong>15,000</strong></li>
          <li>Testing equipments = ₹<strong>22,500</strong></li>
          <li>Branding, advertising,  Training &amp; consulting  charges = ₹<strong>43,000</strong></li>
          <li>One  month rental ₹<strong>4,500</strong>  </li>
        </ul>
        <h2>Franchisee cost: Rs.2,60,000/-</h2>
    </section>
<div id="franchise-kiosk" class="modal">
  <div class="modal-content-franchise">
    <span class="close">&times;</span>
    <h1>XPS Battery Kiosk</h1>
      <fieldset class="clear">
      <!-- <form method="post" action="#" onsubmit="return validate();"> -->
               <form  id="form1" name="form1" method="post" action="{{url('franchise_enquiry')}}" enctype="multipart/form-data" onsubmit="return validate();">
                @csrf
        <div class="form-split left">
          <input type="hidden" name="title" value="XPS Battery Kiosk">
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