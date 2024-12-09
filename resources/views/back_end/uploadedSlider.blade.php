@extends('layouts.header')

@section('content')
<div class="content-page">  
<div class="content">
    <div class="container-fluid">
       <div class="page-title-box">
<div class="row align-items-center">
<div class="col-sm-6">
<h4 class="page-title">Sliders</h4>

</div>
<div class="col-sm-6">
    <div class="float-right d-none d-md-block">

            <div class="button-items">
                    <button type="button" class="btn btn-primary waves-effect waves-light" onclick="window.location.href='{{url('slider_view')}}'">Add New Slider</button>
        </div>
         
     </div>
     
</div>

</div>
</div>
<!-- end row -->
            @php
            $gallery = DB::table('slider_image')->get();
                @endphp
             <div class="row">
                    @foreach ($gallery as $item)
                <div class="col-xl-3 col-md-6">
                <a href="deleteslider&{{$item->Slider_ID}}" class="more-details">Delete</a>
                     <a href="image/{{$item->image}}" class="gallery-popup">
                        <div class="project-item">
                            <div class="overlay-container">
                                <img src="image/{{$item->image}}" alt="img" class="gallery-thumb-img">
                               
                            </div>
                        </div>
                    </a>
                   
                </div>
                @endforeach
                <!-- end col -->
            </div>
            <!-- end row -->      
    </div> 
</div> 
</div> 
@endsection