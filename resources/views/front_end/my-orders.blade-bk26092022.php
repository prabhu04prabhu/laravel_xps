@extends('front_end.header')
@section('content')
<section class="section">
    <section class="section-content dashboard my-orders clear">
        <div class="banner-nav clear">
            <ul>
                <li><a href="{{'/'}}">Home</a></li>
                <li><a href="{{'/'}}">My Account</a></li>
                <li><a href="{{'my_orders'}}">My Orders</a></li>
            </ul>
        </div>
        <?php 
          if((Session::get('id')) != ''){
            ?>
            <?php
            $sub = DB::table('ordertrans')
            ->join('ordermaster', 'ordermaster.OrderID', '=', 'ordertrans.OrderID')
            ->join('productmaster', 'productmaster.ProductID', '=', 'ordertrans.ProductID')
            ->join('brandmaster', 'brandmaster.BrandID', '=', 'productmaster.BrandID')
            ->where('ordermaster.UserID',Session::get('id'))->orderBy('OrderTransID', 'desc')->get();
            ?>
               @foreach ($sub as $row)
        <article class="clear">
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
    </section>
</section>
@endsection