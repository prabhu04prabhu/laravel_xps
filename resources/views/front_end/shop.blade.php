@extends('front_end.header')
@section('content')
<header class="banner-heading clear">
	<h2 class="left">Shop</h2>
	<div class="banner-nav right">
		<ul>
			<li><a href="#">Home</a></li>
			<li>Shop</li>
		</ul>
	</div>
</header>
     @php
     $view_id = request('ProductID');
        $shop = DB::table('productmaster')
                    ->join('categorymaster', 'categorymaster.CategoryID', '=', 'productmaster.CategoryID')
                    ->join('brandmaster', 'brandmaster.BrandID', '=', 'productmaster.BrandID')
                    ->join('subbrand', 'subbrand.SubBrandID', '=', 'productmaster.SubBrandID') 
                    ->join('capacitymaster', 'capacitymaster.CapacityID', '=', 'productmaster.CapacityID') 
                    ->where('ProductID',$view_id)                                           
                    ->get();
                
                @endphp
                     @foreach ($shop as $row_shop)  
    <section class="section-content shop clear">  
		<aside class="product-image left">
            <img src="{{$row_shop->image}}" title="Product Image" alt="Product Image">
        </aside>
    	<aside class="product-details right">
        	<div class="product-details-col-left left">
                <h2 style="width:auto;">{{$row_shop->BrandName}} {{$row_shop->ProductModelNo}} {{$row_shop->ProductCode}}</h2>
                <h3>QUICK OVERVIEW</h3>
                <p><strong>Product Brand</strong> : {{$row_shop->BrandName}}<br>
                <strong>Model Number</strong> : {{$row_shop->ProductModelNo}}<br>
                <strong>Product Name</strong> : {{$row_shop->SubBrandName}}<br>
                <strong>Product Capacity</strong> : {{$row_shop->CapacityName}}<br>
                <strong>Product Warranty</strong> : {{$row_shop->Warranty}}</p>
                <h4>Availability : 
                    <?php if($row_shop->availability == 'Yes'){?>
                        <span>In Stock</span> <?php }else{ ?>
                        <span>Out of Stock</span><?php } ?></h4>
                <figcaption>Price: <del>Rs. {{$row_shop->MRP}}</del> <span>{{$row_shop->discount_percent}}% OFF</span> </figcaption>
                <!-- <div class="battery-price clear">
                    <input name="With Old Battery" class="checkbox-custom" id="With_Old_Battery" type="checkbox" value="With Old Battery" >
                    <?php $withold = 0 ?>
                    <?php $withold = $row_shop->OnlinePricing -  $row_shop->scrab_amount;  ?>
                    <label class="checkbox-custom-label" for="With Old Battery" >With Old Battery: <strong>Rs. {{$withold}}</strong></label>
                </div>
                <div class="battery-price clear" style='display:none;'>
                <?php $total = 0 ?>
                    <?php $total = $row_shop->OnlinePricing  ?>
                
                    <input name="Without Old Battery" class="checkbox-custom" id="Without Old Battery" type="checkbox" value="Without Old Battery">
                   
				    <label class="checkbox-custom-label" for="Without Old Battery" >Without Old Battery: <strong>Rs. {{$total}}</strong></label>
                </div> -->
                <div class="battery-price clear">
                <?php $withold = 0 ?>
                    <?php $withold = $row_shop->OnlinePricing - $row_shop->scrab_amount;  ?>
                    <input name="With_Old_Battery" class="checkbox-custom" id="With_Old_Battery" type="checkbox" value="With Old Battery" >
                    <label class="checkbox-custom-label" for="With_Old_Battery" >With Old Battery: <strong>Rs. {{$withold}}</strong> (Rs.{{$row_shop->scrab_amount}} off)</label>
                </div>
                <?php $total = 0 ?>
                    <?php $total = $row_shop->OnlinePricing ?>
                <input name="name" style='display:none;' type="text" placeholder=""  id="txtprice" value="{{$total}}"/>
                <input name="name" style='display:none;' type="text" placeholder=""  id="txtoriginalprice" value="{{$row_shop->MRP}}"/>
                <input name="name" style='display:none;' type="text" placeholder=""  id="txtonlineprice" value="{{$row_shop->OnlinePricing}}"/>
                <input name="name" style='display:none;' type="text" placeholder=""  id="txtDiscount" value="{{$row_shop->discount_percent}}"/>
                <input name="name" style='display:none;' type="text" placeholder=""  id="txtscrap" value="{{$row_shop->scrab_amount}}"/>
                <div class="product-short-desc clear">
                	<p><strong>Note:</strong></p>
                    <ul class="notes">
                    <li>Additionally, discount on return of simillar old battery</li>
                      <!-- <li>Additionally, discount upto ₹290 per unit on return of simillar old battery</li> -->
                      <li>Your Old Battery Should be of Same AH Capacity as the New Battery Ordered. If not Price with Old Battery Take Back will differ.</li>
                    </ul>
                    <p>For help Call <a href="tel:+918056821111">+91-80568 21111</a> or <a href="mailto:info@xpsbatterystore.com"><span>Email Us</span></a></p>
                </div>
            </div>
        	<div class="product-details-col-right right">
            	<ul class="list">
                    <li>Brand New & 100% Genuine</li>
                    <li>Delivered in 4 - 24 Hours*</li>
                    <li>Free Delivery & Installation</li>
                    <li>Cash on Delivery</li>
                </ul>
                <?php $total = 0 ?>
                    <?php $total = $row_shop->OnlinePricing?>
                <h1 id="iRate">₹ {{$total}}</h1><h1><small>(Prices are inclusive of all taxes)</small></h1>
                <form>
                	<h5>Quantity</h5>
                	<div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
                	<input type="number" id="number" min="1" value="1" readonly="true" />
                	<div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
                </form>
				<!-- <a   class="btn btn-warning btn-block text-center add-to-cart" role="button">Add to cart</a> -->
            	
				<a href="javascript:void(0);" data-id="{{ $row_shop->ProductID }}" class="btn btn-warning btn-block text-center add-to-cart" role="button"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Add to cart</a>
                
				<!-- <a href="javascript:void(0);" id="addcart" role="button" class="add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</a> -->
            </div>
        </aside>
    </section>
    <section class="product-description clear">
    	<div class="tab">
          <button class="tablinks" onclick="opensection(event, 'Description')" id="defaultOpen">Description</button>
          <button class="tablinks" onclick="opensection(event, 'Specifications')">Specifications</button>
        </div>
        <div id="Description" class="tabcontent">
            <?php 
            echo $row_shop->Descriptions;
                ?>
            <!-- <h2>AC Delco DIN100 Description</h2>
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
			</ul> -->
        </div>
        <div id="Specifications" class="tabcontent">
             <?php 
            echo html_entity_decode($row_shop->specification);
                ?>
            <!-- {{$row_shop->specification}} -->
           <!-- <h2>Specifications of AC Delco DIN100</h2>
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
            </table> -->
        </div>
    </section>
    
    <section class="similar-product clear">
		<h2>Similar Products</h2>
		<div class="similar-prod owl-carousel owl-theme">
    @php
                        $product = DB::table('productmaster')
                                            ->join('categorymaster', 'categorymaster.CategoryID', '=', 'productmaster.CategoryID')
                                            ->join('brandmaster', 'brandmaster.BrandID', '=', 'productmaster.BrandID')
                                            ->join('subbrand', 'subbrand.SubBrandID', '=', 'productmaster.SubBrandID')                                            
                                            ->where('ProductID','!=',$view_id)    
                                            ->where(function($query) use ($row_shop){
                                              $query->where('brandmaster.BrandID',$row_shop->BrandID)
                                                    ->orWhere('categorymaster.CategoryID',$row_shop->CategoryID);  
                                                })                                       
                                            ->get();
                
                @endphp
                     @foreach ($product as $row_product)
			<div class="item">
      <a href="shop&id={{ $row_product->ProductID }}"  class="button quick-shop">Quick Shop</a>
				<figure>
				<figcaption>
					<div class="shop-icons">
          <a href="javascript:void(0);" data-id="{{ $row_product->ProductID }}" class="add-to-cart1" data-price="{{$row_product->MRP}}" data-rate="{{$row_product->OnlinePricing}}" title="Cart"><i class="fa fa-shopping-cart"></i></a>
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
	</section>
  @endforeach
</section>

<script type="text/javascript">
  var scrapprice=0; Withoutscrabrate=0;
  $(document).ready(function() {
    //Withoutscrabrate=
  });
 $("#With_Old_Battery").click(function() {
      var originalprice=$("#txtonlineprice").val();
    if (!$(this).is(':checked')) {
      scrapprice=0;
      $("#iRate").text("₹ " +(originalprice).toString());
    }else{
      scrapprice=$('#txtscrap').val();
      $("#iRate").text( "₹ " + (originalprice - scrapprice).toString());
    }
    });
$(".add-to-cart").click(function (e) {
        e.preventDefault();
        var ele = $(this);
        ele.siblings('.btn-loading').show();
        $.ajax({
            url: '{{ url('add-to-cart') }}',
            method: "POST",
            data: {quantity: document.getElementById("number").value,
            defaultdiscount: document.getElementById("txtDiscount").value,
            scrabamount: scrapprice,
            originalrate: document.getElementById("txtoriginalprice").value,
            rate: document.getElementById("txtprice").value,
            productid: ele.attr("data-id"),
            _token: '{{ csrf_token() }}'},
            dataType: "json",
            success: function (response) {              
                ele.siblings('.btn-loading').hide();
                $("span#status").html('<div class="alert alert-success">'+response.msg+'</div>');
                $("#header-bar").html(response.data);
                var total = response.total;
                var data = response.data;
                // console.log(data[595]);
                $('#cart_body').html('');
                var subtotal = 0;
                $.each(data, function(key,val) {
                    console.log(val);
                    var total = val.price * val.quantity;
                    total = total - val.scrabamount;
                    subtotal = subtotal + total;
                    $('#cart_body').append('<tr><td data-th="Product"><div class="row"><div class="col-sm-3 hidden-xs"><img src="'+val.photo+'" width="100" height="100" class="img-responsive"/></div><div class="col-sm-9"><h4 class="nomargin">'+val.name+'</h4></div></div></td><td style="text-align: center;" data-th="Price">₹'+val.price+'</td><td style="text-align: center;" data-th="Quantity">'+val.quantity+'</td><td style="text-align: center;" data-th="Subtotal" class="text-center">₹<span class="product-subtotal"> '+total+'</span></td></tr>');
                    // $('#cart_body').append('<p>Hello</p>');
                });            
                $('#sum_subtotal').html(subtotal)
                $('.cart_total_count').html(total);
                $(".toast_message").fadeIn(700);
                setTimeout(
                    function() {
                        $(".toast_message").fadeOut(700);
                    }, 2000);
            }
        });
    });

    $(".add-to-cart1").click(function (e) {
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
                var total = response.total;
                // alert(data);
                $('.cart_total_count').html(total);
                $(".toast_message").fadeIn(700);
                setTimeout(
                    function() {
                        $(".toast_message").fadeOut(700);
                    }, 2000);
            }
        });
    });
    
			
		
</script>
@endsection
