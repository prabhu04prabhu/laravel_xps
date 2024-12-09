@if(Session::get('success'))
@extends('front_end.header')
@section('content')
<header class="banner-heading clear">
	<h2 class="left">ORDER CONFIRMATION</h2>
	<div class="banner-nav right">
		<ul>
			<li><a href="{{'/'}}">Home</a></li>
		</ul>
	</div>
</header>
<section class="section">
    <section class="section-content clear center-section">    
	<img src="image/xps_success.png">
    <h3>{{Session::get('success')}}</h3> 
	<p class="text-center">Your Order Has Been Received</p>
	<table class="table table-hover table-condensed border_table">
		<thead>
			<tr>
				<th colspan='2'>Payment Details</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td style="width:50%">Total Amount</td>
				<td style="width:50%">Rs. {{ Session::get('total') }}</td>
			</tr>
			<tr>
				<td style="width:50%">Reference No</td>
				<td style="width:50%">{{ Session::get('referenceno') }}</td>
			</tr>
			<tr>
				<td style="width:50%">Payment Status</td>
				<td style="width:50%">{{ Session::get('status') }}</td>
			</tr>
		</tbody>
	</table>
	
    <P>Thanks for your Valuvable Purchase. Our sales team will contact you shortly.</p>
	<h2>Contact us</h2>
	<p>Mobile Number : <a href="tel:+918056821111">+91-80568 21111</a></p>
	<p>Email  Us : info@xpsbatterystore.com</p>
	</section>
</section>
<!-- <script type="text/javascript">
	setTimeout(function () {
   window.location.href= '/'; // the redirect goes here

},5000);
</script> -->
@endsection
@endif
@if(Session::get('error'))
@extends('front_end.header')
@section('content')
<header class="banner-heading clear">
	<h2 class="left">ORDER CONFIRMATION</h2>
	<div class="banner-nav right">
		<ul>
			<li><a href="{{'/'}}">Home</a></li>
		</ul>
	</div>
</header>
<section class="section">
    <section class="section-content clear center-section">    
	<img src="image/xps_failed.png">
    <h3>{{Session::get('error')}}</h3> 
	<p>Your order has been received, But Payment is Not Received</p>
	<table class="table table-hover table-condensed border_table">
		<thead>
			<tr>
				<th colspan='2'>Payment Details</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td style="width:50%">Total Amount</td>
				<td style="width:50%">Rs. {{ Session::get('total') }}</td>
			</tr>
			<tr>
				<td style="width:50%">Reference No</td>
				<td style="width:50%">{{ Session::get('referenceno') }}</td>
			</tr>
			<tr>
				<td style="width:50%">Payment Status</td>
				<td style="width:50%">{{ Session::get('status') }}</td>
			</tr>
		</tbody>
	</table>
    <P>Our Support team will contact you shortly.</p>
	<h2>Contact us</h2>
	<p>Mobile Number : <a href="tel:+918056821111">+91-80568 21111</a></p>
	<p>Email  Us : info@xpsbatterystore.com</p>
	</section>
</section>
<!-- <script type="text/javascript">
	setTimeout(function () {
   window.location.href= '/'; // the redirect goes here

},5000);
</script> -->
@endsection
@endif
