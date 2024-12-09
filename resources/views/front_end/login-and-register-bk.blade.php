@extends('front_end.header')
@section('content')
<section class="section">
    <section class="section-content login-and-register clear">    
		<article class="clear">
        <fieldset class="left">
        	<h2>Login to your account</h2>
            <p>We are happy to see you return! Please log in to continue.</p>
			<form method="post" action="#" onsubmit="return validate();">
				<label>Username<span>*</span></label><input name="Username" type="text" required>
				<label>Password<span>*</span></label><input name="Password" type="password" required>
				<input class="left" name="contact-button" type="submit" value="Login" id="contact-button"/>
                <a href="#" class="right">Forgot Password?</a>
                <div class="clear"></div>
                <figure class="left"><a href="#"><img src="assets/front_end/images/sigin-in-facebook.png"></a></figure>
                <figure class="right"><a href="#"><img src="assets/front_end/images/sigin-in-google.png"></a></figure>
       		</form>
        </fieldset>
        <fieldset class="right">
        	<h2>Not a user yet?</h2>
            <p>Create an account! It's quick, free and gives you access to special features.</p>
			<form method="post" action="{{url('login_process')}}" onsubmit="return validate();" 
                nctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="user" value="user">
				<div class="form-split left"><label>First Name<span>*</span></label><input name="first_name" type="text" required></div>
				<div class="form-split right"><label>Last Name<span>*</span></label><input name="last_name" type="text" required></div>
                <div class="clear"></div>
				<div class="form-split left"><label>Email Id<span>*</span></label><input name="email" type="email" required></div>
				<div class="form-split right"><label>Phone No<span>*</span></label><input name="phone" type="number" required></div>
                <div class="clear"></div>
				<label>Address</label>
				<textarea name="address" rows="3" required></textarea>
                <div class="clear"></div>
				<div class="form-split left">
                    <label>Select Country<span>*</span></label>
                    <div class="custom-select">
                        <select name="country">
                            <option value="Select Country">Select Country</option>
                            <option value="Chennai">India</option>
                            <option value="Coimbatore">United States</option>
                        </select>
                    </div>
                </div>
				<div class="form-split right">
                    <label>State<span>*</span></label>
                    <div class="custom-select">
                        <select name="state">
                            <option value="Select State">Select State</option>
                            <option value="Andra Pradesh">Andra Pradesh</option>
                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                            <option value="Assam">Assam</option>
                            <option value="Bihar">Bihar</option>
                            <option value="Chhattisgarh">Chhattisgarh</option>
                            <option value="Goa">Goa</option>
                            <option value="Gujarat">Gujarat</option>
                            <option value="Haryana">Haryana</option>
                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                            <option value="Jharkhand">Jharkhand</option>
                            <option value="Karnataka">Karnataka</option>
                            <option value="Kerala">Kerala</option>
                            <option value="Madya Pradesh">Madya Pradesh</option>
                            <option value="Maharashtra">Maharashtra</option>
                            <option value="Manipur">Manipur</option>
                            <option value="Meghalaya">Meghalaya</option>
                            <option value="Mizoram">Mizoram</option>
                            <option value="Nagaland">Nagaland</option>
                            <option value="Orissa">Orissa</option>
                            <option value="Punjab">Punjab</option>
                            <option value="Rajasthan">Rajasthan</option>
                            <option value="Sikkim">Sikkim</option>
                            <option value="Tamil Nadu">Tamil Nadu</option>
                            <option value="Tripura">Tripura</option>
                            <option value="Uttaranchal">Uttaranchal</option>
                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                            <option value="West Bengal">West Bengal</option>
                        </select>
                    </div>          
                </div>
                <div class="clear"></div>
				<div class="form-split left">
                    <label>Select City<span>*</span></label>
                    <div class="custom-select">
                        <select name="city">
                            <option value="Select City">Select City</option>
                            <option value="Chennai">Chennai</option>
                            <option value="Coimbatore">Coimbatore</option>
                        </select>
                    </div>               
                </div>
				<div class="form-split right">
                    <label>Pincode<span>*</span></label><input name="pincode" type="text" required>
                </div>
                <div class="clear"></div>
                <div class="form-split left">
                    <label>Password<span>*</span></label><input name="password" type="text" required>
                </div>
                <div class="form-split right">
                    <label>Confirm Password<span>*</span></label><input name="cpassword" type="text" required>
                </div>
                <div class="clear"></div>
				<label>Comments</label>
				<textarea name="comments" rows="6" required></textarea>
                <div class="clear"></div>
				<input name="contact-button" type="submit" value="Submit" id="contact-button"/>
				<input name="reset" type="reset" value="Reset" id="reset"/>
			</form>
		</fieldset>
        </article>
	</section>
</section>
@endsection