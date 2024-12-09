<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>XPS Battery Store |  Exide Dealers | Amaron Dealers | AMS Batteries | Poweron Dealers | Base Dealers | UPS Dealers | Inverters Salem, Attur, Namakkal</title>
        <title>Muyal Mark Castor Oil - Pure Filtered Castor Oil</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
<link rel="shortcut icon" href="assets/images/favicon.png">
        
<!--Chartist Chart CSS -->
{{-- <link rel="stylesheet" href="plugins/chartist/css/chartist.min.css"> --}}

 <!-- App css -->
 <!-- Magnific popup -->
<link rel="stylesheet" href="plugins/magnific-popup/magnific-popup.css" />

<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
<link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
<link href="assets/css/style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- DataTables -->
<link href="plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<!-- Responsive datatable examples -->
<link href="plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="assets/summernote/summernote-bs4.css" id="theme-style" />


    </head>
<body>
    <div id="wrapper">
         <!-- Top Bar Start -->
   <div class="topbar">

<!-- LOGO -->
<div class="topbar-left">
<a href="{{'/'}}" class="logo">
        <span>
                <img src="assets/images/logo-light.png" alt="" style="height: 65px;">
                {{-- <img src="assets/images/logo-light.png" alt="" height="18"> --}}
            </span>
        <i>
                <img src="assets/images/favicon.png" alt="" height="22">
                {{-- <img src="assets/images/logo-sm.png" alt="" height="22"> --}}
            </i>
    </a>
</div>

<nav class="navbar-custom">
    <ul class="navbar-right d-flex list-inline float-right mb-0">
       
        <li class="dropdown notification-list">
            <div class="dropdown notification-list nav-pro-img">
                <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="assets/images/users/user-4.jpg" alt="user" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->                
                    <a class="dropdown-item d-block" href="{{url('/changePassword')}}"><i class="mdi mdi-settings m-r-5"></i>Change Password</a>

                    <a class="dropdown-item text-danger" href="{{ route('logout') }}"  onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i class="mdi mdi-power text-danger"></i> Logout</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
                </div>
            </div>
        </li>

    </ul>

    <ul class="list-inline menu-left mb-0">
        <li class="float-left">
            <button class="button-menu-mobile open-left waves-effect">
                <i class="mdi mdi-menu"></i>
            </button>
        </li>
       
    </ul>

</nav>

</div>
<!-- Top Bar End -->
         <!-- ========== Left Sidebar Start ========== -->
            <!-- <div class="left side-menu"> </div> -->
            <div class="left page-wrapper chiller-theme toggled">
          <section class="section-wrapper">
            <nav class="accordion-wrapper">
              <ul class="ul-reset">
                <li><a href="{{url('/home')}}"><i class="fa fa-th-large"></i>&nbsp;&nbsp;Dashboard</a></li>
                <li>
                  <a href="#"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Business Configuration</a>
                  <ul class="ul-reset"> 
                    <li><a href="{{url('add_categorymaster')}}">Category</a></li>
                    <li><a href="{{url('add_brand')}}">Brand</a></li>
                    <li><a href="{{url('add_subbrand')}}">Sub Brand</a></li>
                    <li><a href="{{url('add_capacitymaster')}}">Capacity</a></li>
                    <li><a href="{{url('vehicle_brand')}}">Vehicle Brand</a></li>
                    <li><a href="{{url('vehicle_model')}}">Vehicle Model</a></li>
                    <li><a href="{{url('appliance_details')}}">Appliance Details</a></li>
                  </ul><!-- .ul-reset -->
                </li>
                <li><a href="{{url('product_details')}}"><i class="far fa-gem"></i>&nbsp;&nbsp;Manage Products</a></li>
                <li>
                  <a href="#"><i class="fa fa-chart-line"></i>&nbsp;&nbsp;Orders</a>
                  <ul class="ul-reset">
                    <li><a href="{{url('admin-orders')}}">Pending Orders</a></li>
                    <li><a href="{{url('admin-delivered-orders')}}">Delivered Orders</a></li>
                  </ul><!-- .ul-reset -->
                </li>
                <li><a href="{{url('uploadedImage')}}"><i class="fa fa-file-image-o"></i>&nbsp;&nbsp;Gallery</a></li>
                <li><a href="{{url('uploadedSlider')}}"><i class="fa fa-folder"></i>&nbsp;&nbsp;Sliders</a></li>
                <li><a href="{{url('view_testimonial')}}"><i class="fas fa-quote-left"></i>&nbsp;&nbsp;Testimonial</a></li>
                <li><a href="{{url('career_details')}}"><i class="fa fa-pencil-square-o"></i>&nbsp;&nbsp;Career Details</a></li>
                <li><a href="{{url('contact_enquiry')}}"><i class="fa fa-commenting"></i>&nbsp;&nbsp;Contact Enquiry</a></li>
                <li><a href="{{url('store_location')}}"><i class="fa fa-book"></i>&nbsp;&nbsp;Store Locators </a></li>
                <li>
                  <a href="#"><i class="fa fa-pencil-square-o"></i>&nbsp;&nbsp;Enquiry</a>
                  <ul class="ul-reset">
                    <li><a href="{{url('franchise_enquiry')}}">Franchise Enquiry</a></li>
                    <li><a href="{{url('send_enquiry')}}">Enquiry Details</a></li>
                  </ul><!-- .ul-reset -->
                </li>
                <li><a href="{{url('settings')}}"><i class="fa fa-cog"></i>&nbsp;&nbsp;Settings</a></li>
              </ul><!-- .ul-reset -->
            </nav>
          </section><!-- .accordion-wrapper -->

</div>
<!-- page-wrapper -->
            <!-- Left Sidebar End -->
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
                @yield('content')

            <footer class="footer">
                    ©  <?php echo date('Y'); ?> XPS Battery Store.
               </footer>  
                       <!-- App's Basic Js  -->
               <script src="assets/js/jquery.min.js"></script>
               <script src="assets/js/bootstrap.bundle.min.js"></script>
               <script src="assets/js/metisMenu.min.js"></script>
               <script src="assets/js/jquery.slimscroll.js"></script>
               <script src="assets/js/waves.min.js"></script>
               
                <!--Chartist Chart-->
               {{-- <script src="plugins/chartist/js/chartist.min.js"></script>
               <script src="plugins/chartist/js/chartist-plugin-tooltip.min.js"></script> --}}
               <!-- peity JS -->
               <script src="plugins/peity-chart/jquery.peity.min.js"></script>
               {{-- <script src="assets/pages/dashboard.js"></script> --}}
                <!-- magnific Popup -->
<script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>


<!-- Required datatable js -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="plugins/datatables/dataTables.buttons.min.js"></script>
<script src="plugins/datatables/buttons.bootstrap4.min.js"></script>
<script src="plugins/datatables/jszip.min.js"></script>
<script src="plugins/datatables/pdfmake.min.js"></script>
<script src="plugins/datatables/vfs_fonts.js"></script>
<script src="plugins/datatables/buttons.html5.min.js"></script>
<script src="plugins/datatables/buttons.print.min.js"></script>
<script src="plugins/datatables/buttons.colVis.min.js"></script>
<!-- Responsive examples -->
<script src="plugins/datatables/dataTables.responsive.min.js"></script>
<script src="plugins/datatables/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="assets/pages/datatables.init.js"></script>   
<!-- App js-->
<script src="assets/js/app.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">

<script src="https://cdn.jsdelivr.net/gh/dmuy/duDatepicker/duDatepicker.min.js"></script>

        </div> 
        
        <style>
                .text-white-50 {
                color: #fff !important;
                }
                .center-value {
                border: none !important;
                font-size: 30px !important;
                color: green !important;
                font-weight: 600 !important;
                }
               a {
  color: #3286ad;
  text-decoration: none
}

a:hover {opacity: 0.75;}

h1 {
  font-size: 40px;
    font-weight: 700;
  margin-bottom: 20px;
    margin-top: 20px;
}

h2 {
  font-size: 15px;
    font-weight: 600;
  margin-bottom: 30px;
    margin-top: 10px;
}
/*------scroll bar---------------------*/

::-webkit-scrollbar {
  width: 5px;
  height: 7px;
}
::-webkit-scrollbar-button {
  width: 0px;
  height: 0px;
}
::-webkit-scrollbar-thumb {
  background: #525965;
  border: 0px none #ffffff;
  border-radius: 0px;
}
::-webkit-scrollbar-thumb:hover {
  background: #525965;
}
::-webkit-scrollbar-thumb:active {
  background: #525965;
}
::-webkit-scrollbar-track {
  background: transparent;
  border: 0px none #ffffff;
  border-radius: 50px;
}
::-webkit-scrollbar-track:hover {
  background: transparent;
}
::-webkit-scrollbar-track:active {
  background: transparent;
}
::-webkit-scrollbar-corner {
  background: transparent;
}

</style>
                        
<script>
        $('.gallery-popup').magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            mainClass: 'mfp-fade',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0,1] // Will preload 0 - before current, and 1 after the current image
            }
        });

     $(document).ready(function(){
  $('.accordion-wrapper > ul > li:has(ul)').addClass("accordion-content");

  $('.accordion-wrapper > ul > li > a').click(function() {
    var checkElement = $(this).next();
   
    $('.accordion-wrapper li').removeClass('accordion-active');
    $(this).closest('li.accordion-content').addClass('accordion-active'); 
    
    if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
      $(this).closest('li').removeClass('accordion-active');
      checkElement.slideUp('normal');
    }
    
    if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
      $('.accordion-wrapper ul ul:visible').slideUp('normal');
      checkElement.slideDown('normal');
    }
    
    if (checkElement.is('ul')) {
      return false;
    } else {
      return true;  
    }   
  });
});



        
        </script>

<script>
        function ValidateSize(file) {
                var FileSize = file.files[0].size / 1024 / 1024; // in MB
                if (FileSize > 2) {
                    alert('File size exceeds 2 MB');
                   $(file).val(''); //for clearing with Jquery
                } else {
        
                }
            }

        </script>

        <script src="assets/summernote/summernote-bs4.min.js"></script>

        <script>
      $(function(){
        'use strict';

        // Summernote editor
        $('.summernote').summernote({
          height: 300,
          tooltip: false
        })
      });
    </script>
    <script>
      $('#refund_form').submit(function(){
        if(confirm('Are you Sure Want to Refund the Amount ?') == true){
          return true;
        }
        else {
          return false;
        }
      })
    </script>



        </body>
        </html>
