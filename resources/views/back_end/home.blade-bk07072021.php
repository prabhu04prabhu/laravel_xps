@extends('layouts.header')

@section('content')
         <div class="content-page">  
            <div class="content">
                <div class="container-fluid">
                   <div class="page-title-box">
    <div class="row align-items-center">
         <div class="col-sm-6">
     <h4 class="page-title">Dashboard</h4>
    <!--  <ol class="breadcrumb">
         <li class="breadcrumb-item active">Welcome to Muyal Mark</li>
     </ol> -->
     <br/>
</div>
            
    </div>
</div>
<!-- end row -->
@php
    
     $career = DB::table('career')->where('email', '!=', null)->count();
    $gallery = DB::table('gallery_category')->where('name', '!=', null)->count();
    $testimonial = DB::table('testimonial')->where('type', '=', 2)->count();
    $contact = DB::table('contact_enquiry')->where('email', '!=', null)->count();

@endphp

                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-danger text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <div class="float-left mini-stat-img mr-4">
                                                <img src="assets/images/services-icon/01.png" alt="" >
                                            </div>
                                             <h5 class="font-16 text-uppercase mt-0 text-white-50">Gallery</h5>
                                        <h4 class="font-500">{{ $gallery }}</h4>
                                           
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-secondary text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <div class="float-left mini-stat-img mr-4">
                                                <img src="assets/images/services-icon/02.png" alt="" >
                                            </div>
                                            <h5 class="font-16 text-uppercase mt-0 text-white-50">Testimonial</h5>
                                        <h4 class="font-500">{{ $testimonial }}</h4>
                                          
                                        </div>
                                   
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-info text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <div class="float-left mini-stat-img mr-4">
                                                <img src="assets/images/services-icon/02.png" alt="" >
                                            </div>
                                             <h5 class="font-16 text-uppercase mt-0 text-white-50">Career</h5>
                                        <h4 class="font-500">{{ $career }}</h4>
                                            
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-success text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <div class="float-left mini-stat-img mr-4">
                                                <img src="assets/images/services-icon/02.png" alt="" >
                                            </div>
                                            <h5 class="font-16 text-uppercase mt-0 text-white-50">Contact</h5>
                                        <h4 class="font-500">{{ $contact }}</h4>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                </div> 
            </div> 
        </div> 
       
        @endsection