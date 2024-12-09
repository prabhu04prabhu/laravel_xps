<?php include("header.php");?>
<header class="banner-heading clear">
	<h2 class="left">Shop</h2>
	<div class="banner-nav right">
		<ul>
			<li><a href="<?php echo $site_path; ?>">Home</a></li>
			<li>Shop</li>
		</ul>
	</div>
</header>
<section class="section">
    <section class="section-content shop clear">    
		<aside class="product-image left">
        	<img id="imageZoom2" src="<?php echo $site_path; ?>images/quick-shop.jpg">
        </aside>
    	<aside class="product-details right">
        	<div class="product-details-col-left left">
                <h2>Exide FEM0-IMST1000</h2>
                <h3>QUICK OVERVIEW</h3>
                <p><strong>Product Brand</strong> : Exide<br>
    <strong>Model Number</strong> : FEM0-IMST1000<br>
    <strong>Product Name</strong> : Exide Inva Master<br>
    <strong>Product Capacity</strong> : 100 Ah<br>
    <strong>Product Warranty</strong> : 0-36 Months Free</p>
                <h4>Availability : <span>In Stock</span></h4>
                <figcaption>Price: <del>Rs. 7921</del> <span>20% OFF</span> </figcaption>
                <div class="battery-price clear">
                    <input name="With Old Battery" class="checkbox-custom" id="With Old Battery" type="checkbox" value="With Old Battery">
                    <label class="checkbox-custom-label" for="With Old Battery" >With Old Battery: <strong>Rs. 6349</strong></label>
                </div>
                <div class="battery-price clear">
                    <input name="Without Old Battery" class="checkbox-custom" id="Without Old Battery" type="checkbox" value="Without Old Battery">
                    <label class="checkbox-custom-label" for="Without Old Battery" >Without Old Battery: <strong>Rs. 7849</strong></label>
                </div>
                <div class="product-short-desc clear">
                	<p><strong>Note:</strong> <span>Price with old battery take back is price of the New Battery - (minus) Scrap price of your Old Battery.</span> Your Old Battery Should be of Same AH Capacity as the New Battery Ordered. If not Price with Old Battery Take Back will differ.</p>
                    <p>For help Call <a href="tel:+91-8056821111">+91-80568 21111</a> or <a href="mailto:info@xpsbatterystore.com"><span>Email Us</span></a></p>
                </div>
            </div>
        	<div class="product-details-col-right right">
            	<ul class="list">
                    <li>Brand New & 100% Genuine</li>
                    <li>Delivered in 4 - 24 Hours*</li>
                    <li>Free Delivery & Installation</li>
                    <li>Cash on Delivery</li>
                </ul>
                <h1>₹ 5721<br><small>(Prices are inclusive of all taxes)</small></h1>
                <form>
                	<h5>Quantity</h5>
                	<div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
                	<input type="number" id="number" value="0" />
                	<div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
                </form>
            	<a href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
            </div>
        </aside>
    </section>
    <section class="product-description clear">
    	<div class="tab">
          <button class="tablinks" onclick="opensection(event, 'Description')" id="defaultOpen">Description</button>
          <button class="tablinks" onclick="opensection(event, 'Specifications')">Specifications</button>
        </div>
        <div id="Description" class="tabcontent">
            <h2>AC Delco DIN100 Description</h2>
            <p>As the name suggests, AC Delco sealed maintenance free batteries come factory sealed which makes them maintenance free. These batteries offer high performance and long life at the most affordable prices. These batteries also have a built in hydrometer.</p>
          	<h3>FEATURES</h3>
			<ul class="list">
                <li>Built in hydrometer- Indicates state of charge.</li>
                <li>Factory-sealed- Makes these batteries maintenance free.</li>
                <li>Polypropylene case- Made from strong durable material, can withstand road shock and vibration.</li>
                <li>Liquid-gas separator area- Returns liquid to reservoir for longer life.</li>
                <li>Integrated or rope handle- For ease of transport and installation.</li>
                <li>Flame arrester- Safety system, prevents explosion from sparks outside the battery, minimizes acid leakage, and prevents inflow of dust.</li>
                <li>Heat sealed covers - Helps prevent electrolyte contamination and increase case strength.</li>
                <li>Centered cast on plate strap - Stronger than thinner gas-burned conventional connectors.</li>
                <li>Low resistance envelope separators - Encapsulated negative plates help to prevent shorting / treeing between negative and positive plates as well as aid vibration durability.</li>
                <li>Increased battery shelf life - Compared to conventional batteries, up to 12 months shelf life without charging due to the use of calcium / calcium grids.</li>
			</ul>
        </div>
        <div id="Specifications" class="tabcontent">
            <h2>Specifications of AC Delco DIN100</h2>
            <table width="100%" border="0">
              <tbody>
                <tr>
                  <td width="30%">Battery Capacity</td>
                  <td width="70%">100 Ah</td>
                </tr>
                <tr>
                  <td width="30%">Warranty</td>
                  <td width="70%">60 Months(30 Months Free Of Cost + 30 Months Pro Rata)</td>
                </tr>
                <tr>
                  <td width="30%">Dimension (LxWxH) in mm</td>
                  <td width="70%">353x175x190</td>
                </tr>
                <tr>
                  <td width="30%">Battery Layout</td>
                  <td width="70%">Left Layout</td>
                </tr>
              </tbody>
            </table>
        </div>
    </section>
    <section class="similar-product clear">
		<h2>Similar Products</h2>
		<div class="similar-prod owl-carousel owl-theme">
			<div class="item">
				<a href="javascript:void(0)" data-modal="quick-shop" class="button quick-shop">Quick Shop</a>
				<figure>
				<figcaption>
					<div class="shop-icons">
						<a href="#" title="Cart"><i class="fa fa-shopping-cart"></i></a>
						<a href="#" title="Wishlist"><i class="fa fa-heart"></i></a>
						<a href="#" title="View Product"><i class="fa fa-eye"></i></a>
					</div>
					<h3>Product Name</h3>
					<h2>Rs.4000/-</h2>
				</figcaption>
				<img src="<?php echo $site_path; ?>images/products.jpg">
				</figure>
			</div>
			<div class="item">
				<a href="javascript:void(0)" data-modal="quick-shop" class="button quick-shop">Quick Shop</a>
				<figure>
				<figcaption>
					<div class="shop-icons">
						<a href="#" title="Cart"><i class="fa fa-shopping-cart"></i></a>
						<a href="#" title="Wishlist"><i class="fa fa-heart"></i></a>
						<a href="#" title="View Product"><i class="fa fa-eye"></i></a>
					</div>
					<h3>Product Name</h3>
					<h2>Rs.4000/-</h2>
				</figcaption>
				<img src="<?php echo $site_path; ?>images/products.jpg">
				</figure>
			</div>
			<div class="item">
				<a href="javascript:void(0)" data-modal="quick-shop" class="button quick-shop">Quick Shop</a>
				<figure>
				<figcaption>
					<div class="shop-icons">
						<a href="#" title="Cart"><i class="fa fa-shopping-cart"></i></a>
						<a href="#" title="Wishlist"><i class="fa fa-heart"></i></a>
						<a href="#" title="View Product"><i class="fa fa-eye"></i></a>
					</div>
					<h3>Product Name</h3>
					<h2>Rs.4000/-</h2>
				</figcaption>
				<img src="<?php echo $site_path; ?>images/products.jpg">
				</figure>
			</div>
			<div class="item">
				<a href="javascript:void(0)" data-modal="quick-shop" class="button quick-shop">Quick Shop</a>
				<figure>
				<figcaption>
					<div class="shop-icons">
						<a href="#" title="Cart"><i class="fa fa-shopping-cart"></i></a>
						<a href="#" title="Wishlist"><i class="fa fa-heart"></i></a>
						<a href="#" title="View Product"><i class="fa fa-eye"></i></a>
					</div>
					<h3>Product Name</h3>
					<h2>Rs.4000/-</h2>
				</figcaption>
				<img src="<?php echo $site_path; ?>images/products.jpg">
				</figure>
			</div>
			<div class="item">
				<a href="javascript:void(0)" data-modal="quick-shop" class="button quick-shop">Quick Shop</a>
				<figure>
				<figcaption>
					<div class="shop-icons">
						<a href="#" title="Cart"><i class="fa fa-shopping-cart"></i></a>
						<a href="#" title="Wishlist"><i class="fa fa-heart"></i></a>
						<a href="#" title="View Product"><i class="fa fa-eye"></i></a>
					</div>
					<h3>Product Name</h3>
					<h2>Rs.4000/-</h2>
				</figcaption>
				<img src="<?php echo $site_path; ?>images/products.jpg">
				</figure>
			</div>
		</div>
	</section>
</section>
<?php include("footer.php");?>