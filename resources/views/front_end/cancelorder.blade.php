@extends('front_end.header')
@section('content')
<header class="banner-heading clear">
	<h2 class="left">Cancel Order</h2>
	<div class="banner-nav right">
		<ul>
			<li><a href="{{'/'}}">Home</a></li>
		</ul>
	</div>
</header>
<section class="section">
    <section class="section-content clear center-section">    
	<?php
		//echo $details_order->Order_Date;

		// $datetime_1 = $details_order->Created_Date; 
		// $datetime_2 = now(); 

		// $start_datetime = new DateTime($datetime_1); 
		// $diff = $start_datetime->diff(new DateTime($datetime_2));


		// echo $diff->days.' Days total<br>'; 
		// echo $diff->y.' Years<br>'; 
		// echo $diff->m.' Months<br>'; 
		// echo $diff->d.' Days<br>'; 
		// echo $diff->h.' Hours<br>'; 
		// echo $diff->i.' Minutes<br>'; 
		// echo $diff->s.' Seconds<br>';
		// $hours = $diff->h;


		if($hours <= 24){
			?>
			<p class="text-center txtline">Your Order Has Been Cancelled</p>
	<?php }
		else{
			?>
			<p class="text-center txtline">Unable to Cancel Your Order, Your Order time Exceeds the Limit. </p>
	<?php
		}
	?>

	<h2>Contact us</h2>
	<p>Mobile Number : <a href="tel:+918056821111">+91-80568 21111</a></p>
	<p>Email  Us : info@xpsbatterystore.com</p>
	</section>
</section>
@endsection

<style type="text/css">
.txtline{
	font-size: 20px;
    font-weight: 600;
    line-height: 30px;
    padding-bottom: 30px;
    color: #ed1c24;
}
</style>