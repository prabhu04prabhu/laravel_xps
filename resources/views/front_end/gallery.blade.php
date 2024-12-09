@extends('front_end.header')
@section('content')
<header class="banner-heading clear">
	<h2 class="left">Gallery</h2>
	<div class="banner-nav right">
		<ul>
			<li><a href="{{'/'}}">Home</a></li>
			<li>Gallery</li>
		</ul>
	</div>
</header>
<section class="section">
    <section class="section-content photo-gallery clear">
    	<ul id="grid">
    		@php

              $gallery = DB::table('gallery_category')->select("gallery_category.*", DB::raw("(SELECT image FROM images WHERE images.cat_id = gallery_category.cat_id limit 1) as image"))->get();

                @endphp
                 @foreach ($gallery as $row)
                <li><a href="image_gallery&{{$row->cat_id}}"  ><span></span><img src="<?php echo url('/'); ?>/image/{{$row->image}}"><figcaption><div>{{$row->name}}</div></figcaption></a><!-- <br/>
                 <h4 style="text-align: center;">{{$row->name}}</h4> --></li>
                @endforeach 
<!-- 			<li><a href="assets/front_end/images/Gallery/1.jpg" rel="lightbox[group1]"><img src="assets/front_end/images/Gallery/1.jpg"><figcaption><div>Gallery Name</div></figcaption></a>
			<a href="assets/front_end/images/Gallery/2.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/3.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/4.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/5.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/6.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/7.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/8.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/9.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/10.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/11.jpg" rel="lightbox[group1]"></a></li>
            
			<li><a href="assets/front_end/images/Gallery/1.jpg" rel="lightbox[group1]"><img src="assets/front_end/images/Gallery/1.jpg"><figcaption><div>Gallery Name</div></figcaption></a>
			<a href="assets/front_end/images/Gallery/2.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/3.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/4.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/5.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/6.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/7.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/8.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/9.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/10.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/11.jpg" rel="lightbox[group1]"></a></li>
            
			<li><a href="assets/front_end/images/Gallery/1.jpg" rel="lightbox[group1]"><img src="assets/front_end/images/Gallery/1.jpg"><figcaption><div>Gallery Name</div></figcaption></a>
			<a href="assets/front_end/images/Gallery/2.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/3.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/4.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/5.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/6.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/7.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/8.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/9.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/10.jpg" rel="lightbox[group1]"></a>
			<a href="assets/front_end/images/Gallery/11.jpg" rel="lightbox[group1]"></a></li> -->
  		</ul>
    </section>
</section>
@endsection