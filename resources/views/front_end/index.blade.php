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

        <section class="shop-by-category clear">
        <h2><span>SHOP BY</span> CATEGORY</h2>
        <ul>
            <li>
                <a href="products?cid=2">
                    <figcaption><h3>Bike Battery</h3></figcaption>
                    <figure><img src="assets/front_end/images/icons/two-wheelers.png"></figure>
                    <h4>Bike  Battery</h4>
                </a>
            </li>
            <li>
                <a href="products?cid=1">
                    <figcaption><h3>Three Wheeler</h3></figcaption>
                    <figure><img src="assets/front_end/images/icons/three-wheelers.png"></figure>
                    <h4>Three Wheelers</h4>
                </a>
            </li>
            <li>
                <a href="products?cid=1">
                    <figcaption><h3>Passenger Vehicle</h3></figcaption>
                    <figure><img src="assets/front_end/images/icons/passenger-vehicles.png"></figure>
                    <h4>Passenger Vehicles</h4>
                </a>
            </li>
            <li>
                <a href="products?cid=6">
                    <figcaption><h3>Commercial Vehicle</h3></figcaption>
                    <figure><img src="assets/front_end/images/icons/commercial-vehicles.png"></figure>
                    <h4>Commercial Vehicles</h4>
                </a>
            </li>
            <li>
                <a href="products?cid=3">
                    <figcaption><h3>Farm Vehicle</h3></figcaption>
                    <figure><img src="assets/front_end/images/icons/farm-vehicle.png"></figure>
                    <h4>Farm Vehicles</h4>
                </a>
            </li>
            <li>
                <a href="products?cid=4">
                    <figcaption><h3>Inverter & Batteries</h3></figcaption>
                    <figure><img src="assets/front_end/images/icons/invertor-battery.png"></figure>
                    <h4>Inverters & Batteries</h4>
                </a>
            </li>
            <li>
                <a href="products?cid=7">
                    <figcaption><h3>E-Vehicle</h3></figcaption>
                    <figure><img src="assets/front_end/images/icons/e-vehicles.png"></figure>
                    <h4>E-Vehicles</h4>
                </a>
            </li>
            <li>
                <a href="products?cid=7">
                    <figcaption><h3>Other Application</h3></figcaption>
                    <figure><img src="assets/front_end/images/icons/other-application.png"></figure>
                    <h4>Other Applications</h4>
                </a>
            </li>
        </ul>
    </section>

    <section class="battery-finder clear" style="display:none;">
        <h2 class="left">Quick<br><small>Buy</small></h2>
        <fieldset class="right">
            
                <select class="dropdownsytyle idcategory" name="state" id="idcategory">
                <option value="SelectState">Select Battery Type</option>       
                <!-- <option value="Car Battery">Car Battery</option>
                        <option value="Bike Battery">Bike Battery</option> -->
               @php
                $cat_info = DB::table('categorymaster')->orderBy('CategoryID', 'asc')->get();
                @endphp
                @foreach ($cat_info as $row_shop)

                <option value="{{$row_shop->CategoryID}}"> {{$row_shop->CategoryName}}</option>
                @endforeach
                        
                      </select>

                <select class="dropdownsytyle idbrand" name="idbrand" id="idbrand" >
                    <option value="">Select Vehicle Brand</option> 
                </select>
            {{-- <select id="idbrand"  class="dropdownsytyle">
                <option value="0">Select Brand Name</option>
                @php
                        $brand = DB::table('brandmaster')->get();
                    @endphp
                    @foreach ($brand as $row)
                    <option value="{{$row->BrandID}}">{{$row->BrandName}}</option>
                @endforeach
                    </select> --}}
                <select id="idmodel" name="idmodel"  class="dropdownsytyle idmodel">
                    <option value="">Select Vehicle Model</option>
                {{-- <option value="0">Select Model</option>
                @php
                $model_info = DB::table('productmaster')->get();
                @endphp
               
                @foreach ($model_info as $row_model)
                <option value="{{$row_model->ProductID}}"> {{$row_model->ProductModelNo}}</option>
                @endforeach --}}
                    </select>
                
                <select id="fueltype" name="fueltype"  class="dropdownsytyle" style="display:none;">
                        <option value="">Select Fuel Type</option>
                        <option value="Petrol">Petrol</option>
                        <option value="Diesel">Diesel</option>
                </select>

                <select id="capacity" name="capacity"  class="dropdownsytyle" style="display:none;">
                    <option value="">Select Capacity</option>
                    @php
                        $cap_info = DB::table('capacitymaster')->orderBy('CapacityName', 'asc')->get();
                        @endphp
                        @foreach ($cap_info as $row_cap)

                        <option value="{{$row_cap->CapacityID}}"> {{$row_cap->CapacityName}}</option>
                        @endforeach
            </select>

               <!--  <select id="appliance" name="appliance"  class="dropdownsytyle" style="display:none;">
                    <option value="">Select Appliance</option>
                    @php
                        $app_info = DB::table('tbl_appliance')->orderBy('app_id', 'asc')->get();
                        @endphp
                        @foreach ($app_info as $row_app)

                        <option value="{{$row_app->app_id}}"> {{$row_app->name}}</option>
                        @endforeach
            </select> -->

            <div id="appliance">
               <!--  <input type="text" name=""> -->
            </div>
            


            <div class="clear"></div>
            <input name="Find-Your-Battery" onclick="loadproducts();" type="button" class="find"  value="Find Your Battery"  id="contact-button"/>
        </fieldset>
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
        {{-- <aside class="feautre-offer left">
            <h2 style="width:auto;">Feature Products</h2>
            <figure><img src="assets/front_end/images/Feautre-Products.jpg" style="width: 100%;"></figure>
        </aside> --}}
        <div class="feautre-offer left">
            <h2>Feature Products</h2>
        </div>
        <aside class="product-show" id="container">
             
            <div class="products-slide owl-carousel owl-theme">
                @php
                    $product = DB::table('productmaster')
                                            ->join('categorymaster', 'categorymaster.CategoryID', '=', 'productmaster.CategoryID')
                                            ->join('brandmaster', 'brandmaster.BrandID', '=', 'productmaster.BrandID')
                                            ->join('subbrand', 'subbrand.SubBrandID', '=', 'productmaster.SubBrandID')->limit(7)->get();
                
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
        <a href="https://www.google.com/search?q=xps%20battery%20store&hl=en&source=hp&ei=PK3OYqjiLrCYseMPsNqjoAo&iflsig=AJiK0e8AAAAAYs67TKyePgna7JuHR2js1mBsUs2cnZ6Q&oq=xpsbatter&gs_lcp=Cgdnd3Mtd2l6EAMYADIHCAAQyQMQDTIECAAQDTIECAAQDTILCC4QkgMQxwEQrwEyBAgAEA0yBAgAEA0yBAgAEA0yBAgAEA0yBAgAEA0yBAgAEA06CwgAELEDEIMBEJECOggIABCxAxCRAjoLCC4QgAQQsQMQgwE6CwgAEIAEELEDEIMBOhEILhCABBCxAxCDARDHARDRAzoKCAAQsQMQgwEQQzoECAAQQzoFCAAQkQI6CAgAEIAEELEDOgUIABCABDoHCAAQgAQQCjoKCAAQsQMQgwEQCjoKCC4QxwEQrwEQCjoNCAAQsQMQgwEQyQMQCjoFCAAQkgM6BAgAEAo6BwgAEMkDEApQAFjgEWDdGWgAcAB4AIABrQGIAewIkgEDMC45mAEAoAEB&sclient=gws-wiz&tbs=lf:1,lf_ui:2&tbm=lcl&rflfq=1&num=10&rldimm=1646083520512020702&lqi=ChF4cHMgYmF0dGVyeSBzdG9yZUjt0J_B_ayAgAhaHxAAEAEQAhgAGAEYAiIReHBzIGJhdHRlcnkgc3RvcmWSAQ1iYXR0ZXJ5X3N0b3Jl&ved=2ahUKEwjFqOaZ4vX4AhXuTmwGHSXECIcQvS56BAgEEAE&sa=X&rlst=f#lrd=0x3babf1c4d206ac1b:0x16d8103d96be50de,1,,,&rlfi=hd:;si:1646083520512020702,l,ChF4cHMgYmF0dGVyeSBzdG9yZUjt0J_B_ayAgAhaHxAAEAEQAhgAGAEYAiIReHBzIGJhdHRlcnkgc3RvcmWSAQ1iYXR0ZXJ5X3N0b3Jl;mv:[[11.6566874,78.17227989999999],[11.656575199999999,78.1566943]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:2" target="_blank" class="linkbox right">Add Review</a>
        <div class="clear"></div>
        <div class="testimonial owl-carousel owl-theme">
        @php
            $result = DB::table('testimonial')->where('type', '!=', '')->orderBy('t_id', 'desc')->limit(10)->get();
        @endphp
        @foreach ($result as $row)
            <div class="item">
                <figure class="left"> <img src="<?php echo url('/'); ?>/image/{{$row->image}}" class="testimonial_img"></figure>
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
<div class="cd-cart-container empty" style="display:none;"> 
    
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

<div id="myModals" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content contents">
      <div class="modal-header">
        <button type="button" class="close closes" data-dismiss="modal">&times;</button>
        <!--         <h4 class="modal-title">Modal Header</h4> -->
      </div>
      <div class="modal-body text-center">
        <aside class="left">
            <img src="assets/front_end/images/easy-cart.png" id="img1" class="easy-carts">
            <img src="assets/front_end/images/easy-cart.png" id="img2" class="easy-cart" style="display: none;">
        </aside>

        <fieldset class="right">
        <h1>Easy Cart</h1>
        <h3 id="like">What You Like to Buy</h3>
       <!-- <input name="Click Here" type="button" class="click showquick" value="Click Here"> -->
       <button name="Click Here" class="click showquick">Click Here</button>

       <div class="clear" style="padding-bottom: 15px;"></div>

        <div id="quickcart" style="display: none;">
        <select class="dropdownsytyle idcategorymod" name="idcategorymod" id="idcategorymod" required>
                <option value="SelectState">Select Battery Type</option>       
                @php
                $cat_info = DB::table('categorymaster')->orderBy('CategoryID', 'asc')->get();
                @endphp
                @foreach ($cat_info as $row_shop)

                <option value="{{$row_shop->CategoryID}}"> {{$row_shop->CategoryName}}</option>
                @endforeach
                        
                      </select>

                <select class="dropdownsytyle idbrandmod" name="idbrandmod" id="idbrandmod" required>
                    <option value="">Select Vehicle Brand</option> 
                </select>

                <select id="idmodelmod" name="idmodelmod"  class="dropdownsytyle idmodelmod" required>
                    <option value="">Select Vehicle Model</option>
                </select>
                
                <select id="fueltypemod" name="fueltypemod"  class="dropdownsytyle" style="display:none;">
                        <option value="">Select Fuel Type</option>
                        <option value="Petrol">Petrol</option>
                        <option value="Diesel">Diesel</option>
                </select>

                <select id="capacitymod" name="capacitymod"  class="dropdownsytyle" style="display:none;">
                    <option value="">Select Capacity</option>
                    @php
                        $cap_info = DB::table('capacitymaster')->orderBy('CapacityID', 'asc')->get();
                        @endphp
                        @foreach ($cap_info as $row_cap)

                        <option value="{{$row_cap->CapacityID}}"> {{$row_cap->CapacityName}}</option>
                        @endforeach
            </select>

            <div id="appliancemod"></div>
            


            <div class="clear" style="padding-bottom: 15px;"></div>
            <!-- <input name="Find-Your-Battery" onclick="loadproductsmod();" type="button" class="finder"  value="Find Your Battery"  id="contact-button"/> -->
            <button onclick="loadproductsmod();" name="Find-Your-Battery" class="finder showquick">Find Your Battery</button>
            <div class="clear" style="padding-bottom: 15px;"></div>

      </div>
  </fieldset>
  </div>
      <div class="modal-footer">
        <!--         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
      </div>
    </div>

  </div>
</div>

   <script type="text/javascript">

   function loadproducts() {
    // window.location='products?cid='+$("#idcategory").val() + '&mid='+$("#idmodel").val() +'&bid='+$("#idbrand").val();

    window.location='products?cid='+$("#idcategory").val() + '&mid='+$("#idmodel").val() +'&bid='+$("#idbrand").val() +'&fueltype='+$("#fueltype").val() +'&capacity='+$("#capacity").val();



    //window.location='products?cid='+$("#idcategory").val() + '&mid='+$("#idmodel").val() +'&bid='+$("#idbrand").val() +'&fid='+$("#fueltype").val();
     
    //        window.location = '{{ url('products') }}';    
    // $.post('{{ url('products') }}', {"scategoryid": $("#idcategory").val(), 
    //     "sbrandid": $("#idbrand").val(), 
    //     "smodelid": $("#idmodel").val()});
    // sessionStorage.setItem("scategoryid", "idcategory");
    // sessionStorage.setItem("sbrandid", "idbrand");
    // sessionStorage.setItem("smodelid", "idmodel");
    // $.session.set("scategoryid", $("#idcategory").val());
    // $.session.set("sbrandid", $("#idbrand").val());
    // $.session.set("smodelid", $("#idmodel").val());
   
    // $.ajax({
    //         url: '{{ url('sessionfilter') }}',
    //         method: "POST",
    //         data: {categoryid: $("#idcategory").val(),
    //         modelid: $("#idproduct").val(),
    //         brandid: $("#idbrand").val(),
    //         _token: '{{ csrf_token() }}'},
    //         dataType: "json",
    //         success: function (response) {  
    //              window.location = '{{ url('products') }}';     
               
    //         }
    //     });
   }
    function loadproductsmod() {

    window.location='products?cid='+$("#idcategorymod").val() + '&mid='+$("#idmodelmod").val() +'&bid='+$("#idbrandmod").val() +'&fueltype='+$("#fueltypemod").val() +'&capacity='+$("#capacitymod").val();

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

                $(".toastmessage").fadeIn(700);
                setTimeout(
                    function() {
                        swal({
                            type: "success",
                            title: "Product Added to Cart",
                            timer: 2000,
                            showConfirmButton: false
                          },
                          function(){ 
                                   location.reload();
                               });
                    });

                // location.reload();
            }
        });
    });
</script>
<script type='text/javascript' src='assets/front_end/js/jquery.js'></script>
<script type="text/javascript">
 $(".idcategory").change(function (e) {
  
  e.preventDefault();
  var ele = $(this);
  ele.siblings('.btn-loading').show();
  $.ajax({
      url: '{{ url('get-by-brand') }}',
      method: "post",
      data: {id: document.getElementById("idcategory").value,
      _token: '{{ csrf_token() }}'},
      dataType: "json",
      success: function (response) { 
        $("#idbrand").empty();
        var obj = response.data;
        $("#idbrand").append('<option value=0>Select Vehicle Brand</option>')
        for (var index = 0; index < obj.length; index++) {
          $("#idbrand").append('<option value=' + obj[index].v_id + ' >' + obj[index].brand_name + '</option>');
        }
      }
  });
});

$(".idbrand").change(function (e) {
  
  e.preventDefault();
  var ele = $(this);
  ele.siblings('.btn-loading').show();
  $.ajax({
      url: '{{ url('get-by-model') }}',
      method: "post",
      data: {id: document.getElementById("idbrand").value,
      _token: '{{ csrf_token() }}'},
      dataType: "json",
      success: function (response) { 
        $("#idmodel").empty();
        var obj = response.data;
        $("#idmodel").append('<option value=0>Select Vehicle Model</option>');
        for (var index = 0; index < obj.length; index++) {
          $("#idmodel").append('<option value=' + obj[index].m_id + ' >' + obj[index].model_name + '</option>');
        }
      }
  });
});

$("#idcategory").change(function () {
      // else {
    //     $("#ibrand").show();
    //     $("#imodel").show();
    // }
    if($(this).val() === "1") {
        //console.log('hi');
        $("#idbrand").show();
        $("#idmodel").show();
        $("#fueltype").show();
        $("#capacity").hide();
        $("#appliance").hide();
        //$("#fueltype").css("background-color", "yellow");
    }else if($(this).val() === "2") {
        //console.log('hi');
        $("#idbrand").show();
        $("#idmodel").show();
        $("#fueltype").hide();
        $("#capacity").hide();
        $("#appliance").hide();
        //$("#fueltype").css("background-color", "yellow");
    }else if($(this).val() === "3") {
        $("#idbrand").hide();
        $("#idmodel").hide();
        $("#fueltype").hide();
        $("#capacity").show();
        $("#appliance").hide();
        //$("#fueltype").css("background-color", "yellow");
    }else if($(this).val() === "4") {
        //console.log('hi');
        $("#idbrand").hide();
        $("#idmodel").hide();
        $("#fueltype").hide();
        $("#capacity").show();
        $("#appliance").hide();
        //$("#fueltype").css("background-color", "yellow");
    }else if($(this).val() === "5") {
        //console.log('hi');
        $("#idbrand").hide();
        $("#idmodel").hide();
        $("#fueltype").hide();
        $("#capacity").hide();
        $("#appliance").show();
        //$("#fueltype").css("background-color", "yellow");
     $.ajax({
          url: '{{ url('get-appliance') }}',
          method: "GET",
          dataType: "json",
          success: function (response) { 
            //console.log(response);
            var obj = response.data;
            //console.log(obj);
            for (var index = 0; index < obj.length; index++) {
              // $("#appliance").append('<input type='text' placeholder='obj[index].name'>');
              // var appliancename = obj[index].name;
              //  $("#appliance").append('<input type='text' name=' + obj[index].name + '  placeholder=' + appliancename + ' class='dropdownsytyle'>');

              $("#appliance").append('<input type = "text" placeholder=' + obj[index].name + ' class="dropdownsytyle" >');
            }
          }
      });
    }

});

 $(".idcategorymod").change(function (e) {
  
  e.preventDefault();
  var ele = $(this);
  ele.siblings('.btn-loading').show();
  $.ajax({
      url: '{{ url('get-by-brand') }}',
      method: "post",
      data: {id: document.getElementById("idcategorymod").value,
      _token: '{{ csrf_token() }}'},
      dataType: "json",
      success: function (response) { 
        $("#idbrandmod").empty();
        var obj = response.data;
        $("#idbrandmod").append('<option value=0>Select Vehicle Brand</option>')
        for (var index = 0; index < obj.length; index++) {
          $("#idbrandmod").append('<option value=' + obj[index].v_id + ' >' + obj[index].brand_name + '</option>');
        }
      }
  });
});

$(".idbrandmod").change(function (e) {
  
  e.preventDefault();
  var ele = $(this);
  ele.siblings('.btn-loading').show();
  $.ajax({
      url: '{{ url('get-by-model') }}',
      method: "post",
      data: {id: document.getElementById("idbrandmod").value,
      _token: '{{ csrf_token() }}'},
      dataType: "json",
      success: function (response) { 
        console.log(response);
        $("#idmodelmod").empty();
        var obj = response.data;
        $("#idmodelmod").append('<option value=0>Select Vehicle Model</option>');
        for (var index = 0; index < obj.length; index++) {
          $("#idmodelmod").append('<option value=' + obj[index].m_id + ' >' + obj[index].model_name + '</option>');
        }
      }
  });
});

$("#idcategorymod").change(function () {
      // else {
    //     $("#ibrand").show();
    //     $("#imodel").show();
    // }
    if($(this).val() === "1") {
        //console.log('hi');
        $("#idbrandmod").show();
        $("#idmodelmod").show();
        $("#fueltypemod").show();
        $("#capacitymod").hide();
        $("#appliancemod").hide();
        //$("#fueltype").css("background-color", "yellow");
    }else if($(this).val() === "2") {
        //console.log('hi');
        $("#idbrandmod").show();
        $("#idmodelmod").show();
        $("#fueltypemod").hide();
        $("#capacitymod").hide();
        $("#appliancemod").hide();
        //$("#fueltype").css("background-color", "yellow");
    }else if($(this).val() === "3") {
        $("#idbrandmod").hide();
        $("#idmodelmod").hide();
        $("#fueltypemod").hide();
        $("#capacitymod").show();
        $("#appliancemod").hide();
        //$("#fueltype").css("background-color", "yellow");
    }else if($(this).val() === "4") {
        //console.log('hi');
        $("#idbrandmod").hide();
        $("#idmodelmod").hide();
        $("#fueltypemod").hide();
        $("#capacitymod").show();
        $("#appliancemod").hide();
        //$("#fueltype").css("background-color", "yellow");
    }else if($(this).val() === "5") {
        //console.log('hi');
        $("#idbrandmod").hide();
        $("#idmodelmod").hide();
        $("#fueltypemod").hide();
        $("#capacitymod").hide();
        $("#appliancemod").show();
        //$("#fueltype").css("background-color", "yellow");
     $.ajax({
          url: '{{ url('get-appliance') }}',
          method: "GET",
          dataType: "json",
          success: function (response) { 
            //console.log(response);
            var obj = response.data;
            //console.log(obj);
            for (var index = 0; index < obj.length; index++) {
              // $("#appliance").append('<input type='text' placeholder='obj[index].name'>');
              // var appliancename = obj[index].name;
              //  $("#appliance").append('<input type='text' name=' + obj[index].name + '  placeholder=' + appliancename + ' class='dropdownsytyle'>');

              $("#appliancemod").append('<input type = "text" placeholder=' + obj[index].name + ' class="dropdownsytyle" >');
            }
          }
      });
    }

});
</script>
<script type="text/javascript">
    $(".showquick").click(function(){
       $('#quickcart').show();
       $(".showquick").hide();
       $("#like").hide();
       $("#img1").hide();
       $("#img2").show();

    });

//$(document).ready(function(){       
$(window).load(function() {
    $('#myModals').css("display","unset");
    });
$(document).ready(function() {
$('.owl-carousel').owlCarousel({
   loop:false,
   margin:10,
   nav:true,
   touchDrag  : false,
   mouseDrag  : false,
   responsive:{
     0:{
         items:1
     },
     600:{
         items:1
     },
     1000:{
         items:1
     }
   }
   });
});
</script>
@endsection