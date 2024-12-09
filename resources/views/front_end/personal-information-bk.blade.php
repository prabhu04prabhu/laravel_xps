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

        <aside class="sidebar left">
            <div class="profile-name-and-photo clear">
              
                <figure><img src="assets/front_end/images/photo.jpg"></figure>
                <h3><small>Hello,</small>{{$row->first_name}}</h3>
                <!-- <figure><img src="assets/front_end/images/photo.jpg"></figure>
                <h3><small>Hello,</small>Ganesh Kumar</h3> -->
                
            </div>
             <nav class="dashboard-nav clear">
                <h3><i class="fa fa-user"></i> Account</h3>
                <a href="{{'personal_information'}}">Profile Information</a>
                <a href="{{'manage_addresses'}}">Manage Addresses</a>
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
            <fieldset class="clear">
                <form method="post" action="#" onsubmit="return validate();">
        			<h3>Personal Information <a href="#">Edit</a></h3>
                    <div class="form-split left"><input name="firstname" type="text" value="{{$row->first_name}}" placeholder="" required></div>
                    <div class="form-split right"><input name="lastname" type="text" value="{{$row->last_name}}" placeholder="" required></div>
                    <br><br><br><br>
        			<h3>Your Gender</h3>
                    <div class="left">
                        <input name="Male" class="checkbox-custom" {{ ($row->gender == 'Male' ? ' checked' : '') }} id="Male" type="checkbox" value="Male">
                        <label class="checkbox-custom-label" for="Male" >Male</label>
                    </div>
                    <div class="left" style="margin-left:15px;">
                        <input name="Female" class="checkbox-custom" {{ ($row->gender == 'Female' ? ' checked' : '') }} id="Female" type="checkbox" value="Female">
                        <label class="checkbox-custom-label" for="Female" >Female</label>
                    </div>
                    <br><br><br><br>
        			<h3>Email Address <a href="#">Edit</a> <a href="#">Change Password</a></h3>
                    <div class="form-split left"><input name="email" type="email" value="{{$row->email}}" placeholder="" required></div>
                    <br><br><br><br>
        			<h3>Mobile Numberr <a href="#">Edit</a></h3>
                    <div class="form-split left"><input name="number" type="number" value="{{$row->phone}}" placeholder="" required></div>
                </form>
            </fieldset>
        </aside>

    </section>
</section>
@endsection