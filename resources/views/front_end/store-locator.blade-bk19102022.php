@extends('front_end.header')
@section('content')
<link rel='stylesheet' href='assets/front_end/css/mapbox.css'>
<section class="section">
    <section class="section-content store clear">
        <div class="scoped-top100 body-top100">
           <!--<h3>Store Locator</h3>-->
           <!--<h5 style="text-align: center;font-size: 20px;">Under Construction</h5>-->
          <div class='store-sidebar'>
            <div class='heading'>        
              <h1>Store Locator</h1>
            </div>
            <div id='listings' class='listings1'></div>
          </div>
          <div id='mfe-top100' class='map-top100'> </div>
        </div>
    </section>
</section>
<script src='assets/front_end/js/mapbox.js'></script>
<script  src="assets/front_end/js/store.js"></script>
@endsection