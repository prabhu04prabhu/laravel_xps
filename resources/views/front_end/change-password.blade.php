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
                <a href="{{'personal-information'}}">Profile Information</a>
                <a href="{{'manage-addresses'}}">Manage Addresses</a>
                <a href="{{'change-password'}}">Change Password</a>
                <h3><i class="fa fa-shopping-cart"></i> Order</h3>
                <a href="{{'my_orders'}}">My Orders</a>
                <!-- <a href="#">Reports</a> -->
                <h3><i class="fa fa-heart"></i> My Stuff</h3>
                <!-- <a href="#">Feeback & Enquiry</a>
                <a href="{{'notifications'}}">Notifications</a> -->
                <a href="{{'wishlist'}}">Wishlist</a>
            </nav>
        </aside>
            @endforeach
          <?php }
            ?>

    	<aside class="content right">
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
                            
                <form method="post" action="change_password" enctype="multipart/form-data">
                    @csrf
        			<h3>Change Password<!-- <a href="#">Edit</a> --></h3>
                    <br><br>
                    <div class="form-split">
                        <label for="username">Old Password</label><br><br>
                        <input name="old_password" type="password" placeholder="" required>
                        <!-- <input name="firstname" type="text" value="{{$row->password}}" placeholder="" required> -->
                    </div>

                    <div class="form-split left">
                        <label for="new_password">New Password</label><br><br>
                        <input name="new_password" type="password" id="new_password" placeholder="" required>
                        <!-- <input name="firstname" type="text" value="{{$row->password}}" placeholder="" required> -->
                    </div>

                    <div class="form-split right">
                        <label for="confirm_password">Confirm Password</label><br><br>
                        <input name="confirm_password" id="confirm_password" type="password"  placeholder="" required>
                        <input type="hidden" name="userid" value="<?php echo Session::get('id'); ?>">

                        <div style="color:red;font-weight: 800" id="CheckPasswordMatch1"></div>
                     <script>
                    function checkPasswordMatch1() {
                        var password = $("#new_password").val();
                        var confirmPassword = $("#confirm_password").val();
                        if (password != confirmPassword)
                            $("#CheckPasswordMatch1").html("Passwords does not match!").css("color", "red");
                        else
                             $("#CheckPasswordMatch1").html("Passwords match.").css("color", "green");
                    }
                    $(document).ready(function () {
                       $("#confirm_password").keyup(checkPasswordMatch1);
                    });
                    </script>
                    </div>
                    <br><br><br><br><br><br><br><br>
                    <input class="submit" name="contact-button" type="submit" value="Submit" id="contact-button">

                </form>
            </fieldset>
        </aside>

    </section>
</section>
@endsection