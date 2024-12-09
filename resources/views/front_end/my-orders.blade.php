@extends('front_end.header')
@section('content')
<section class="section">
    <section class="section-content dashboard wishlist clear">
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
                {{-- <a href="#">Reports</a> --}}
                <h3><i class="fa fa-heart"></i> My Stuff</h3>
                {{-- <a href="#">Feeback & Enquiry</a>
                <a href="{{'notifications'}}">Notifications</a> --}}
                <a href="{{'wishlist'}}">Wishlist</a>
            </nav>
        </aside>
            @endforeach
          <?php }
            ?>
        <aside class="content right myorders my-orders list-wrapper">
             <?php 
          if((Session::get('id')) != ''){
            ?>
            <?php
            $sub = DB::table('ordertrans')
            ->join('ordermaster', 'ordermaster.OrderID', '=', 'ordertrans.OrderID')
            ->join('productmaster', 'productmaster.ProductID', '=', 'ordertrans.ProductID')
            ->join('brandmaster', 'brandmaster.BrandID', '=', 'productmaster.BrandID')
            ->where('ordermaster.UserID',Session::get('id'))->orderBy('OrderTransID', 'desc')->get();

            $sub2 = $sub->count();
            //echo $sub2;
            ?>
            <h3>My Orders (<?php echo $sub2; ?>)</h3>
               @foreach ($sub as $row)
        <article class="clear list-item">
            <figure class="left"><img src="{{$row->image}}"></figure>
            <aside class="left">
                <h4>{{$row->BrandName}}  {{$row->ProductModelNo}}</h4>
                <p><strong>Product Brand:</strong> {{$row->BrandName}}<br><strong>Model Number:</strong> {{$row->ProductModelNo}}</p>
            </aside>
            <h3 class="left">₹ {{$row->Subtotal}}</h3>
            @if($row->Status =='Pending')  
            <h2 class="left">Delivery Expected by <?php echo date('M d', strtotime($row->Delivery_Date. ' + 3 days')); ?><small>Your item has been shipped</small></h2>
            @else
            <h2 class="left">Delivered on <?php echo date('M d', strtotime($row->DeliveryDate)); ?></h2>
            @endif
        </article>
        @endforeach
        <?php }
            ?>
            <div id="pagination-container"></div>
        </aside>
    </section>
</section>

@endsection
