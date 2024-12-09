@extends('front_end.header2')
@section('content')
<section class="section">
    <section class="section-content dashboard personal-information clear">
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

        <!-- <aside class="sidebar left profile_sidebar"> -->
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
               <!--  <a href="#">Reports</a> -->
                <h3><i class="fa fa-heart"></i> My Stuff</h3>
                <!-- <a href="#">Feeback & Enquiry</a>
                <a href="{{'notifications'}}">Notifications</a> -->
                <a href="{{'wishlist'}}">Wishlist</a>
            </nav>
        </aside>
            @endforeach
          <?php }
            ?>

    	<aside class="content right profile_content">
            <fieldset class="clear">
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
                <form method="post" action="#" onsubmit="return validate();"><br/><br/>                
        			<h3>Personal Information <a href="edit-personal-details">Edit</a></h3><br/>                   
                    <div class="form-split left"><p><strong style="color: #000;">First Name&nbsp;:&nbsp;</strong> {{$row->first_name}}</p></div>
                    <div class="form-split right"><p><strong style="color: #000;">Last Name&nbsp;:&nbsp;</strong> {{$row->last_name}}</p></div>
                    <div class="clear"></div>

                    <div class="form-split left"><p><strong style="color: #000;">Email ID&nbsp;:&nbsp;</strong> {{$row->email}}</p></div>
                    <div class="form-split right"><p><strong style="color: #000;">Phone No&nbsp;:&nbsp;</strong> {{$row->phone}}</p></div>
                    <div class="clear"></div>

                    <div class="form-split left"><p><strong style="color: #000;">Country&nbsp;:&nbsp;</strong> {{$row->country}}</p></div>
                    <div class="form-split right"><p><strong style="color: #000;">State&nbsp;:&nbsp;</strong> {{$row->state}}</p></div>
                    <div class="clear"></div>

                    <div class="form-split left"><p><strong style="color: #000;">City&nbsp;:&nbsp;</strong> {{$row->city}}</p></div>
                    <div class="form-split right"><p><strong style="color: #000;">Pincode&nbsp;:&nbsp;</strong> {{$row->pincode}}</p></div>
                    <div class="clear"></div>

                    <div class="form-split left"><p><strong style="color: #000;">Address&nbsp;:&nbsp;</strong> {{$row->address}}</p></div>
                    <div class="form-split right"><p><strong style="color: #000;">Gender&nbsp;:&nbsp;</strong> {{$row->gender}}</p></div>
                    <div class="clear"></div>
                </form>
            </fieldset>
        </aside>

    </section>
</section>
@endsection