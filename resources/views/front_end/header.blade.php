<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<?php 
$filename = basename($_SERVER['PHP_SELF']); 
?>
<?php 
              if((Session::get('id')) != ''){
                $details = DB::table('users')->where('id',Session::get('id'))->get();
            }
                ?>
<title>XPS Battery Store |  Exide Dealers | Amaron Dealers | AMS Batteries | Poweron Dealers | Base Dealers | UPS Dealers | Inverters Salem, Attur, Namakkal</title>
<link href="assets/front_end/css/style.css" rel="stylesheet" type="text/css">
<link href="assets/front_end/css/responsive.css" rel="stylesheet" type="text/css">
<link rel="icon" type="image/png" href="assets/front_end/favicon.png">
<script type='text/javascript' src='assets/front_end/js/jquery.js'></script>
<link href="assets/front_end/css/owl.carousel.min.css" rel="stylesheet" type="text/css">
<link href="assets/front_end/css/owl.theme.default.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet prefetch" href="assets/front_end/css/slick.min.css">
<link rel="stylesheet prefetch" href="assets/front_end/css/slider.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/css/bootstrap-notify.css" integrity="sha512-rQESClU96g/m7xFESOEisIKXZapchOd6+HfUTaMzGXtBFfF837IDR0utlmq58hgoAqGUWQn9LeZbw2DtOgaWYg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel='stylesheet' href='assets/front_end/sweetalert/sweetalert.min.css'>
<script src='assets/front_end/sweetalert/sweetalert.min.js'></script>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
}
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
<script src="assets/front_end/js/image-zoom.js"></script>
<script>
	$(document).ready(function(){
		$('#imageZoom, #imageZoom2').imageZoom();
	});
</script>
<link href="assets/front_end/css/simplelightbox.min.css" rel="stylesheet" type="text/css">
<body>
<div id="mySidenav" class="sidenav">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<ul>
		<li class="hide"><a href="#">Shop by Category <i class="fa fa-angle-down"></i></a>
			<ul>
				<li><a href="#">Car Batteries</a></li>
				<li><a href="#">Inverter Batteries</a></li>
				<li><a href="#">2 Wheeler Batteries</a></li>
				<li><a href="#">Inverter & Battery Combos</a></li>
				<li><a href="#">Solar Energy Solutions</a></li>
				<li><a href="#">VRLA/SMF Batteries</a></li>
				<li><a href="#">Inverter & UPS</a></li>
				<li><a href="#">Solar Inverter/UPS</a></li>
				<li><a href="#">Other Products</a></li>
			</ul>
        </li>
		<li><a href="{{'/'}}">Home</a></li>
        <li><a href="{{'about-us'}}">About us</a></li>
        <li><a href="{{'services'}}">Services</a></li>
        <li><a href="{{'image_gallery&1'}}">Gallery</a></li>
        <!--<li><a href="{{'gallery'}}">Gallery</a></li>-->
		<li><a href="{{'maintenance_tips'}}">Maintenance Tips</a></li>
        <li><a href="{{'testimonials'}}">Testimonials</a></li>
        <li><a href="{{'career'}}">Career</a></li>
        <li><a href="{{'contact'}}">Contact Us</a></li>
        <li><a href="{{'faq'}}">FAQ</a></li>
        <!-- <li class="hide"><p>Salem, Tamil Nadu.</p></li> -->
	</ul>
</div>
<div id="quick-shop" class="modal clear">
	<div class="quick-shop-modal">
    	<span class="close">&times;</span>
    	<aside class="quick-shop-image">
        	<img id="imageZoom" src="assets/front_end/images/quick-shop.jpg">
        </aside>
    	<aside class="quick-shop-content">
        	<h2>Exide FEM0-IMST1000</h2>
            <h3>QUICK OVERVIEW</h3>
            <p><strong>Product Brand</strong> : Exide<br>
<strong>Model Number</strong> : FEM0-IMST1000<br>
<strong>Product Name</strong> : Exide Inva Master<br>
<strong>Product Capacity</strong> : 100 Ah<br>
<strong>Product Warranty</strong> : 0-36 Months Free</p>
			<h4>Availability : <span>In Stock</span></h4>
            <figcaption>Price: <del>Rs. 7921</del> <span>20% OFF</span> <strong>₹ 5721</strong></figcaption>
			<div class="battery-price clear">
				<input name="With Old Battery" class="checkbox-custom" id="checkbox-1" type="checkbox" value="With Old Battery">
				<label class="checkbox-custom-label" for="checkbox-1" >With Old Battery: <strong>Rs. 6349</strong></label>
			</div>
			<div class="battery-price clear">
				<input name="Without Old Battery" class="checkbox-custom" id="checkbox-2" type="checkbox" value="Without Old Battery">
				<label class="checkbox-custom-label" for="checkbox-2" >Without Old Battery: <strong>Rs. 7849</strong></label>
			</div>
            <a href="#" class="cd-add-to-cart" data-price="4000"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
        </aside>
	</div>
</div>
<div class="enquiry-nav"><a href="javascript:void(0)" class="button" data-modal="myModal">Send Enquiry</a></div>
<div id="myModal" class="modal">
	<div class="modal-content">
    <span class="close">&times;</span>
    	<fieldset class="clear">
        	<h2>Send Enquiry</h2>
			<!-- <form method="post" action="#" onsubmit="return validate();"> -->
                <form id="enq_form" method="post" action="{{url('send_enquiry')}}" onsubmit="return validate();" enctype="multipart/form-data">
                    @csrf
				<input name="name" type="text" placeholder="Name" required>
				<input name="phone" type="text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="10" placeholder="Phone No" required>
				<input name="email" type="email" placeholder="Email" required>
				<textarea name="msg" rows="4" placeholder="Message" required></textarea>
                <div class="clear"></div>
				<input name="contact-button" type="submit" value="Send" id="contact-button"/>
			</form>
		</fieldset>
	</div>
</div>
<div id="location" class="modal">
	<div class="modal-content-city">
    <span class="close">&times;</span>
    	<h3><i class="fa fa-map-marker" style="font-size: 40px;"></i>&nbsp;Choose your State & City</h3>
    	<fieldset class="clear">
			<form method="post" action="#">
				<div class="form-split left">
                    <label>State<span>*</span></label><br/>
                    <div class="">
                        <select class="form-control select-option" name="state" id="inputState">
                        <option value="SelectState">-- Select State --</option>
                        <option value="Andra Pradesh">Andra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madya Pradesh">Madya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Orissa">Orissa</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttaranchal">Uttaranchal</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="West Bengal">West Bengal</option>
                        <!-- <option disabled style="background-color:#aaa; color:#fff">UNION Territories</option> -->
                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                        <option value="Daman and Diu">Daman and Diu</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Lakshadeep">Lakshadeep</option>
                        <option value="Pondicherry">Pondicherry</option>
                      </select>
                        <!-- <select name="City">
                            <option value="Select City">Select City</option>
                            <option value="Salem">Salem</option>
                            <option value="Salem">Salem</option>
                            <option value="Salem">Salem</option>
                            <option value="Salem">Salem</option>
                            <option value="Salem">Salem</option>
                            <option value="Salem">Salem</option>
                            <option value="Salem">Salem</option>
                        </select> -->
                    </div>
                </div>
                <div class="form-split right">
                    <label>City<span>*</span></label><br/>
                    <div class="">
                        <select class="form-control select-option" name="city" id="inputDistrict">
                            <option value="">-- Select City -- </option>
                        </select>
                        <!-- <select name="City">
                            <option value="Select District">Select District</option>
                            <option value="Ariyalur">Ariyalur</option>
                            <option value="Ariyalur">Ariyalur</option>
                            <option value="Ariyalur">Ariyalur</option>
                            <option value="Ariyalur">Ariyalur</option>
                            <option value="Ariyalur">Ariyalur</option>
                            <option value="Ariyalur">Ariyalur</option>
                            <option value="Ariyalur">Ariyalur</option>
                        </select> -->
                    </div>
                </div>
				<input name="contact-button" type="submit" value="Continue" id="contact-button"/>
			</form>
		</fieldset>
	</div>
</div>
<div id="Add-Testimonials" class="modal clear">
  <div class="testimonials-modal-content">
        <span class="close">&times;</span>
        <fieldset class="clear">
            <h2>Add Testimonials</h2>
            <!-- <form method="post" action="#" onsubmit="return validate();"> -->
                <form id="form1" name="form1" method="post" action="{{url('testimonial_cus')}}" onsubmit="return validate();" enctype="multipart/form-data">
                @csrf
                <input name="name" type="text" placeholder="Enter your name" required>
                <input name="Company_name" type="text" placeholder="Enter your company name" required>
                <aside class="left"><input name="email" type="email" placeholder="Enter your email" required></aside>
                <aside class="right"><input name="mobile" type="text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="10" minlength="10" placeholder="Enter your mobile no" required></aside>
                <div class="clear"></div>
                <div class="file-upload">
                    <label for="upload" class="file-upload__label">Upload Your Photo</label>
                    <input type="hidden" name="mode" value="Upload Your Resume">
                    <input id="upload" class="file-upload__input" type="file" name="customer_photo[]">
                </div>
                <div class="clear"></div>
                <textarea name="Content" rows="3" placeholder="Content" required></textarea>
                <div class="clear"></div>
                <input name="contact-button" type="submit" value="Submit" id="contact-button"/>
            </form>
        </fieldset>
  </div>
</div>
<?php /*<div id="franchise" class="modal">
	<div class="modal-content-franchise">
    <span class="close">&times;</span>
    	<fieldset class="clear">
			<!-- <form method="post" action="#" onsubmit="return validate();"> -->
               <form  id="form1" name="form1" method="post" action="{{url('franchise_enquiry')}}" enctype="multipart/form-data" onsubmit="return validate();">
                @csrf
				<div class="form-split left">
					<input name="name" type="text" placeholder="Name" required>            
                </div>
				<div class="form-split right">
                    <input name="email" type="email" placeholder="Email" required>                
                </div>
				<input name="mobile" type="text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="10" placeholder="Mobile No" required>
				<textarea name="address" rows="2" placeholder="Address" required></textarea>
                <div class="file-upload">
                    <label for="upload" class="file-upload__label">Upload Documents </label>
                    <input type="hidden" name="mode" value="Upload Documents">
                    <input id="upload" class="file-upload__input" type="file" name="file_upload" accept="image/x-png,image/gif,image/jpeg">
                </div>
				<div class="custom-select">
					<select name="franchise_locations">
						<option value="Franchise Locations">Franchise Locations</option>
						<option value="Salem">Salem</option>
						<option value="Chennai">Chennai</option>
						<option value="Ariyalur">Ariyalur</option>
						<option value="Salem">Salem</option>
						<option value="Chennai">Chennai</option>
						<option value="Ariyalur">Ariyalur</option>
					</select>
                </div>
				<input name="contact-button" type="submit" value="Submit" id="contact-button"/>
			</form>
		</fieldset>
	</div>
</div> */ ?>
<div class="wrapper">
<header class="header clear">
    <header class="header-top clear">
        <aside class="header-contact left">
            <p>Want to order<br>or Have any Query?</p>
            <a href="tel:+918056821111">+91-80568 21111</a>
        </aside>
        <aside class="header-social-media left">
            <a href="https://www.facebook.com/xpsbatterystore" target="_blank" class="Facebook"><i class="fa fa-facebook"></i></a>
            <a href="https://api.whatsapp.com/send?phone=918056821111" target="_blank" class="Whatsapp"><i class="fa fa-whatsapp"></i></a>
            <a href="#" class="Instagram"><i class="fa fa-instagram"></i></a>
            <!-- <a href="#" class="Twitter"><i class="fa fa-twitter"></i></a> -->
        </aside>
        <?php 
          if((Session::get('id')) != ''){
            ?>
            <?php 
            $details = DB::table('users')->where('id',Session::get('id'))->get();
            ?>
             @foreach($details as $row)
            <aside class="logout  right">
            <a href="logout">Logout</a>
            </aside>
            <aside class="header-name myaccount myaccounts right desk_view">            
            <p style="margin:0;" onclick="location.href='personal-information'"><svg onclick="redirectpage();" viewBox="0 0 512 512"><path d="M437.02,330.98c-27.883-27.882-61.071-48.523-97.281-61.018C378.521,243.251,404,198.548,404,148			C404,66.393,337.607,0,256,0S108,66.393,108,148c0,50.548,25.479,95.251,64.262,121.962			c-36.21,12.495-69.398,33.136-97.281,61.018C26.629,379.333,0,443.62,0,512h40c0-119.103,96.897-216,216-216s216,96.897,216,216			h40C512,443.62,485.371,379.333,437.02,330.98z M256,256c-59.551,0-108-48.448-108-108S196.449,40,256,40			c59.551,0,108,48.448,108,108S315.551,256,256,256z"></path></svg>
            My Profile</p>
            </aside>
            <aside class="header-name myaccount myaccounts right mob_view">            
            <svg onclick="redirectpage();" viewBox="0 0 512 512"><path d="M437.02,330.98c-27.883-27.882-61.071-48.523-97.281-61.018C378.521,243.251,404,198.548,404,148			C404,66.393,337.607,0,256,0S108,66.393,108,148c0,50.548,25.479,95.251,64.262,121.962			c-36.21,12.495-69.398,33.136-97.281,61.018C26.629,379.333,0,443.62,0,512h40c0-119.103,96.897-216,216-216s216,96.897,216,216			h40C512,443.62,485.371,379.333,437.02,330.98z M256,256c-59.551,0-108-48.448-108-108S196.449,40,256,40			c59.551,0,108,48.448,108,108S315.551,256,256,256z"></path></svg>
            </aside>
            <!-- <aside class="myaccount right">
			<svg viewBox="0 0 512 512"><path d="M437.02,330.98c-27.883-27.882-61.071-48.523-97.281-61.018C378.521,243.251,404,198.548,404,148			C404,66.393,337.607,0,256,0S108,66.393,108,148c0,50.548,25.479,95.251,64.262,121.962			c-36.21,12.495-69.398,33.136-97.281,61.018C26.629,379.333,0,443.62,0,512h40c0-119.103,96.897-216,216-216s216,96.897,216,216			h40C512,443.62,485.371,379.333,437.02,330.98z M256,256c-59.551,0-108-48.448-108-108S196.449,40,256,40			c59.551,0,108,48.448,108,108S315.551,256,256,256z"/></svg>
           
        </aside> -->
            <aside class="header-name user-name  right">
              <a href="#">Hi {{$row->first_name}}</a>
            </aside>
            @endforeach
            <?php } else {?>
        <aside class="header-login log right">
        	<a href="{{'login-and-register'}}">Login / Sign Up</a>
        </aside>
        <?php }?>
        <!-- <aside class="header-location right">
        	<a href="javascript:void(0)" class="button" data-modal="location">Salem, Tamil Nadu.</a>
        </aside> -->
    </header>
    <div id="stuck_container">
    <header class="header-inner clear">
    	<h1 class="left"><a href="{{'/'}}"><img src="assets/front_end/images/logo.png" alt="XPS Battery Store" title="XPS Battery Store"></a></h1>
        <nav class="nav left">
            <ul>
                <li style="display:none;"><a href="#">Shop by Category <i class="fa fa-angle-down"></i></a>
                	<div class="subnav clear">
                        <ul>
                            <li><a href="#">Car Batteries</a>
                				<div class="subnav-inner clear">
                                    <ul>
                                    	<h3>By Manufacturer</h3>
                                        <li><a href="#">Car Batteries</a></li>
                                        <li><a href="#">Inverter Batteries</a></li>
                                        <li><a href="#">2 Wheeler Batteries</a></li>
                                        <li><a href="#">Inverter & Battery Combos</a></li>
                                        <li><a href="#">Solar Energy Solutions</a></li>
                                        <li><a href="#">VRLA/SMF Batteries</a></li>
                                        <li><a href="#">Inverter & UPS</a></li>
                                        <li><a href="#">Solar Inverter/UPS</a></li>
                                        <li><a href="#">Other Products</a></li>
                                    </ul>
                                    <ul>
                                    	<h3>By Brand</h3>
                                        <li><a href="#">Car Batteries</a></li>
                                        <li><a href="#">Inverter Batteries</a></li>
                                        <li><a href="#">2 Wheeler Batteries</a></li>
                                        <li><a href="#">Inverter & Battery Combos</a></li>
                                        <li><a href="#">Solar Energy Solutions</a></li>
                                        <li><a href="#">VRLA/SMF Batteries</a></li>
                                        <li><a href="#">Inverter & UPS</a></li>
                                        <li><a href="#">Solar Inverter/UPS</a></li>
                                        <li><a href="#">Other Products</a></li>
                                    </ul>
                                    <ul>
                                    	<h3>By Capapcity</h3>
                                        <li><a href="#">Car Batteries</a></li>
                                        <li><a href="#">Inverter Batteries</a></li>
                                        <li><a href="#">2 Wheeler Batteries</a></li>
                                        <li><a href="#">Inverter & Battery Combos</a></li>
                                        <li><a href="#">Solar Energy Solutions</a></li>
                                        <li><a href="#">VRLA/SMF Batteries</a></li>
                                        <li><a href="#">Inverter & UPS</a></li>
                                        <li><a href="#">Solar Inverter/UPS</a></li>
                                        <li><a href="#">Other Products</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Inverter Batteries</a>
                            	<div class="subnav-inner clear">
                                    <ul>
                                    	<h3>By Manufacturer</h3>
                                        <li><a href="#">Car Batteries</a></li>
                                        <li><a href="#">Inverter Batteries</a></li>
                                        <li><a href="#">2 Wheeler Batteries</a></li>
                                        <li><a href="#">Inverter & Battery Combos</a></li>
                                        <li><a href="#">Solar Energy Solutions</a></li>
                                        <li><a href="#">VRLA/SMF Batteries</a></li>
                                        <li><a href="#">Inverter & UPS</a></li>
                                        <li><a href="#">Solar Inverter/UPS</a></li>
                                        <li><a href="#">Other Products</a></li>
                                    </ul>
                                    <ul>
                                    	<h3>By Brand</h3>
                                        <li><a href="#">Car Batteries</a></li>
                                        <li><a href="#">Inverter Batteries</a></li>
                                        <li><a href="#">2 Wheeler Batteries</a></li>
                                        <li><a href="#">Inverter & Battery Combos</a></li>
                                        <li><a href="#">Solar Energy Solutions</a></li>
                                        <li><a href="#">VRLA/SMF Batteries</a></li>
                                        <li><a href="#">Inverter & UPS</a></li>
                                        <li><a href="#">Solar Inverter/UPS</a></li>
                                        <li><a href="#">Other Products</a></li>
                                    </ul>
                                    <ul>
                                    	<h3>By Capapcity</h3>
                                        <li><a href="#">Car Batteries</a></li>
                                        <li><a href="#">Inverter Batteries</a></li>
                                        <li><a href="#">2 Wheeler Batteries</a></li>
                                        <li><a href="#">Inverter & Battery Combos</a></li>
                                        <li><a href="#">Solar Energy Solutions</a></li>
                                        <li><a href="#">VRLA/SMF Batteries</a></li>
                                        <li><a href="#">Inverter & UPS</a></li>
                                        <li><a href="#">Solar Inverter/UPS</a></li>
                                        <li><a href="#">Other Products</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">2 Wheeler Batteries</a></li>
                            <li><a href="#">Inverter & Battery Combos</a></li>
                            <li><a href="#">Solar Energy Solutions</a></li>
                            <li><a href="#">VRLA/SMF Batteries</a></li>
                            <li><a href="#">Inverter & UPS</a></li>
                            <li><a href="#">Solar Inverter/UPS</a></li>
                            <li><a href="#">Other Products</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="{{'products'}}">Buy Online</a></li>
                <li><a href="{{'store_locator'}}">Store Locator</a></li>
        		<li><a href="{{'franchise'}}">Franchise </a></li>
                <!-- <input placeholder="Search" class="xyz" data-drupal-selector="edit-search" type="text" id="edit-search" name="search" value="" size="60" maxlength="128">
                <input data-drupal-selector="edit-submit" type="submit" id="edit-submit" name="op" value="Search" class="yzx"> -->
            </ul>
        </nav>
        <!-- <aside class="search right">
            <form>
                <input type="search" placeholder="Search Products" name="search" onkeyup="buttonUp();" required>
                <input type="submit" value="">
            </form>
        </aside> -->
        <aside class="header-cart right">
        
        	<div class="cd-cart-container empty"> 
       
		<a href="#" class="cd-cart-trigger"> Cart
      <ul class="count">
        <li class="cart_total_count">{{ count((array) session('cart')) }}</li>
      </ul>
      </a>
      <div class="cd-cart">
        <div class="wrapper">
          <header>
            <h2>Cart</h2>
            <!-- <span class="undo">Item removed. 
            </span> -->
            
                </header>
          <div class="body">
            <!-- <ul>
            </ul> -->
            <div id="cartCheckOut">
            	<ul id="cartCheckOutList">
                <table id="cart" class="table table-hover table-condensed" style="width:100%;">
        <thead>
        <tr>
            <th style="width:40%">Product</th>
            <th style="width:15%">Price</th>
            <th style="width:10%">Qty</th>
            <th style="width:30%" class="text-center">Total</th>
            <th style="width:5%"></th>
        </tr>
        </thead>
        <tbody id="cart_body">
        <?php $total = 0; ?>
        @if(session('cart'))
            @foreach((array) session('cart') as $id => $details)

                <?php $total += ($details['price'] * $details['quantity']) - $details['scrabamount']?>

                <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{ $details['photo'] }}" width="100" height="100" class="img-responsive"/></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td style="text-align: center;" data-th="Price">₹{{ $details['price'] }}</td>
                    <td style="text-align: center;" data-th="Quantity">{{ $details['quantity'] }}</td>
                    <td style="text-align: center;" data-th="Subtotal" class="text-center">₹<span class="product-subtotal">{{ ($details['price'] * $details['quantity']) -$details['scrabamount'] }}</span></td>
                </tr>
            @endforeach
        @endif
</tbody></table>
                <!-- @if(session('cart'))
                @foreach((array) session('cart') as $id => $details)
                    <div class="row cart-detail">
                        <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                            <img src="{{ $details['photo'] }}" />
                        </div>
                        <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                            <p>{{ $details['name'] }}</p>
                            <span class="price text-info"> ${{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                        </div>
                    </div>
                @endforeach
            @endif -->
                </ul>
            </div>
          </div>
          <footer>
          <?php $total = 0 ?>
                @foreach((array) session('cart') as $id => $details)
                    <?php $total += $details['price'] * $details['quantity'] ?>
                @endforeach
                @if(count((array) session('cart')) > 0)
                 <a href="cart-view" class="checkout btn"><em>Checkout - Rs.<span id="sum_subtotal"> {{ $total }}</span></em></a> 
                @endif
                </footer>
        </div>
      </div>
      <!-- cd-cart -->
	            </div>
                
        	<!--<a href="#">
            <i><svg viewBox="0 0 461.201 497.81"><path d="M433.653,153.81H28.347C12.691,153.81,0,166.501,0,182.157l43,287.307c0,15.655,12.691,28.347,28.347,28.347h319.307	c15.654,0,28.346-12.691,28.346-28.347l43-287.307C461.999,166.501,449.308,153.81,433.653,153.81z M386.666,466.144h-313 l-41-280.999h396L386.666,466.144z"/>
<path d="M110.177,133.051c-0.098-2.482-1.974-61.227,35.44-100.149c21-21.847,49.727-32.924,85.382-32.924L231.807,0	c1.133,0.063,28.053,1.746,54.882,19.04c24.853,16.02,54.478,48.704,54.478,113.438h-29c0-94.748-74.959-102.958-81.67-103.499	c-27.15,0.099-48.631,8.136-63.85,23.894c-28.858,29.882-27.507,78.578-27.491,79.066L110.177,133.051z"/><circle cx="129.234" cy="265.243" r="20.599"/><circle cx="331.234" cy="265.243" r="20.599"/></svg><span>01</span></i>
			Cart
            <article class="clear">
            </article>
            </a>-->
        </aside>
        
        <nav class="navbar right" onclick="openNav()">&#9776;</nav>
    </header>
    </div>
    <div class="toast_message">
        <!-- <div class="toast_content">
        <i class="fa fa-bell" aria-hidden="true"></i>  Product Added to Cart
        </div> -->
    </div>
</header>
@yield('content')
<footer class="footer clear">
    <div class="footer-top clear">
        <aside>
            <figure><img src="assets/front_end/images/genuine-products.png"></figure>
            <figcaption>
            <h3>100% GENUINE PRODUCTS</h3>
            <p>Brand new and 100% genuine products from trusted sellers only</p>
            </figcaption>
        </aside>
        <aside>
            <figure><img src="assets/front_end/images/best-prices.png"></figure>
            <figcaption>
            <h3>BEST PRICES</h3>
            <p>Get big discounts & maximum exchange value </p>
            </figcaption>
        </aside>
        <aside>
            <figure><img src="assets/front_end/images/free-delivery.png"></figure>
            <figcaption>
            <h3>FREE DELIVERY/INSTALLATION</h3>
            <p>Get free professional installation in just few hours</p>
            </figcaption>
        </aside>
    </div>
    <article class="clear">
        <aside class="footer-nav left">
            <h3>Information</h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="about-us">About us</a></li>
                <li><a href="services">Services</a></li>
                <li><a href="image_gallery&1">Gallery</a></li>
                <!--<li><a href="gallery">Gallery</a></li>-->
                <li><a href="franchise">Franchise </a></li>
                <li><a href="testimonials">Testimonials</a></li>
                <li><a href="career">Career</a></li>
                <li><a href="contact">Contact Us</a></li>
                <li><a href="faq">FAQ</a></li>
            </ul>
        </aside>
        <aside class="footer-nav left">
            <h3>Help & Policies</h3>
            <ul>
                <li><a href="terms-conditions">Terms & Conditions</a></li>
                <li><a href="shipping-policy">Shipping Policy</a></li>
                <li><a href="privacy-policy">Privacy Policy & Disclaimer</a></li>
                <li><a href="refunds-and-cancellations">Refunds / Cancellations </a></li>
                <!--<li><a href="#">Payments</a></li>-->
                <!--<li><a href="#">Shipping Policy</a></li>-->
                <!--<li><a href="#">Warranties</a></li>-->
                <!--<li><a href="#">Privacy Policy & Disclaimer</a></li>-->
                <!--<li><a href="#">Cancellation & Refund</a></li>-->
                <!--<li><a href="#">Terms & Conditions</a></li>-->
            </ul><br />
            <h3>Others</h3>
            <ul>
               <!--  <li><a href="#">My Account</a></li> -->

                <?php 
          if((Session::get('id')) != ''){
            ?>
            <?php 
            $details = DB::table('users')->where('id',Session::get('id'))->get();
            ?>
             @foreach($details as $row)
             <li><a href="personal-information">My Account</a></li>
             <li><a href="my_orders">Order History</a></li>
             <li><a href="wishlist">Wish List</a></li>
            
            @endforeach
            <?php } else {?>
                <li><a href="login-and-register">My Account</a></li>
                <li><a href="login-and-register">Order History</a></li>
                <li><a href="login-and-register">Wish List</a></li>
        <?php }?>




               <!--  <li><a href="#">Order History</a></li> -->
               <!--  <li><a href="#">Wish List</a></li> -->
            </ul>
        </aside>
        <aside class="footer-nav left">
            <h3>Reach Us</h3>
            <p><strong>Head Office</strong><br />
143 Chairman Ramalingam Road,<br />
Opp.Sidhaswara Bus stop,<br />
Ammapet Main Road,<br />
Salem. Tamilnadu,<br />
India.</p>
        </aside>
        <aside class="footer-nav left">
            <h3>Contact Info</h3>
            <p><strong>Call Us</strong><br />
<a href="tel:+918056821111" style="color: #fff !important;"> +91-8056821111</a><br />
<strong>Email Us</strong><br />
<a href="mailto:info@xpsbatterystore.com" style="color: #fff !important;">info@xpsbatterystore.com</a></p>
            
        </aside>
        <aside class="footer-nav right">
        <div class="social-media clear">
                <h3>Stay Tuned</h3>
                <p>Connect with us and<br>stay in the loop.</p>
                <a href="https://www.facebook.com/xpsbatterystore" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="https://api.whatsapp.com/send?phone=918056821111" target="_blank"><i class="fa fa-whatsapp"></i></a>
                <!-- <a href="#"><i class="fa fa-facebook"></i></a> -->
                <!-- <a href="#"><i class="fa fa-twitter"></i></a> -->
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
            <!-- <h3>Get this App</h3>
            <p>Click Here to Downoad<br />Our Android App</p>
            <a href="https://play.google.com/store/apps/details?id=com.xpsbatt.gokul.xpsbattery&hl=en_IN" target="_blank"><img src="assets/front_end/images/Google-Play.png"></a> -->
        </aside>
    </article>
   <div class="footer-payment clear">
     <!--  <p style="font-size:24px;font-weight:800;color:#fff;">Powered By</p>
    	<img src="assets/front_end/images/razor.png" style="background:#fff"> -->
    </div> 
    <div class="footer-bottom clear">
        <p class="left">© <span id="year"></span> XPS Battery Store. All rights reserved.</p>
        <p class="right">Powered by <a href="https://binary-clouds.com/" target="_blank">Binary Clouds</a></p>
    </div>
</footer>
</div>
<a href="#" class="scrollup"></a>

<script src='assets/front_end/js/jquery.min.js'></script>
<script src="https://www.google.com/recaptcha/api.js?render=6LcEt6MZAAAAAA6iL6AtG1lvHpeJkhkDt3dbUBql"></script>
<script>
$('#login_form').submit(function(event) {
    event.preventDefault();
    grecaptcha.ready(function() {
        grecaptcha.execute('6LcEt6MZAAAAAA6iL6AtG1lvHpeJkhkDt3dbUBql', {action: 'subscribe_newsletter'}).then(function(token) {
            $('#login_form').prepend('<input type="hidden" name="token" value="' + token + '">');
            $('#login_form').prepend('<input type="hidden" name="action" value="subscribe_newsletter">');
            $('#login_form').unbind('submit').submit();
        });
    });
  });
  $('#enq_form').submit(function(event) {
    event.preventDefault();
    grecaptcha.ready(function() {
        grecaptcha.execute('6LcEt6MZAAAAAA6iL6AtG1lvHpeJkhkDt3dbUBql', {action: 'subscribe_newsletter'}).then(function(token) {
            $('#enq_form').prepend('<input type="hidden" name="token" value="' + token + '">');
            $('#enq_form').prepend('<input type="hidden" name="action" value="subscribe_newsletter">');
            $('#enq_form').unbind('submit').submit();
        });
    });
  });
</script>
<script src='assets/front_end/js/jquery.simplePagination.js'></script>

<script type="text/javascript">
        var items = $(".list-wrapper .list-item");
var numItems = items.length;
var perPage = 3;

items.slice(perPage).hide();

$("#pagination-container").pagination({
    items: numItems,
    itemsOnPage: perPage,
    prevText: "&laquo;",
    nextText: "&raquo;",
    onPageClick: function (pageNumber) {
        var showFrom = perPage * (pageNumber - 1);
        var showTo = showFrom + perPage;
        items.hide().slice(showFrom, showTo).show();
    }
});
</script>

<script src="assets/front_end/js/cart.js"></script>
<script type="text/javascript" src="assets/front_end/js/simple-lightbox.js"></script>
<script>
    (function() {
        var $gallery = new SimpleLightbox('.photo-gallery ul li a, .product-photos ul li a, .section-content article figure a', {});
    })();
</script>
<script src="assets/front_end/js/owl.carousel.js"></script>
<script src="assets/front_end/js/script.js"></script>
<script src="assets/front_end/js/slick.min.js"></script>
<script  src="assets/front_end/js/slider.js"></script>
<script>
var modalBtns = [...document.querySelectorAll(".button")];
modalBtns.forEach(function(btn){
  btn.onclick = function() {
    var modal = btn.getAttribute('data-modal');
    document.getElementById(modal).style.display = "block";
  }
});

var closeBtns = [...document.querySelectorAll(".close")];
closeBtns.forEach(function(btn){
  btn.onclick = function() {
    var modal = btn.closest('.modal');
    modal.style.display = "none";
  }
});

window.onclick = function(event) {
  if (event.target.className === "modal") {
    event.target.style.display = "none";
  }
}
</script>
<script>

    function redirectpage(){
        window.location = '{{ url('personal-information') }}';
    }
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}


 var AndraPradesh = ["Anantapur","Chittoor","East Godavari","Guntur","Kadapa","Krishna","Kurnool","Prakasam","Nellore","Srikakulam","Visakhapatnam","Vizianagaram","West Godavari"];
var ArunachalPradesh = ["Anjaw","Changlang","Dibang Valley","East Kameng","East Siang","Kra Daadi","Kurung Kumey","Lohit","Longding","Lower Dibang Valley","Lower Subansiri","Namsai","Papum Pare","Siang","Tawang","Tirap","Upper Siang","Upper Subansiri","West Kameng","West Siang","Itanagar"];
var Assam = ["Baksa","Barpeta","Biswanath","Bongaigaon","Cachar","Charaideo","Chirang","Darrang","Dhemaji","Dhubri","Dibrugarh","Goalpara","Golaghat","Hailakandi","Hojai","Jorhat","Kamrup Metropolitan","Kamrup (Rural)","Karbi Anglong","Karimganj","Kokrajhar","Lakhimpur","Majuli","Morigaon","Nagaon","Nalbari","Dima Hasao","Sivasagar","Sonitpur","South Salmara Mankachar","Tinsukia","Udalguri","West Karbi Anglong"];
var Bihar = ["Araria","Arwal","Aurangabad","Banka","Begusarai","Bhagalpur","Bhojpur","Buxar","Darbhanga","East Champaran","Gaya","Gopalganj","Jamui","Jehanabad","Kaimur","Katihar","Khagaria","Kishanganj","Lakhisarai","Madhepura","Madhubani","Munger","Muzaffarpur","Nalanda","Nawada","Patna","Purnia","Rohtas","Saharsa","Samastipur","Saran","Sheikhpura","Sheohar","Sitamarhi","Siwan","Supaul","Vaishali","West Champaran"];
var Chhattisgarh = ["Balod","Baloda Bazar","Balrampur","Bastar","Bemetara","Bijapur","Bilaspur","Dantewada","Dhamtari","Durg","Gariaband","Janjgir Champa","Jashpur","Kabirdham","Kanker","Kondagaon","Korba","Koriya","Mahasamund","Mungeli","Narayanpur","Raigarh","Raipur","Rajnandgaon","Sukma","Surajpur","Surguja"];
var Goa = ["North Goa","South Goa"];
var Gujarat = ["Ahmedabad","Amreli","Anand","Aravalli","Banaskantha","Bharuch","Bhavnagar","Botad","Chhota Udaipur","Dahod","Dang","Devbhoomi Dwarka","Gandhinagar","Gir Somnath","Jamnagar","Junagadh","Kheda","Kutch","Mahisagar","Mehsana","Morbi","Narmada","Navsari","Panchmahal","Patan","Porbandar","Rajkot","Sabarkantha","Surat","Surendranagar","Tapi","Vadodara","Valsad"];
var Haryana = ["Ambala","Bhiwani","Charkhi Dadri","Faridabad","Fatehabad","Gurugram","Hisar","Jhajjar","Jind","Kaithal","Karnal","Kurukshetra","Mahendragarh","Mewat","Palwal","Panchkula","Panipat","Rewari","Rohtak","Sirsa","Sonipat","Yamunanagar"];
var HimachalPradesh = ["Bilaspur","Chamba","Hamirpur","Kangra","Kinnaur","Kullu","Lahaul Spiti","Mandi","Shimla","Sirmaur","Solan","Una"];
var JammuKashmir = ["Anantnag","Bandipora","Baramulla","Budgam","Doda","Ganderbal","Jammu","Kargil","Kathua","Kishtwar","Kulgam","Kupwara","Leh","Poonch","Pulwama","Rajouri","Ramban","Reasi","Samba","Shopian","Srinagar","Udhampur"];
var Jharkhand = ["Bokaro","Chatra","Deoghar","Dhanbad","Dumka","East Singhbhum","Garhwa","Giridih","Godda","Gumla","Hazaribagh","Jamtara","Khunti","Koderma","Latehar","Lohardaga","Pakur","Palamu","Ramgarh","Ranchi","Sahebganj","Seraikela Kharsawan","Simdega","West Singhbhum"];
var Karnataka = ["Bagalkot","Bangalore Rural","Bangalore Urban","Belgaum","Bellary","Bidar","Vijayapura","Chamarajanagar","Chikkaballapur","Chikkamagaluru","Chitradurga","Dakshina Kannada","Davanagere","Dharwad","Gadag","Gulbarga","Hassan","Haveri","Kodagu","Kolar","Koppal","Mandya","Mysore","Raichur","Ramanagara","Shimoga","Tumkur","Udupi","Uttara Kannada","Yadgir"];
var Kerala = ["Alappuzha","Ernakulam","Idukki","Kannur","Kasaragod","Kollam","Kottayam","Kozhikode","Malappuram","Palakkad","Pathanamthitta","Thiruvananthapuram","Thrissur","Wayanad"];
var MadhyaPradesh = ["Agar Malwa","Alirajpur","Anuppur","Ashoknagar","Balaghat","Barwani","Betul","Bhind","Bhopal","Burhanpur","Chhatarpur","Chhindwara","Damoh","Datia","Dewas","Dhar","Dindori","Guna","Gwalior","Harda","Hoshangabad","Indore","Jabalpur","Jhabua","Katni","Khandwa","Khargone","Mandla","Mandsaur","Morena","Narsinghpur","Neemuch","Panna","Raisen","Rajgarh","Ratlam","Rewa","Sagar","Satna",
"Sehore","Seoni","Shahdol","Shajapur","Sheopur","Shivpuri","Sidhi","Singrauli","Tikamgarh","Ujjain","Umaria","Vidisha"];
var Maharashtra = ["Ahmednagar","Akola","Amravati","Aurangabad","Beed","Bhandara","Buldhana","Chandrapur","Dhule","Gadchiroli","Gondia","Hingoli","Jalgaon","Jalna","Kolhapur","Latur","Mumbai City","Mumbai Suburban","Nagpur","Nanded","Nandurbar","Nashik","Osmanabad","Palghar","Parbhani","Pune","Raigad","Ratnagiri","Sangli","Satara","Sindhudurg","Solapur","Thane","Wardha","Washim","Yavatmal"];
var Manipur = ["Bishnupur","Chandel","Churachandpur","Imphal East","Imphal West","Jiribam","Kakching","Kamjong","Kangpokpi","Noney","Pherzawl","Senapati","Tamenglong","Tengnoupal","Thoubal","Ukhrul"];
var Meghalaya = ["East Garo Hills","East Jaintia Hills","East Khasi Hills","North Garo Hills","Ri Bhoi","South Garo Hills","South West Garo Hills","South West Khasi Hills","West Garo Hills","West Jaintia Hills","West Khasi Hills"];
var Mizoram = ["Aizawl","Champhai","Kolasib","Lawngtlai","Lunglei","Mamit","Saiha","Serchhip","Aizawl","Champhai","Kolasib","Lawngtlai","Lunglei","Mamit","Saiha","Serchhip"];
var Nagaland = ["Dimapur","Kiphire","Kohima","Longleng","Mokokchung","Mon","Peren","Phek","Tuensang","Wokha","Zunheboto"];
var Odisha = ["Angul","Balangir","Balasore","Bargarh","Bhadrak","Boudh","Cuttack","Debagarh","Dhenkanal","Gajapati","Ganjam","Jagatsinghpur","Jajpur","Jharsuguda","Kalahandi","Kandhamal","Kendrapara","Kendujhar","Khordha","Koraput","Malkangiri","Mayurbhanj","Nabarangpur","Nayagarh","Nuapada","Puri","Rayagada","Sambalpur","Subarnapur","Sundergarh"];
var Punjab = ["Amritsar","Barnala","Bathinda","Faridkot","Fatehgarh Sahib","Fazilka","Firozpur","Gurdaspur","Hoshiarpur","Jalandhar","Kapurthala","Ludhiana","Mansa","Moga","Mohali","Muktsar","Pathankot","Patiala","Rupnagar","Sangrur","Shaheed Bhagat Singh Nagar","Tarn Taran"];
var Rajasthan = ["Ajmer","Alwar","Banswara","Baran","Barmer","Bharatpur","Bhilwara","Bikaner","Bundi","Chittorgarh","Churu","Dausa","Dholpur","Dungarpur","Ganganagar","Hanumangarh","Jaipur","Jaisalmer","Jalore","Jhalawar","Jhunjhunu","Jodhpur","Karauli","Kota","Nagaur","Pali","Pratapgarh","Rajsamand","Sawai Madhopur","Sikar","Sirohi","Tonk","Udaipur"];
var Sikkim = ["East Sikkim","North Sikkim","South Sikkim","West Sikkim"];
var TamilNadu = ["Ariyalur","Chennai","Coimbatore","Cuddalore","Dharmapuri","Dindigul","Erode","Kanchipuram","Kanyakumari","Karur","Krishnagiri","Madurai","Nagapattinam","Namakkal","Nilgiris","Perambalur","Pudukkottai","Ramanathapuram","Salem","Sivaganga","Thanjavur","Theni","Thoothukudi","Tiruchirappalli","Tirunelveli","Tiruppur","Tiruvallur","Tiruvannamalai","Tiruvarur","Vellore","Viluppuram","Virudhunagar"];
var Telangana = ["Adilabad","Bhadradri Kothagudem","Hyderabad","Jagtial","Jangaon","Jayashankar","Jogulamba","Kamareddy","Karimnagar","Khammam","Komaram Bheem","Mahabubabad","Mahbubnagar","Mancherial","Medak","Medchal","Nagarkurnool","Nalgonda","Nirmal","Nizamabad","Peddapalli","Rajanna Sircilla","Ranga Reddy","Sangareddy","Siddipet","Suryapet","Vikarabad","Wanaparthy","Warangal Rural","Warangal Urban","Yadadri Bhuvanagiri"];
var Tripura = ["Dhalai","Gomati","Khowai","North Tripura","Sepahijala","South Tripura","Unakoti","West Tripura"];
var UttarPradesh = ["Agra","Aligarh","Allahabad","Ambedkar Nagar","Amethi","Amroha","Auraiya","Azamgarh","Baghpat","Bahraich","Ballia","Balrampur","Banda","Barabanki","Bareilly","Basti","Bhadohi","Bijnor","Budaun","Bulandshahr","Chandauli","Chitrakoot","Deoria","Etah","Etawah","Faizabad","Farrukhabad","Fatehpur","Firozabad","Gautam Buddha Nagar","Ghaziabad","Ghazipur","Gonda","Gorakhpur","Hamirpur","Hapur","Hardoi","Hathras","Jalaun","Jaunpur","Jhansi","Kannauj","Kanpur Dehat","Kanpur Nagar","Kasganj","Kaushambi","Kheri","Kushinagar","Lalitpur","Lucknow","Maharajganj","Mahoba","Mainpuri","Mathura","Mau","Meerut","Mirzapur","Moradabad","Muzaffarnagar","Pilibhit","Pratapgarh","Raebareli","Rampur","Saharanpur","Sambhal","Sant Kabir Nagar","Shahjahanpur","Shamli","Shravasti","Siddharthnagar","Sitapur","Sonbhadra","Sultanpur","Unnao","Varanasi"];
var Uttarakhand  = ["Almora","Bageshwar","Chamoli","Champawat","Dehradun","Haridwar","Nainital","Pauri","Pithoragarh","Rudraprayag","Tehri","Udham Singh Nagar","Uttarkashi"];
var WestBengal = ["Alipurduar","Bankura","Birbhum","Cooch Behar","Dakshin Dinajpur","Darjeeling","Hooghly","Howrah","Jalpaiguri","Jhargram","Kalimpong","Kolkata","Malda","Murshidabad","Nadia","North 24 Parganas","Paschim Bardhaman","Paschim Medinipur","Purba Bardhaman","Purba Medinipur","Purulia","South 24 Parganas","Uttar Dinajpur"];
var AndamanNicobar = ["Nicobar","North Middle Andaman","South Andaman"];
var Chandigarh = ["Chandigarh"];
var DadraHaveli = ["Dadra Nagar Haveli"];
var DamanDiu = ["Daman","Diu"];
var Delhi = ["Central Delhi","East Delhi","New Delhi","North Delhi","North East Delhi","North West Delhi","Shahdara","South Delhi","South East Delhi","South West Delhi","West Delhi"];
var Lakshadweep = ["Lakshadweep"];
var Puducherry = ["Karaikal","Mahe","Puducherry","Yanam"];


$("#inputState").change(function(){
    
  var StateSelected = $(this).val();
  var optionsList;
  var htmlString = "";

  switch (StateSelected) {
    case "Andra Pradesh":
        optionsList = AndraPradesh;
        break;
    case "Arunachal Pradesh":
        optionsList = ArunachalPradesh;
        break;
    case "Assam":
        optionsList = Assam;
        break;
    case "Bihar":
        optionsList = Bihar;
        break;
    case "Chhattisgarh":
        optionsList = Chhattisgarh;
        break;
    case "Goa":
        optionsList = Goa;
        break;
    case  "Gujarat":
        optionsList = Gujarat;
        break;
    case "Haryana":
        optionsList = Haryana;
        break;
    case "Himachal Pradesh":
        optionsList = HimachalPradesh;
        break;
    case "Jammu and Kashmir":
        optionsList = JammuKashmir;
        break;
    case "Jharkhand":
        optionsList = Jharkhand;
        break;
    case  "Karnataka":
        optionsList = Karnataka;
        break;
    case "Kerala":
        optionsList = Kerala;
        break;
    case  "Madya Pradesh":
        optionsList = MadhyaPradesh;
        break;
    case "Maharashtra":
        optionsList = Maharashtra;
        break;
    case  "Manipur":
        optionsList = Manipur;
        break;
    case "Meghalaya":
        optionsList = Meghalaya ;
        break;
    case  "Mizoram":
        optionsList = Mizoram;
        break;
    case "Nagaland":
        optionsList = Nagaland;
        break;
    case  "Orissa":
        optionsList = Orissa;
        break;
    case "Punjab":
        optionsList = Punjab;
        break;
    case  "Rajasthan":
        optionsList = Rajasthan;
        break;
    case "Sikkim":
        optionsList = Sikkim;
        break;
    case  "Tamil Nadu":
        optionsList = TamilNadu;
        break;
    case  "Telangana":
        optionsList = Telangana;
        break;
    case "Tripura":
        optionsList = Tripura ;
        break;
    case  "Uttaranchal":
        optionsList = Uttaranchal;
        break;
    case  "Uttar Pradesh":
        optionsList = UttarPradesh;
        break;
    case "West Bengal":
        optionsList = WestBengal;
        break;
    case  "Andaman and Nicobar Islands":
        optionsList = AndamanNicobar;
        break;
    case "Chandigarh":
        optionsList = Chandigarh;
        break;
    case  "Dadar and Nagar Haveli":
        optionsList = DadraHaveli;
        break;
    case "Daman and Diu":
        optionsList = DamanDiu;
        break;
    case  "Delhi":
        optionsList = Delhi;
        break;
    case "Lakshadeep":
        optionsList = Lakshadeep ;
        break;
    case  "Pondicherry":
        optionsList = Pondicherry;
        break;
}


  for(var i = 0; i < optionsList.length; i++){
    htmlString = htmlString+"<option value='"+ optionsList[i] +"'>"+ optionsList[i] +"</option>";
  }
  $("#inputDistrict").html(htmlString);

});

$("#inputStatelogin").change(function(){
    
  var StateSelected = $(this).val();
  var optionsList;
  var htmlString = "";

  switch (StateSelected) {
    case "Andra Pradesh":
        optionsList = AndraPradesh;
        break;
    case "Arunachal Pradesh":
        optionsList = ArunachalPradesh;
        break;
    case "Assam":
        optionsList = Assam;
        break;
    case "Bihar":
        optionsList = Bihar;
        break;
    case "Chhattisgarh":
        optionsList = Chhattisgarh;
        break;
    case "Goa":
        optionsList = Goa;
        break;
    case  "Gujarat":
        optionsList = Gujarat;
        break;
    case "Haryana":
        optionsList = Haryana;
        break;
    case "Himachal Pradesh":
        optionsList = HimachalPradesh;
        break;
    case "Jammu and Kashmir":
        optionsList = JammuKashmir;
        break;
    case "Jharkhand":
        optionsList = Jharkhand;
        break;
    case  "Karnataka":
        optionsList = Karnataka;
        break;
    case "Kerala":
        optionsList = Kerala;
        break;
    case  "Madya Pradesh":
        optionsList = MadhyaPradesh;
        break;
    case "Maharashtra":
        optionsList = Maharashtra;
        break;
    case  "Manipur":
        optionsList = Manipur;
        break;
    case "Meghalaya":
        optionsList = Meghalaya ;
        break;
    case  "Mizoram":
        optionsList = Mizoram;
        break;
    case "Nagaland":
        optionsList = Nagaland;
        break;
    case  "Orissa":
        optionsList = Orissa;
        break;
    case "Punjab":
        optionsList = Punjab;
        break;
    case  "Rajasthan":
        optionsList = Rajasthan;
        break;
    case "Sikkim":
        optionsList = Sikkim;
        break;
    case  "Tamil Nadu":
        optionsList = TamilNadu;
        break;
    case  "Telangana":
        optionsList = Telangana;
        break;
    case "Tripura":
        optionsList = Tripura ;
        break;
    case  "Uttaranchal":
        optionsList = Uttaranchal;
        break;
    case  "Uttar Pradesh":
        optionsList = UttarPradesh;
        break;
    case "West Bengal":
        optionsList = WestBengal;
        break;
    case  "Andaman and Nicobar Islands":
        optionsList = AndamanNicobar;
        break;
    case "Chandigarh":
        optionsList = Chandigarh;
        break;
    case  "Dadar and Nagar Haveli":
        optionsList = DadraHaveli;
        break;
    case "Daman and Diu":
        optionsList = DamanDiu;
        break;
    case  "Delhi":
        optionsList = Delhi;
        break;
    case "Lakshadeep":
        optionsList = Lakshadeep ;
        break;
    case  "Pondicherry":
        optionsList = Pondicherry;
        break;
}


  for(var i = 0; i < optionsList.length; i++){
    htmlString = htmlString+"<option value='"+ optionsList[i] +"'>"+ optionsList[i] +"</option>";
  }
  $("#inputDistrictlogin").html(htmlString);

});
</script>
</body>
</html>