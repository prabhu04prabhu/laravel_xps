@extends('front_end.header2')
@section('content')
<section class="section">
    <section class="section-content dashboard manage-addresses clear">
    	 <?php 
          if((Session::get('id')) != ''){
            ?>
            <?php 
            $details = DB::table('users')->where('id',Session::get('id'))->get();
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
        	<h3>Manage Addresses</h3>
        	<button class="accordion">Add New Address</button>
            <div class="panel clear">
                <fieldset class="clear">
                    <form method="post" action="address_process" onsubmit="">
                        @csrf
                        <div class="form-split left">
                             <input type="hidden" name="userid" value="<?php echo Session::get('id'); ?>">
                            <input name="name" type="text" placeholder="Name" required></div>
                        <div class="form-split right"><input name="phone" type="text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="10" placeholder="10 Digit Mobile Number" required></div>
                        <div class="form-split left"><input name="pincode" type="text" placeholder="Pincode" required></div>
                        <div class="form-split right"><input name="locality" type="text" placeholder="Locality" required></div>
                        <div class="clear"></div>
                        <textarea name="address" rows="5" placeholder="Address (Area and Street)" required></textarea>
                        <input name="city" type="text" placeholder="City/District/Town" required>
                        <div class="clear"></div>
                        <div class="form-split left"><input name="landmark" type="text" placeholder="Landmark (Optional)" required></div>
                        <div class="form-split right"><input name="alt_number" type="text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="10" placeholder="Alternate Phone No (Optional)" required></div>
                        
                        <div class="clear"></div>
                        <input name="contact-button" type="submit" value="Submit" id="contact-button"/>
                        <input name="reset" type="reset" value="Reset" id="reset"/>
                    </form>
                </fieldset>
            </div>
            
                 @php
                    $cus_info = DB::table('customer_address')->where('cus_id',Session::get('id'))->where('status','Active')->get();
                
                @endphp
                @foreach ($cus_info as $row_info)
                <article class="clear">
            	<h4>Home</h4>
                <div class="clear"></div>
                <h2>{{$row_info->name}}</h2>
                <h3><i class="fa fa-mobile"></i> +91-{{$row_info->mobile}}</h3>
                <p>{{$row_info->address}}</p>
                <p>{{$row_info->landmark}}</p>
                <p>{{$row_info->city}}</p>
                <nav>
                	<ul>
                    	<li><a href="#">&bull;<br>&bull;<br>&bull;</a>
                        	<ul>
                                <li><a href="edit-manage-addresses&id={{$row_info->id}}">Edit</a></li>
                                <li><a href="del_address&id={{$row_info->id}}">Remove</a></li>
                                <!-- <li><a href="del_address">Remove</a></li> -->
                            </ul>
                        </li>
                    </ul>
                </nav>
                </article>
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