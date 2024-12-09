@extends('front_end.header')
@section('content')
<header class="banner-heading clear">
	<h2 class="left">About Us</h2>
	<div class="banner-nav right">
		<ul>
			<li><a href="{{'/'}}">Home</a></li>
			<li>About Us</li>
		</ul>
	</div>
</header>
<section class="section">
    <section class="section-content clear">
        <p><b>XPS BATTERY STORE</b> is a group concern of <b>INDIA BATTERY WORKS</b> which was started in <b>1948</b>, with over <b>70</b> years of leadership experience & served over lakhs of customers in battery trading. We have created a strong goodwill in customers heart & mind.</p>
        <p>The ultimate mission of XPS Battery Store is to deliver superior Quality Products & services to our valuable customers with our hi-tech facility.</p>
        <p><b>WE ARE AUTHORISED DEALERS & DISTRIBUTORS FOR</b></p>

    
        @php
        $cat_info = DB::table('brandmaster')->where('Brand_Status','Active')->orderBy('BrandID', 'asc')->get();
        $brands = array();
        @endphp

        @foreach ($cat_info as $row_shop)
        <!-- <p><b>{{$row_shop->BrandName}}</b> chargers & load testers, <b>NUMERIC, POWERZONE, DYNEX, LUMINIOUS UPS & BATTERIES</b> etc.</p> -->
        <?php array_push($brands,$row_shop->BrandName); ?>
        @endforeach

        <p><b style="text-transform: uppercase;"><?php echo implode(", ",$brands); ?></b> chargers & load testers, <b>NUMERIC, LUMINIOUS UPS & BATTERIES</b> etc.</p>



        <!-- <p><b>AMARON, AMS BATTERIES, Z POWER, EXIDE, ELAK</b> chargers & load testers, <b>NUMERIC, POWERZONE, DYNEX, LUMINIOUS UPS & BATTERIES</b> etc.</p> -->
        <p>As for the customer satisfaction & better understanding of the products they buy, we conduct special training & development program for our staff to make easy & effective purchase.</p>
        <p>Battery is now a brand that has earned a unique status by becoming almost generic to the category with a high unaided recall with target audiences.</p>
    </section>
    <section class="about-batteries clear">
    	<h2><span>XPS BATTERY STORE</span> IS A PRIMARY TRADERS FOR</h2>
        <ul>
			<li><figcaption><img src="assets/front_end/images/battery1.jpg"><h4>AUTOMOTIVE BATTERIES</h4></figcaption></li>
			<li><figcaption><img src="assets/front_end/images/battery2.jpg"><h4>INDUSTRIAL / UPS BATTERIES</h4></figcaption></li>
			<li><figcaption><img src="assets/front_end/images/battery3.jpg"><h4>HOME UPS, OFFLINE UPS & ONLINE UPS.(STARTS FROM 400VA -20KVA)</h4></figcaption></li>
			<li><figcaption><img src="assets/front_end/images/battery4.jpg"><h4>BATTERY SPARES</figcaption></h4></li>
			<li><figcaption><img src="assets/front_end/images/battery5.jpg"><h4>BATTERY CHARGERS & TESTING EQUIPMENTS</figcaption></h4></li>
        </ul>
    </section>
    <section class="section-content clear">
    	<h3>We are authorised dealers & distributors for</h3>
        <p>Amaron, AMS Batteries, Base Terminal, Exide, Elak chargers & load testers, Numeric UPS, Powerzone, SF Sonic, Shine Technology UPS etc.</p>
        <p>As for the customer satisfaction & better understanding of the products they buy, we conduct special training & development program for our staff to make easy & effective purchase.For further details releated to our services contact our customer care no. <a href="tel:+918056821111">+91-80568 21111</a></p>
    </section>
    <section class="section-contact clear">
    	<h3>Get in Touch with us Today!</h3>
    	<h2>Feedback and Complaints</h2>
        <a href="{{'contact'}}">Contact US</a>
    </section>
    <section class="section-testimonial clear">
    	<h2><span>Our Happy</span> Customers</h2>
		<div class="testimonial owl-carousel owl-theme">
             @php
            $result = DB::table('testimonial')->where('type', '!=', '')->get();
        @endphp
        @foreach ($result as $row)
			<div class="item">
            	<figure class="left"><img src="<?php echo url('/'); ?>/image/{{$row->image}}"></figure>
                <aside class="right">
                	<p>{{$row->content}}</p>
                    <h3>{{$row->name}}</h3>
                </aside>
         	<div class="clear"></div>
			</div>
            @endforeach
			<!-- <div class="item">
            	<figure class="left"><img src="assets/front_end/images/photo.jpg"></figure>
                <aside class="right">
                	<p>This is my first time, I am really impressed with the co. The easy way to select battery plus competitive price and timely installation and online chat helped me in selection and also claring my doubts??</p>
                    <h3>Client Name</h3>
                </aside>
         	<div class="clear"></div>
			</div>
			<div class="item">
            	<figure class="left"><img src="assets/front_end/images/photo.jpg"></figure>
                <aside class="right">
                	<p>This is my first time, I am really impressed with the co. The easy way to select battery plus competitive price and timely installation and online chat helped me in selection and also claring my doubts??</p>
                    <h3>Client Name</h3>
                </aside>
         	<div class="clear"></div>
			</div> -->
		</div>
    </section>
</section>
@endsection