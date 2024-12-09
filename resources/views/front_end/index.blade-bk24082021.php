@extends('front_end.header')
@section('content')
<header class="banner clear">
	<div class="container">
        <div id="slick">
        @php
                    $slide = DB::table('slider_image')->get();
                @endphp
                @foreach ($slide as $sliderow)
                <div>
                <div class="img--holder slide--has-caption" style="background-image: url(image/{{$sliderow->image}})">
                	<div class="caption wow fadeInUp" data-wow-delay=".2s">
                        <div>
                        <h2>Find a Professional Installation for Car & Inverter Batteries</h2>
            			<a href="products">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
                @endforeach
        </div>
    </div>
</header>
<section class="section">
    <section class="battery-finder clear">
    	<h2 class="left">Quick<br><small>Battery Finder</small></h2>
        <fieldset class="right">
        	
        		<select id="idcategory" class="dropdownsytyle">
                <option value="0">All</option>
                @php
                    $cat_select = DB::table('categorymaster')->get();
                @endphp
                @foreach ($cat_select as $row)
                    <option value="{{$row->CategoryID}}">{{$row->CategoryName}}</option>
                @endforeach
                </select> 
        	
        	<!-- <div class="custom-select">
        		<select>
        			<option value="0">Make</option>
                    <option value="1">Make One</option>
                    <option value="1">Make Two</option>
                    <option value="1">Make Three</option>
                    <option value="1">Make Four</option>
                    <option value="1">Make Five</option>
                    <option value="1">Make Six</option>
        		</select>
        	</div> -->
        	<!-- <div class="custom-select"> -->
        		<select id="idproduct"  class="dropdownsytyle">
                <option value="0">All</option>
                @php
                    $cat_select = DB::table('productmaster')->get();
                @endphp
                @foreach ($cat_select as $row)
                    <option value="{{$row->ProductID}}">{{$row->ProductModelNo}}</option>
                @endforeach
        		</select>
        	<!-- </div>
        	<div class="custom-select"> -->
        		<select id="idbrand"  class="dropdownsytyle">
                <option value="0">All</option>
                @php
                        $brand = DB::table('brandmaster')->get();
                    @endphp
                    @foreach ($brand as $row)
                    <option value="{{$row->BrandID}}">{{$row->BrandName}}</option>
                @endforeach
        		    </select>
        	<!-- </div> -->
        	<!-- <div class="custom-select">
        		<select>
        			<option value="0">State</option>
                    <option value="1">State One</option>
                    <option value="1">State Two</option>
                    <option value="1">State Three</option>
                    <option value="1">State Four</option>
                    <option value="1">State Five</option>
                    <option value="1">State Six</option>
        		</select>
        	</div>
        	<div class="custom-select">
        		<select>
        			<option value="0">City</option>
                    <option value="1">City One</option>
                    <option value="1">City Two</option>
                    <option value="1">City Three</option>
                    <option value="1">City Four</option>
                    <option value="1">City Five</option>
                    <option value="1">City Six</option>
        		</select>
        	</div> -->
            <div class="clear"></div>
			<input name="Find-Your-Battery" onclick="loadproducts();" type="button" style="width: 32.333333%;margin: 0.5%; background: #006f3b; border: none; padding: 13px 30px; outline: 0; color: #fff; font-weight: 700; cursor: pointer; font-size: 18px; font-family: 'Muli', sans-serif; border-radius: 2px; box-shadow: 2px 4px 8px rgba(159, 178, 169, 0.8);" value="Find Your Battery"  id="contact-button"/>
        </fieldset>
    </section>
    <section class="shop-by-category clear">
		<h2><span>SHOP BY</span> CATEGORY</h2>
    	<ul>
        	<li>
                <a href="products">
                    <figcaption><h3>Car Battery</h3></figcaption>
                    <figure><img src="assets/front_end/images/Car-Battery.png"></figure>
                    <h4>Car Battery</h4>
                </a>
            </li>
        	<li>
                <a href="products">
                    <figcaption><h3>Bike Battery</h3></figcaption>
                    <figure><img src="assets/front_end/images/Bike-Battery.png"></figure>
                    <h4>Bike Battery</h4>
                </a>
            </li>
        	<li>
                <a href="products">
                    <figcaption><h3>Inverter / Ups</h3></figcaption>
                    <figure><img src="assets/front_end/images/Inverter-Ups.png"></figure>
                    <h4>Inverter / Ups</h4>
                </a>
            </li>
        	<li>
                <a href="products">
                    <figcaption><h3>Inverter Battery</h3></figcaption>
                    <figure><img src="assets/front_end/images/Inverter-Battery.png"></figure>
                    <h4>Inverter Battery</h4>
                </a>
            </li>
        	<li>
                <a href="products">
                    <figcaption><h3>Inverter Ups / Combo</h3></figcaption>
                    <figure><img src="assets/front_end/images/Inverter-Ups-Combo.png"></figure>
                    <h4>Inverter Ups / Combo</h4>
                </a>
            </li>
        </ul>
    </section>
    <section class="shop-by-manufacturer clear" style="display:none">
	  	<h2><span>SHOP BY</span> MANUFACTURERS</h2>
        <ul>
        	<li>
            	<a href="products">
                <svg viewBox="0 0 427.143 427.144"><rect width="427.143" height="427.144"/></svg>
				<figcaption><h3>Maruti Suzuki</h3></figcaption>
                <figure><img src="assets/front_end/images/maruthi-suzuki.jpg"></figure>
                </a>
            </li>
        	<li>
            	<a href="products">
                <svg viewBox="0 0 427.143 427.144"><rect width="427.143" height="427.144"/></svg>
				<figcaption><h3>Hundai</h3></figcaption>
                <figure><img src="assets/front_end/images/hundai.jpg"></figure>
                </a>
            </li>
        	<li>
            <a href="products">
                <svg viewBox="0 0 427.143 427.144"><rect width="427.143" height="427.144"/></svg>
				<figcaption><h3>Tata</h3></figcaption>
                <figure><img src="assets/front_end/images/tata.jpg"></figure>
                </a>
            </li>
        	<li>
            <a href="products">
                <svg viewBox="0 0 427.143 427.144"><rect width="427.143" height="427.144"/></svg>
				<figcaption><h3>Mahindra</h3></figcaption>
                <figure><img src="assets/front_end/images/mahindra.jpg"></figure>
                </a>
            </li>
        	<li>
            <a href="products">
                <svg viewBox="0 0 427.143 427.144"><rect width="427.143" height="427.144"/></svg>
				<figcaption><h3>Toyota</h3></figcaption>
                <figure><img src="assets/front_end/images/toyota.jpg"></figure>
                </a>
            </li>
        	<li>
            <a href="products">
                <svg viewBox="0 0 427.143 427.144"><rect width="427.143" height="427.144"/></svg>
				<figcaption><h3>Honda</h3></figcaption>
                <figure><img src="assets/front_end/images/honda.jpg"></figure>
                </a>
            </li>
        	<li>
            <a href="products">
                <svg viewBox="0 0 427.143 427.144"><rect width="427.143" height="427.144"/></svg>
				<figcaption><h3>Volkswagen</h3></figcaption>
                <figure><img src="assets/front_end/images/volkswagen.jpg"></figure>
                </a>
            </li>
        	<li>
            <a href="products">
                <svg viewBox="0 0 427.143 427.144"><rect width="427.143" height="427.144"/></svg>
				<figcaption><h3>Skoda</h3></figcaption>
                <figure><img src="assets/front_end/images/skoda.jpg"></figure>
                </a>
            </li>
        	<li>
            	<a href="products">
                <svg viewBox="0 0 427.143 427.144"><rect width="427.143" height="427.144"/></svg>
				<figcaption><h3>Renault</h3></figcaption>
                <figure><img src="assets/front_end/images/renault.jpg"></figure>
                </a>
            </li>
        	<li>
            	<a href="products">
                <svg viewBox="0 0 427.143 427.144"><rect width="427.143" height="427.144"/></svg>
				<figcaption><h3>Nissan</h3></figcaption>
                <figure><img src="assets/front_end/images/nissan.jpg"></figure>
                </a>
            </li>
        	<li>
            	<a href="products">
                <svg viewBox="0 0 427.143 427.144"><rect width="427.143" height="427.144"/></svg>
				<figcaption><h3>Ford</h3></figcaption>
                <figure><img src="assets/front_end/images/ford.jpg"></figure>
                </a>
            </li>
        	<li>
            	<a href="products">
                <svg viewBox="0 0 427.143 427.144"><rect width="427.143" height="427.144"/></svg>
				<figcaption><h3>Audi</h3></figcaption>
                <figure><img src="assets/front_end/images/audi.jpg"></figure>
                </a>
            </li>
        	<li>
            	<a href="products">
                <svg viewBox="0 0 427.143 427.144"><rect width="427.143" height="427.144"/></svg>
				<figcaption><h3>Bmw</h3></figcaption>
                <figure><img src="assets/front_end/images/bmw.jpg"></figure>
                </a>
            </li>
        	<li>
            	<a href="products">
                <svg viewBox="0 0 427.143 427.144"><rect width="427.143" height="427.144"/></svg>
				<figcaption><h3>Chevrolet</h3></figcaption>
                <figure><img src="assets/front_end/images/chevrolet.jpg"></figure>
                </a>
            </li>
        	<li>
            	<a href="products">
                <svg viewBox="0 0 427.143 427.144"><rect width="427.143" height="427.144"/></svg>
				<figcaption><h3>Flat</h3></figcaption>
                <figure><img src="assets/front_end/images/flat.jpg"></figure>
                </a>
            </li>
        	<li>
            	<a href="products">
                <svg viewBox="0 0 427.143 427.144"><rect width="427.143" height="427.144"/></svg>
				<figcaption><h3>Maruti Suzuki</h3></figcaption>
                <figure><img src="assets/front_end/images/alfa-romeo.jpg"></figure>
                </a>
            </li>
        	<li>
            	<a href="products">
                <svg viewBox="0 0 427.143 427.144"><rect width="427.143" height="427.144"/></svg>
				<figcaption><h3>Daewoo</h3></figcaption>
                <figure><img src="assets/front_end/images/daewoo.jpg"></figure>
                </a>
            </li>
        	<li>
            	<a href="products">
                <svg viewBox="0 0 427.143 427.144"><rect width="427.143" height="427.144"/></svg>
				<figcaption><h3>Force</h3></figcaption>
                <figure><img src="assets/front_end/images/force.jpg"></figure>
                </a>
            </li>
        </ul>
        <a href="#" class="link">View More Manufacturers</a>
    </section>
    <section class="feautre-products clear">
    	<aside class="feautre-offer left">
        	<h2>Feautre Products</h2>
            <figure><img src="assets/front_end/images/Feautre-Products.jpg"></figure>
        </aside>
    	<aside class="product-show right" id="container">
          	<div class="products-slide owl-carousel owl-theme">
                @php
                    $product = DB::table('productmaster')
                                            ->join('categorymaster', 'categorymaster.CategoryID', '=', 'productmaster.CategoryID')
                                            ->join('brandmaster', 'brandmaster.BrandID', '=', 'productmaster.BrandID')
                                            ->join('subbrand', 'subbrand.SubBrandID', '=', 'productmaster.SubBrandID')                                            
                                            ->get();
                
                @endphp
                     @foreach ($product as $row_product)
				<div class="item">
                    <a href="shop&id={{ $row_product->ProductID }}"  class="button quick-shop">Quick Shop</a>
            		<figure>
                    <figcaption>
                    	<div class="shop-icons">
                    		<a href="javascript:void(0);" data-id="{{ $row_product->ProductID }}" class="add-to-cart" data-price="{{$row_product->MRP}}" data-rate="{{$row_product->OnlinePricing}}" title="Cart"><i class="fa fa-shopping-cart"></i></a>
                    		<a href="#" title="Wishlist"><i class="fa fa-heart"></i></a>
                    		<a href="shop&id={{ $row_product->ProductID }}" title="View Product"><i class="fa fa-eye"></i></a>
                        </div>
                        <h3>{{$row_product->BrandName}}</h3>
                        <h2><del style="color: black;font-size: 18px;">Rs.{{$row_product->MRP}}</del> Rs.{{$row_product->OnlinePricing}}/-</h2>
                    </figcaption>
                    <img src="{{$row_product->image}}">
                    </figure>
              	</div>
                @endforeach
            </div>
        </aside>
    </section>
    <section class="section-contact clear">
    	<h3>Get in Touch with us Today!</h3>
    	<h2>Feedback and Complaints</h2>
        <a href="contact">Contact US</a>
    </section>
    <section class="section-testimonial clear">
    	<h2><span>Our Happy</span> Customers</h2>
		<div class="testimonial owl-carousel owl-theme">
        @php
            $result = DB::table('testimonial')->where('type', '!=', '')->get();
        @endphp
        @foreach ($result as $row)
			<div class="item">
            	<figure class="left"><img src=image/{{$row->image}}></figure>
                <aside class="right">
                	<p>{{$row->content}}</p>
                    <h3>{{$row->name}}</h3>
                </aside>
         	<div class="clear"></div>
			</div>
            @endforeach
		</div>
    </section>
</section>
<div class="cd-cart-container empty"> 
    
        <a href="#0" class="cd-cart-trigger"> Cart
      <ul class="count">
        <!-- cart items count -->
        <li>0</li>
        <li>1</li>
      </ul>
      <!-- count -->
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
              <!-- products added to the cart will be inserted here using JavaScript -->
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
   </div>

   <script type="text/javascript">

   function loadproducts() {
    $.ajax({
            url: '{{ url('sessionfilter') }}',
            method: "POST",
            data: {categoryid: $("#idcategory").val(),
            modelid: $("#idproduct").val(),
            brandid: $("#idbrand").val(),
            _token: '{{ csrf_token() }}'},
            dataType: "json",
            success: function (response) {  
                //console.log(response);            
                window.location = '{{ url('products') }}';
            }
        });
   }
$(".add-to-cart").click(function (e) {
        e.preventDefault();
        var ele = $(this);
        ele.siblings('.btn-loading').show();
        var price=ele.attr("data-price") - (ele.attr("data-price") * {{env('DEFAULT_DISCOUNT')}}/100);
        $.ajax({
            url: '{{ url('add-to-cart') }}',
            method: "POST",
            data: {quantity: 1,
            defaultdiscount: {{env('DEFAULT_DISCOUNT')}},
            scrabamount: 0,
            originalrate: ele.attr("data-price"),
            rate: ele.attr("data-rate"),
            productid: ele.attr("data-id"),
            _token: '{{ csrf_token() }}'},
            dataType: "json",
            success: function (response) {              
                ele.siblings('.btn-loading').hide();
                $("span#status").html('<div class="alert alert-success">'+response.msg+'</div>');
                $("#header-bar").html(response.data);

                location.reload();
            }
        });
    });
</script>
@endsection