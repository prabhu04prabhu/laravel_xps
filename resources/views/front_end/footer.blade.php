<footer class="footer clear">
    <div class="footer-top clear">
    	<aside>
            <figure><img src="<?php echo $site_path; ?>images/genuine-products.png"></figure>
            <figcaption>
            <h3>100% GENUINE PRODUCTS</h3>
            <p>Brand new and 100% genuine products from trusted sellers only</p>
            </figcaption>
        </aside>
    	<aside>
            <figure><img src="<?php echo $site_path; ?>images/best-prices.png"></figure>
            <figcaption>
            <h3>BEST PRICES</h3>
            <p>Get big discounts & maximum exchange value </p>
            </figcaption>
        </aside>
    	<aside>
            <figure><img src="<?php echo $site_path; ?>images/free-delivery.png"></figure>
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
                <li><a href="<?php echo $site_path; ?>">Home</a></li>
                <li><a href="<?php echo $site_path; ?>about-us">About us</a></li>
                <li><a href="<?php echo $site_path; ?>services">Services</a></li>
                <li><a href="<?php echo $site_path; ?>image_gallery&1">Gallery</a></li>
                <!--<li><a href="<?php echo $site_path; ?>gallery">Gallery</a></li>-->
                <li><a href="<?php echo $site_path; ?>franchise">Franchise </a></li>
                <li><a href="<?php echo $site_path; ?>testimonials">Testimonials</a></li>
                <li><a href="<?php echo $site_path; ?>career">Career</a></li>
                <li><a href="<?php echo $site_path; ?>contact-us">Contact Us</a></li>
                <li><a href="<?php echo $site_path; ?>faq">FAQ</a></li>
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
                <!-- <a href="#"><i class="fa fa-twitter"></i></a> -->
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
        	<!-- <h3>Get this App</h3>
            <p>Click Here to Downoad<br />Our Android App</p>
    		<a href="https://play.google.com/store/apps/details?id=com.xpsbatt.gokul.xpsbattery&hl=en_IN" target="_blank"><img src="<?php echo $site_path; ?>images/Google-Play.png"></a> -->
        </aside>
    </article>
    <div class="footer-payment clear">
      <p style="font-size:24px;font-weight:800;color:#fff;">Powered By</p>
    	<img src="assets/front_end/images/razor.png" style="background:#fff">
    </div>
    <div class="footer-bottom clear">
		<p class="left">© <span id="year"></span> XPS Battery Store. All rights reserved.</p>
        <p class="right">Powered by <a href="https://binary-clouds.com/" target="_blank">Binary Clouds</a></p>
    </div>
</footer>
</div>
<a href="#" class="scrollup"></a>

<script src="<?php echo $site_path; ?>js/cart.js"></script>
<script type="text/javascript" src="<?php echo $site_path; ?>js/simple-lightbox.js"></script>
<script>
    (function() {
        var $gallery = new SimpleLightbox('.photo-gallery ul li a, .product-photos ul li a, .section-content article figure a', {});
    })();
</script>
<script src="<?php echo $site_path; ?>js/owl.carousel.js"></script>
<script src="<?php echo $site_path; ?>js/script.js"></script>
<script src="<?php echo $site_path; ?>js/slick.min.js"></script>
<script  src="<?php echo $site_path; ?>js/slider.js"></script>
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