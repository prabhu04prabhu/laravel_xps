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
        <li><a href="{{'gallery'}}">Gallery</a></li>
		<li><a href="{{'maintenance_tips'}}">Maintenance Tips</a></li>
        <li><a href="{{'testimonials'}}">Testimonials</a></li>
        <li><a href="{{'career'}}">Career</a></li>
        <li><a href="{{'contact'}}">Contact Us</a></li>
        <li><a href="{{'faq'}}">FAQ</a></li>
        <li class="hide"><p>Salem, Tamil Nadu.</p></li>
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
                <form method="post" action="{{url('send_enquiry')}}" onsubmit="return validate();" nctype="multipart/form-data">
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
    	<h3><i class="fa fa-map-marker"></i> Choose your City & District</h3>
    	<fieldset class="clear">
			<form method="post" action="#" onsubmit="return validate();">
				<div class="form-split left">
                    <label>City<span>*</span></label>
                    <div class="custom-select">
                        <select name="City">
                            <option value="Select City">Select City</option>
                            <option value="Salem">Salem</option>
                            <option value="Salem">Salem</option>
                            <option value="Salem">Salem</option>
                            <option value="Salem">Salem</option>
                            <option value="Salem">Salem</option>
                            <option value="Salem">Salem</option>
                            <option value="Salem">Salem</option>
                        </select>
                    </div>
                </div>
                <div class="form-split right">
                    <label>District<span>*</span></label>
                    <div class="custom-select">
                        <select name="City">
                            <option value="Select District">Select District</option>
                            <option value="Ariyalur">Ariyalur</option>
                            <option value="Ariyalur">Ariyalur</option>
                            <option value="Ariyalur">Ariyalur</option>
                            <option value="Ariyalur">Ariyalur</option>
                            <option value="Ariyalur">Ariyalur</option>
                            <option value="Ariyalur">Ariyalur</option>
                            <option value="Ariyalur">Ariyalur</option>
                        </select>
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
                <aside class="right"><input name="mobile" type="text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="10" placeholder="Enter your mobile no" required></aside>
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
<div id="franchise" class="modal">
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
</div>
<div class="wrapper">
<header class="header clear">
    <header class="header-top clear">
        <aside class="header-contact left">
            <p>Want to order<br>or Have any Query?</p>
            <a href="tel:+91-8056821111">+91-80568 21111</a>
        </aside>
        <aside class="header-social-media left">
            <a href="#" class="Facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="Instagram"><i class="fa fa-instagram"></i></a>
            <a href="#" class="Twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="Whatsapp"><i class="fa fa-whatsapp"></i></a>
        </aside>
        <aside class="header-login right">
        	<a href="{{'login-and-register'}}">Login / Sign Up</a>
        </aside>
        <aside class="header-location right">
        	<a href="javascript:void(0)" class="button" data-modal="location">Salem, Tamil Nadu.</a>
        </aside>
    </header>
    <div id="stuck_container">
    <header class="header-inner clear">
    	<h1 class="left"><a href="{{'/'}}"><img src="assets/front_end/images/logo.png" alt="XPS Battery Store" title="XPS Battery Store"></a></h1>
        <nav class="nav left">
            <ul>
                <li><a href="#">Shop by Category <i class="fa fa-angle-down"></i></a>
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
                <li><a href="{{'store_locator'}}">Store Locator</a></li>
        		<li><a href="{{'franchise'}}">Franchise </a></li>
            </ul>
        </nav>
        <aside class="search right">
            <form>
                <input type="search" placeholder="Search Products" name="search" onkeyup="buttonUp();" required>
                <input type="submit" value="">
            </form>
        </aside>
        <aside class="header-cart right">
        
        	<div class="cd-cart-container empty"> 
		<a href="#0" class="cd-cart-trigger"> Cart
      <ul class="count">
        <li>0</li>
        <li>1</li>
      </ul>
      </a>
      <div class="cd-cart">
        <div class="wrapper">
          <header>
            <h2>Cart</h2>
            <span class="undo">Item removed. 
            <!--<a href="#0">Undo</a></span>-->
            </span></header>
          <div class="body">
            <ul>
            </ul>
            <div id="cartCheckOut" style="display:none">
            	<ul id="cartCheckOutList">
                </ul>
            </div>
          </div>
          <footer> <a href="#" class="checkout btn"><em>Checkout - Rs.<span>0.00</span></em></a> </footer>
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
        <aside class="myaccount right">
			<svg viewBox="0 0 512 512"><path d="M437.02,330.98c-27.883-27.882-61.071-48.523-97.281-61.018C378.521,243.251,404,198.548,404,148			C404,66.393,337.607,0,256,0S108,66.393,108,148c0,50.548,25.479,95.251,64.262,121.962			c-36.21,12.495-69.398,33.136-97.281,61.018C26.629,379.333,0,443.62,0,512h40c0-119.103,96.897-216,216-216s216,96.897,216,216			h40C512,443.62,485.371,379.333,437.02,330.98z M256,256c-59.551,0-108-48.448-108-108S196.449,40,256,40			c59.551,0,108,48.448,108,108S315.551,256,256,256z"/></svg>
            <fieldset class="clear">
                <form method="post" action="#" onsubmit="return validate();">
                    <input name="username" type="text" placeholder="Enter your username" required>
                    <input name="phone" type="password" placeholder="Enter your password" required>
                    <div class="clear"></div>
                    <input class="left" name="login" type="submit" value="Login" id="login"/>
            		<a href="login-and-register" class="right">Sign Up</a>
                </form>
            </fieldset>
        </aside>
        <nav class="navbar right" onclick="openNav()">&#9776;</nav>
    </header>
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
                <li><a href="gallery">Gallery</a></li>
                <li><a href="franchise">Franchise </a></li>
                <li><a href="testimonials">Testimonials</a></li>
                <li><a href="career">Career</a></li>
                <li><a href="contact-us">Contact Us</a></li>
                <li><a href="faq">FAQ</a></li>
            </ul>
        </aside>
        <aside class="footer-nav left">
            <h3>Help & Policies</h3>
            <ul>
                <li><a href="#">Payments</a></li>
                <li><a href="#">Shipping Policy</a></li>
                <li><a href="#">Warranties</a></li>
                <li><a href="#">Privacy Policy & Disclaimer</a></li>
                <li><a href="#">Cancellation & Refund</a></li>
                <li><a href="#">Terms & Conditions</a></li>
            </ul><br />
            <h3>Others</h3>
            <ul>
                <li><a href="#">My Account</a></li>
                <li><a href="#">Order History</a></li>
                <li><a href="#">Wish List</a></li>
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
+91-8056821111<br />
<strong>Email Us</strong><br />
info@xpsbatterystore.com</p>
            
        </aside>
        <aside class="footer-nav right">
        <div class="social-media clear">
                <h3>Stay Tuned</h3>
                <p>Connect with us and<br>stay in the loop.</p>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
            <!-- <h3>Get this App</h3>
            <p>Click Here to Downoad<br />Our Android App</p>
            <a href="https://play.google.com/store/apps/details?id=com.xpsbatt.gokul.xpsbattery&hl=en_IN" target="_blank"><img src="assets/front_end/images/Google-Play.png"></a> -->
        </aside>
    </article>
    <div class="footer-payment clear">
        <img src="assets/front_end/images/payment.png">
    </div>
    <div class="footer-bottom clear">
        <p class="left">© <span id="year"></span> XPS Battery Store. All rights reserved.</p>
        <p class="right">Powered by <a href="https://binary-clouds.com/" target="_blank">Binary Clouds</a></p>
    </div>
</footer>
</div>
<a href="#" class="scrollup"></a>
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
</script>
</body>
</html>