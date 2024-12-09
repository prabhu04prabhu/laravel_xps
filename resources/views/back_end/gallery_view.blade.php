@extends('layouts.header')

@section('content')
<div class="content-page">  
<div class="content">
    <div class="container-fluid">
       <div class="page-title-box">
<div class="row align-items-center">
<div class="col-sm-6">
     @foreach ($details as $index => $row)
               @if($index == 0)
               <h4 class="page-title">{{$row->name}}</h4>
<!-- <h4 class="page-title">Gallery</h4> -->
@endif
    @endforeach 
</div>
<!-- <div class="col-sm-6">
    <div class="float-right d-none d-md-block">

            <div class="button-items">
                    <button type="button" class="btn btn-primary waves-effect waves-light" onclick="window.location.href='{{url('multipleimage')}}'">Add New Image</button>
                    <button type="button" class="btn btn-secondary waves-effect" onclick="window.location.href='{{url('editImage')}}'" >Edit</button>
             
        </div>
         
     </div>
     
</div> -->

</div>
</div>
<!-- end row -->
             <div class="row">
                    @foreach ($details as $index => $row)
                <div class="col-xl-3 col-md-6">
                    <a href="image/{{$row->image}}" target="_blank" class="gallery-popup">
                        <div class="project-item">
                            <div class="overlay-container">
                                <img src="image/{{$row->image}}" target="_blank" alt="img" class="gallery-thumb-img">
                               
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