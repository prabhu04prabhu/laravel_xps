@extends('front_end.header2')
@section('content')
<section class="section">
    <section class="section-content dashboard manage-addresses clear">
         <?php 
          if((Session::get('id')) != ''){
            ?>
            <?php 
            $details = DB::table('users')->where('id',Session::get('id'))->get();
            $user_id= Session::get('id');
            ?>
            @foreach($details as $row)
            <!-- <div class="header-contact right call_us">
              <a onclick="showHide('hidden_div'); return false;" href="javascript:void(0)"><i class="fa fa-user"></i> Hi {{$row->first_name}}</a>
            </div> -->

        <aside class="sidebar left">
            <div class="profile-name-and-photo clear">
              
                <figure><img src="assets/front_end/images/photo.jpg"></figure>
                <h3><small>Hello,</small>{{$row->first_name}}</h3>
                <!-- <figure><img src="assets/front_end/images/photo.jpg"></figure>
                <h3><small>Hello,</small>Ganesh Kumar</h3> -->
                
            </div>
             <nav class="dashboard-nav clear">
                <h3><i class="fa fa-user"></i> Account</h3>
                <a href="{{'personal-information'}}">Profile Information</a>
                <a href="{{'manage-addresses'}}">Manage Addresses</a>
                <a href="{{'change-password'}}">Change Password</a>
                <h3><i class="fa fa-shopping-cart"></i> Order</h3>
                <a href="{{'my_orders'}}">My Orders</a>
                <a href="#">Reports</a>
                <h3><i class="fa fa-heart"></i> My Stuff</h3>
                <a href="#">Feeback & Enquiry</a>
                <a href="{{'notifications'}}">Notifications</a>
                <a href="{{'wishlist'}}">Wishlist</a>
            </nav>
        </aside>
            @endforeach
          <?php }
            ?>
        <aside class="content right">
            @if (\Session::has('success'))
                            <div class="alert alert-success">

                                {!! \Session::get('success') !!}

                            </div>
                            @endif

                           @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <br/>
            <h3> Edit Manage Addresses</h3>
             @php

                    $address_id = request('id');

                    

                    $address_info = DB::table('customer_address')->where('id',$address_id)->where('status','Active')->get();
                
                @endphp
                @foreach ($address_info as $row_info)
            <fieldset class="clear">
                    <form method="post" action="update_address" onsubmit="">
                        @csrf
                        <div class="form-split left">
                            <label>Name</label><br/><br/>
                             <input type="hidden" name="address_id" value="<?php echo $address_id; ?>">
                            <input name="name" type="text" placeholder="Name" value="{{$row_info->name}}" required></div>
                        <div class="form-split right">
                            <label>Mobile Number</label><br/><br/>
                            <input name="phone" type="text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" minlength="10" maxlength="10"  value="{{$row_info->mobile}}" placeholder="10 Digit Mobile Number" required></div>
                        <div class="form-split left">
                            <label>Pincode</label><br/><br/>
                            <input name="pincode" type="text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" minlength="6" maxlength="6" value="{{$row_info->pincode}}" placeholder="Pincode" required></div>
                        <div class="form-split right">
                            <label>Locality</label><br/><br/>
                            <input name="locality" type="text" value="{{$row_info->locality}}" placeholder="Locality" required></div>
                        <div class="clear"></div>
                        <label>Address</label><br/><br/>
                        <textarea name="address" rows="5" value="{{$row_info->address}}" placeholder="Address (Area and Street)" required>{{$row_info->address}}</textarea>
                        <label>City</label><br/><br/>
                        <input name="city" type="text"  value="{{$row_info->city}}" placeholder="City/District/Town" required>
                        <div class="clear"></div>
                        
                        <div class="form-split left">
                            <label>Landmark</label><br/><br/>
                            <input name="landmark" type="text" value="{{$row_info->landmark}}" placeholder="Landmark (Optional)" ></div>
                        <div class="form-split right">
                            <label>Alternative Mobile</label><br/><br/>
                            <input name="alt_number" value="{{$row_info->alternate_number}}" type="text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="10" minlength="10" placeholder="Alternate Phone No (Optional)" ></div>
                        
                        <div class="clear"></div>
                        <input name="contact-button" type="submit" value="Submit" id="contact-button"/>
                        <input name="reset" type="reset" value="Reset" id="reset" style="display:none"/>
                    </form>
                </fieldset>
                @endforeach

            
            <!-- <article class="clear">
                <h4>Work</h4>
                <div class="clear"></div>
                <h2>Ganesh Kumar</h2>
                <h3><i class="fa fa-mobile"></i> +91-8056821111</h3>
                <p>143 Chairman Ramalingam Road, Opp.Sidhaswara Bus Stop, Ammapet Main Road, Salem. Tamilnadu, India.</p>
                <nav>
                    <ul>
                        <li><a href="#">&bull;<br>&bull;<br>&bull;</a>
                            <ul>
                                <li><a href="#">Edit</a></li>
                                <li><a href="#">Remove</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </article> -->            
        </aside>
    </section>
</section>
@endsection