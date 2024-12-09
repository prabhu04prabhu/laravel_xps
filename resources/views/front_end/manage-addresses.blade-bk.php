@extends('front_end.header')
@section('content')
<section class="section">
    <section class="section-content dashboard manage-addresses clear">
    	<aside class="sidebar left">
            <div class="profile-name-and-photo clear">
                <figure><img src="assets/front_end/images/photo.jpg"></figure>
                <h3><small>Hello,</small>Ganesh Kumar</h3>
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
    	<aside class="content right">
        	<h3>Manage Addresses</h3>
        	<button class="accordion">Add New Address</button>
            <div class="panel clear">
                <fieldset class="clear">
                    <form method="post" action="#" onsubmit="return validate();">
                        <div class="form-split left"><input name="name" type="text" placeholder="Name" required></div>
                        <div class="form-split right"><input name="phone" type="number" placeholder="10 Digit Mobile Number" required></div>
                        <div class="form-split left"><input name="pincode" type="text" placeholder="Pincode" required></div>
                        <div class="form-split right"><input name="locality" type="text" placeholder="Locality" required></div>
                        <div class="clear"></div>
                        <textarea name="msg" rows="5" placeholder="Address (Area and Street)" required></textarea>
                        <input name="subject" type="text" placeholder="City/District/Town" required>
                        <div class="clear"></div>
                        <div class="form-split left"><input name="landmark" type="text" placeholder="Landmark (Optional)" required></div>
                        <div class="form-split right"><input name="alternate-phone-no" type="number" placeholder="Alternate Phone No (Optional)" required></div>
                        
                        <div class="clear"></div>
                        <input name="contact-button" type="submit" value="Submit" id="contact-button"/>
                        <input name="reset" type="reset" value="Reset" id="reset"/>
                    </form>
                </fieldset>
            </div>
            <article class="clear">
            	<h4>Home</h4>
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
            </article>
            <article class="clear">
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
            </article>            
        </aside>
    </section>
</section>
@endsection