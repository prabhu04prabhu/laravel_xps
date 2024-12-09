@extends('front_end.header')
@section('content')
<section class="section">
    <section class="section-content dashboard notifications clear">
    	<aside class="sidebar left">
            <div class="profile-name-and-photo clear">
                <figure><img src="assets/front_end/images/photo.jpg"></figure>
                <h3><small>Hello,</small>Ganesh Kumar</h3>
            </div>
             <nav class="dashboard-nav clear">
                <h3><i class="fa fa-user"></i> Account</h3>
                <a href="{{'personal-information'}}">Profile Information</a>
                <a href="{{'manage-addresses'}}">Manage Addresses</a>
                <h3><i class="fa fa-shopping-cart"></i> Order</h3>
                <a href="{{'my_orders'}}">My Orders</a>
                <a href="#">Reports</a>
                <h3><i class="fa fa-heart"></i> My Stuff</h3>
                <a href="#">Feeback & Enquiry</a>
                <a href="{{'notifications'}}">Notifications</a>
                <a href="{{'wishlist'}}">Wishlist</a>
            </nav>
        </aside>
    	<aside class="content right">
        	<h3>All notifications</h3>
            <article class="clear">
                <figure class="left"><img src="assets/front_end/images/battery1.jpg"></figure>
                <aside class="left">
                	<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    <h4>30 July 2020</h4>
                </aside>
            </article>            
            <article class="clear">
                <figure class="left"><img src="assets/front_end/images/battery1.jpg"></figure>
                <aside class="left">
                	<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    <h4>30 July 2020</h4>
                </aside>
            </article>            
            <article class="clear">
                <figure class="left"><img src="assets/front_end/images/battery1.jpg"></figure>
                <aside class="left">
                	<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    <h4>30 July 2020</h4>
                </aside>
            </article>
        </aside>
    </section>
</section>
@endsection