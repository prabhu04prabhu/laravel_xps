<?php include("header.php");?>
<header class="banner-heading clear">
	<h2 class="left">Track Order</h2>
	<div class="banner-nav right">
		<ul>
			<li><a href="<?php echo $site_path; ?>">Home</a></li>
			<li>Track Order</li>
		</ul>
	</div>
</header>
<section class="section">
    <section class="track-order clear">
    	<h2 class="left">Track Finder</small></h2>
        <fieldset class="right">
        	<div class="custom-select">
        		<select name="Category"> 
        			<option value="0">Select Category</option>
                    <option value="1">Category One</option>
                    <option value="1">Category Two</option>
                    <option value="1">Category Three</option>
                    <option value="1">Category Four</option>
                    <option value="1">Category Five</option>
                    <option value="1">Category Six</option>
        		</select>
        	</div>
			<input name="Location" type="text" placeholder="Location" required>
        	<div class="custom-select">
        		<select name="Radius (kilometer)">
        			<option value="0">Select Radius (Kilometer)</option>
                    <option value="1">5</option>
                    <option value="1">10</option>
                    <option value="1">20</option>
                    <option value="1">25</option>
        		</select>
        	</div>
            <div class="clear"></div>
			<input name="Search" type="submit" value="Search" id="contact-button"/>
        </fieldset>
    	</section>
    <section class="section-content clear">
    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d250084.71217005842!2d77.99821060098495!3d11.653701220397906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3babf1ccf52cba0b%3A0xee9989007068ca47!2sSalem%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1593157997625!5m2!1sen!2sin" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </section>
</section>
<?php include("footer.php");?>