@extends('front_end.header')
@section('content')

<header class="banner-heading clear">
	<h2 class="left">Testimonials</h2>
	<div class="banner-nav right">
		<ul>
			<li><a href="{{'/'}}">Home</a></li>
			<li>Testimonials</li>
		</ul>
	</div>
</header>
<section class="section">
    <section class="section-content testimonials clear">
        <aside class="left" align="center">
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
                            <br/>
        </aside>
        <div class="clear"></div>

	<div class="add-testimonial"><a href="javascript:void(0)" class="button" data-modal="Add-Testimonials">Add Testimonials</a></div>
    	<h2>What our clients say about us.</h2>
        <ul>
            @php
                $testimonial = DB::table('testimonial')->where('status', '=', 'Approved')->get();
            @endphp
            @foreach ($testimonial as $row)
        	<li>
            <figcaption>
            <p>{{$row->content}}</p>
            <h3>{{$row->name}}</h3>
            <img src="<?php echo url('/'); ?>/image/{{$row->image}}">
            </figcaption>
            </li>
            @endforeach
<!--         	<li>
            <figcaption>
            <p>This is my first time, I am really impressed with the co. The easy way to select battery plus competitive price and timely installation.</p>
            <h3>Client Name</h3>
            <img src="assets/front_end/images/photo.jpg">
            </figcaption>
            </li>
        	<li>
            <figcaption>
            <p>This is my first time, I am really impressed with the co. The easy way to select battery plus competitive price and timely installation.</p>
            <h3>Client Name</h3>
            <img src="assets/front_end/images/photo.jpg">
            </figcaption>
            </li>
        	<li>
            <figcaption>
            <p>This is my first time, I am really impressed with the co. The easy way to select battery plus competitive price and timely installation.</p>
            <h3>Client Name</h3>
            <img src="assets/front_end/images/photo.jpg">
            </figcaption>
            </li>
        	<li>
            <figcaption>
            <p>This is my first time, I am really impressed with the co. The easy way to select battery plus competitive price and timely installation.</p>
            <h3>Client Name</h3>
            <img src="assets/front_end/images/photo.jpg">
            </figcaption>
            </li>
        	<li>
            <figcaption>
            <p>This is my first time, I am really impressed with the co. The easy way to select battery plus competitive price and timely installation.</p>
            <h3>Client Name</h3>
            <img src="assets/front_end/images/photo.jpg">
            </figcaption>
            </li> -->
        </ul>
    </section>
</section>
@endsection