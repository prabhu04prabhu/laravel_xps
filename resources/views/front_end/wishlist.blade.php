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
        <aside class="content right">
            <h3>My Wishlist (3)</h3>
            <article class="clear">
                <button value="delete"><i class="fa fa-trash"></i></button>
                <figure class="left"><img src="assets/front_end/images/battery1.jpg"></figure>
                <aside class="left">
                    <h3>Exide FEM0-IMST1000</h3>
                    <h4>Availability : <span>In Stock</span></h4>
                    <figcaption>Price: <del>Rs. 7921</del> <span>20% OFF</span> <strong>₹ 5721</strong></figcaption>
                </aside>
            </article>
            <article class="clear">
                <button value="delete"><i class="fa fa-trash"></i></button>
                <figure class="left"><img src="assets/front_end/images/battery1.jpg"></figure>
                <aside class="left">
                    <h3>Exide FEM0-IMST1000</h3>
                    <h4>Availability : <span>In Stock</span></h4>
                    <figcaption>Price: <del>Rs. 7921</del> <span>20% OFF</span> <strong>₹ 5721</strong></figcaption>
                </aside>
            </article>
            <article class="clear">
                <button value="delete"><i class="fa fa-trash"></i></button>
                <figure class="left"><img src="assets/front_end/images/battery1.jpg"></figure>
                <aside class="left">
                    <h3>Exide FEM0-IMST1000</h3>
                    <h4>Availability : <span>In Stock</span></h4>
                    <figcaption>Price: <del>Rs. 7921</del> <span>20% OFF</span> <strong>₹ 5721</strong></figcaption>
                </aside>
            </article>
        </aside>
    </section>
</section>

@endsection