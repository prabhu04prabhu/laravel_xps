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
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                            <li class="menu-title">Main</li>
                            <li>
                                <a href="{{url('/home')}}" class="waves-effect">
                                    <i class="ti-home"></i><span> Dashboard </span>
                                </a>
                            </li>
                            <li class="has-sub"><a class="menu-item" href="#"><i class="fa fa-eye" aria-hidden="true"></i><span>Business Configuration</span></a>
                            <ul class="menu-content" style="">
                              <li class="sub-menu"><a href="{{url('add_categorymaster')}}" class="waves-effect"><span>- &nbsp;Master </span></a>
                              </li>
                              <li class="sub-menu"><a href="{{url('add_brand')}}" class="waves-effect"><span>- &nbsp;Brand </span></a>
                              </li>
                              <li class="sub-menu"><a href="{{url('add_subbrand')}}" class="waves-effect"><span>- &nbsp;Sub Brand </span></a>
                              </li>
                            </ul>
                          </li>
                            <!-- <li>
                                <a href="{{url('add_categorymaster')}}" class="waves-effect"><i class="fa fa-bar-chart" aria-hidden="true"></i><span>Master </span></a>
                            </li>

                            <li>
                                <a href="{{url('add_brand')}}" class="waves-effect"><i class="fa fa-address-card" aria-hidden="true"></i><span>Brand </span></a>
                            </li>

                            <li>
                                <a href="{{url('add_subbrand')}}" class="waves-effect"><i class="fa fa-superpowers" aria-hidden="true"></i><span>Sub Brand </span></a>
                            </li> -->

                            <li>
                                <a href="{{url('add_products')}}" class="waves-effect"><i class="fa fa-superpowers" aria-hidden="true"></i><span>Products</span></a>
                            </li>

                            <li>
                                <a href="{{url('product_details')}}" class="waves-effect"><i class="fa fa-bar-chart" aria-hidden="true"></i><span>Products Details</span></a>
                            </li>

                            <li>
                                <a href="{{url('uploadedImage')}}" class="waves-effect"><i class="fa fa-file-image-o" aria-hidden="true"></i><span>Gallery </span></a>
                            </li>

                            <!-- <li>
                                    <a href="{{url('video')}}" class="waves-effect"><i class="fas fa-video-camera"></i><span> Video </span></a>
                                   
                                </li> -->

                                <li>
                                    <a href="{{url('add_testimonial')}}" class="waves-effect"><i class="fas fa-quote-left"></i><span>Testimonial </span></a>
                                   
                                </li>
                               <!--  <li>
                                    <a href="{{url('customer_testimonial')}}" class="waves-effect"><i class="fa fa-comments"></i><span>Testimonial (Customer) </span></a>
                                   
                                </li> -->

                                <li>
                                    <a href="{{url('career_details')}}" class="waves-effect"><i class="fa fa-pencil-square-o"></i><span>Career Details </span></a>
                                   
                                </li>
                                <!-- <li>
                                    <a href="{{url('enquiry_details')}}" class="waves-effect"><i class="fa fa-user-plus"></i><span>Dealer Enquiry</span></a>
                                   
                                </li> -->

                                <!-- <li>
                                        <a href="{{url('customer_details')}}" class="waves-effect"><i class="fa fa-user" aria-hidden="true"></i><span> Dealers Details </span></a>
                                       
                                    </li> -->
                                <li>
                                        <a href="{{url('contact_enquiry')}}" class="waves-effect"><i class="fa fa-commenting" aria-hidden="true"></i><span> Contact Enquiry </span></a>
                                       
                                    </li>
                                    <!-- <li>
                                            <a href="{{url('booking_registration')}}" class="waves-effect"><i class="fa fa-book" aria-hidden="true"></i><span> Bookings </span></a>
                                           
                                        </li>
                                        <li>
                                            <a href="{{url('confirm-bookings')}}" class="waves-effect"><i class="fa fa-book" aria-hidden="true"></i><span> Confirm Bookings </span></a>
                                           
                                        </li>

                                    <li>
                                        <a href="{{url('transactions')}}" class="waves-effect"><i class="fa fa-book" aria-hidden="true"></i><span> Transactions (Bookings) </span></a>
                                        
                                    </li>

                                        <li>
                                                <a href="{{url('tariff')}}" class="waves-effect"><i class="fa fa-cog" aria-hidden="true"></i><span> Tariff Settings </span></a>
                                               
                                            </li> -->

                                        <li>
                                            <a href="{{url('settings')}}" class="waves-effect"><i class="fa fa-cog" aria-hidden="true"></i><span> Settings </span></a>
                                           
                                        </li>
                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
                @yield('content')

            <footer class="footer">
                    ©  2020 Xps Battery Store.
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
      <script type="text/javascript">
        $(document).ready(function() {
            $('.booking_number').change(function() {
                var booking_number = $(this).val();
                var token = '{{ csrf_token() }}';
                $.ajax({
                    type: 'POST',
                    url: 'get_booking_number',
                    data: {
                        booking_number: booking_number,
                        _token: token
                    },
                    success: function(data) {
                        
                        if (data.booking_details[0] === '0') {
                            alert('No data exists for the given Booking Number. Please Check your Booking Number')
                            $('#form-reset-ajax1').trigger("reset");
                            $('#form-reset-ajax2').trigger("reset");
                        } else {
                            //For Customer Details
                        $('#fname').val(data.booking_details[0].fname);
                        $('#email').val(data.booking_details[0].email);
                        $('#mobile_number').val(data.booking_details[0].mobile_number);
                        $('#daddress').val(data.booking_details[0].destination_address);
                        $('#dpoint').val(data.booking_details[0].destination_point);
                        $('#baddress').val(data.booking_details[0].boarding_address);
                        $('#bpoint').val(data.booking_details[0].boarding_point);
                        $('#utype').val(data.booking_details[0].user_type);
                        $('#transaction_number').val(data.booking_details[0].transaction_number);
                        if (data.booking_details[0].booking_type === 'Local Trip - 50 km Radius') {
                            $('#room_rent').val('0');
                        } else {
                            $('#room_rent').val('500');
                        }
                        $('#fair').val(data.booking_details[0].fair);
                        $('#btype').val(data.booking_details[0].booking_type);
                        
                       //Trip Start
                        var str1 = data.booking_details[0].trip_start;
                        var ret1 = str1.split(" ");
                        var str1 = ret1[0];
                        var str2 = ret1[1];
                        var str3 = ret1[2];
                        var tripStartConcat = ret1[1] + ' ' + ret1[2];

                        //Trip End
                        var str2 = data.booking_details[0].trip_end;
                        var ret2 = str2.split(" ");
                        var str4 = ret2[0];
                        var str5 = ret2[1];
                        var str6 = ret2[2];
                        var tripEndConcat = ret2[1] + ' ' + ret2[2];

                        $('#timepicker1').val(tripStartConcat);
                        $('#timepicker2').val(tripEndConcat);
                        $('#datepicker1').val(str1);
                        $('#datepicker2').val(str4);

                        //Traffic Details
                        $('#amount').val(data.tariff[0].amount);
                        $('#percentage').val(data.tariff[0].percentage);
                        $('#bata').val(data.tariff[0].bata);
                        $('#breakfast').val(data.tariff[0].breakfast);
                        $('#dinner').val(data.tariff[0].dinner);
                        $('#lunch').val(data.tariff[0].lunch);
                        $('#per_hour').val(data.tariff[0].per_hour);
                        }
                        
                    }
                });
            });
        });

$('.timepicker1').timepicker({
    interval: 60,
    defaultTime: '06',
    dynamic: false,
    dropdown: true,
    scrollbar: true
});



$('.timepicker2').timepicker({
    interval: 60,
    defaultTime: '09:00PM',
    dynamic: false,
    dropdown: true,
    scrollbar: true
});

$('#datepicker1').datepicker({
    minDate: 2,
    format: 'd/m/y',
    onSelect: function() {
        var a = $.datepicker.formatDate("yy mm dd", $(this).datepicker("getDate"));
        var b = a.split(' ');
        d1 = new Date(b);

        var dt2 = $('#datepicker2');                
				var startDate = $(this).datepicker('getDate' , '+1d');
        var minDate = $(this).datepicker('getDate', '+1d');
				minDate.setDate(minDate.getDate()); 

        dt2.datepicker('setDate', minDate);
        startDate.setDate(startDate.getDate() + 30);
        dt2.datepicker('option', 'maxDate', startDate);
        dt2.datepicker('option', 'minDate', minDate);
    }
  
});


$('#datepicker2').datepicker({
    minDate: 0,
    format: 'd/m/y',
    onSelect: function() {
        var c = $.datepicker.formatDate("yy mm dd", $(this).datepicker("getDate"));
        var g = c.split(' ');
        d2 = new Date(g);
    }
});


$("#click").on('click',function(){

$amountPerDay = document.getElementById('amount').value;
$offerPercentage = document.getElementById('percentage').value
// if (document.getElementById('utype').value === 'trial') {
//     $offerPercentage = '0';
// } else {
//     $offerPercentage = document.getElementById('percentage').value;
//     // console.log($offerPercentage);
// }

var driverBataPercentageValue = document.getElementById('percentage').value;

// if (document.getElementById('utype').value === 'trial') {
//     var driverBataPercentageValue = '0';
// } else {
//     var driverBataPercentageValue = document.getElementById('percentage').value;
// }


// alert($offerPercentage);
//per hour dynamic rate
var userTypeTrial = document.getElementById('utype').value;
var perHourFare = document.getElementById('per_hour').value;

//Driver room rent per day
var driverRoomRent = document.getElementById('room_rent').value;
//Driver Bata
var driverBata = document.getElementById('bata').value;

var serviceCharge = '5';

//value of date
$date1 = $('#datepicker1').val();
$date2 = $('#datepicker2').val();

//value of time
$start_time = $('#timepicker1').val();
$end_time = $('#timepicker2').val();

//12hrs to 24hrs conversion for time1
var time = $start_time;
var hours = Number(time.match(/^(\d+)/)[1]);
var minutes = Number(time.match(/:(\d+)/)[1]);
var AMPM = time.match(/\s(.*)$/)[1];
if (AMPM == "PM" && hours < 12) hours = hours + 12;
if (AMPM == "AM" && hours == 12) hours = hours - 12;
var sHours = hours.toString();
var sMinutes = minutes.toString();
if (hours < 10) sHours = "0" + sHours;
if (minutes < 10) sMinutes = "0" + sMinutes;

//start time in 24hrs
$startIn_hrs = sHours + ":" + sMinutes;
// alert($startIn_hrs);

//12hrs to 24hrs conversion for time2
var time2 = $end_time;
var hours2 = Number(time2.match(/^(\d+)/)[1]);
var minutes2 = Number(time2.match(/:(\d+)/)[1]);
var AMPM = time2.match(/\s(.*)$/)[1];
if (AMPM == "PM" && hours2 < 12) hours2 = hours2 + 12;
if (AMPM == "AM" && hours2 == 12) hours2 = hours2 - 12;
var sHours2 = hours2.toString();
var sMinutes2 = minutes2.toString();
if (hours2 < 10) sHours2 = "0" + sHours2;
if (minutes2 < 10) sMinutes2 = "0" + sMinutes2;

//end time in 24hrs
$endIn_hrs = sHours2 + ":" + sMinutes2;

var day_diff = new Date($date2 + ' ' + $endIn_hrs) - new Date($date1 + ' ' + $startIn_hrs);
diff_time = day_diff/(60*60*1000);

//Total number of selected days
$diff_days = Math.ceil(diff_time/24)

// alert($diff_days+'Days');

//serviceCharge (based on driver's bata)
var serviceChargeDriverBata = (driverBata * serviceCharge)/100;
//total driverBata incl service charge
var driverBataWithServiceCharge = ((driverBata * serviceCharge)/100) + parseInt(driverBata);

//Total Amount for selected days
var amtDifferencePerDay = $amountPerDay * $diff_days;

// alert(amtDifferencePerDay+'AmtDifference');

var serviceChargeWithAmtDifference = amtDifferencePerDay * serviceCharge/100;

// alert(serviceChargeWithAmtDifference + 'servicechrge');

var newAmountWithService = serviceChargeWithAmtDifference + amtDifferencePerDay;


$offerPerc = (amtDifferencePerDay * $offerPercentage) / 100;

//Total number of days driver going to stay in room
var t_driverRoomRentPerDay = $diff_days - 1;

//Total room rent per day calc for driver, if greater than 1 amt will be calculated
var t_amtDriverRoomPerDay = '0';
if(t_driverRoomRentPerDay >= 1){
  t_amtDriverRoomPerDay = t_driverRoomRentPerDay * driverRoomRent;
}


//One day is 06:00 am to 21:00pm in 24hrs format
$timeAm = '06:00';
$timePm = '21:00';

//Food allowance dynamic amount
var breakFast = document.getElementById('breakfast').value;
var lunch = document.getElementById('lunch').value;
var dinner = document.getElementById('dinner').value;

//Food Timinigs in 24hrs format
var breakFastTime = '08:00';
var lunchTime = '14:00';
var dinnerTime = '20:00';

//Initialize the food allowance counts
var foodAllowance = '0';
var breakFastCount = '0';
var lunchCount = '0';
var dinnerCount = '0';

//BreakFast + Lunch + Dinner counts are taken
if($startIn_hrs <= breakFastTime && $endIn_hrs >= dinnerTime){
  breakFastCount = '1';
  lunchCount = '1';
  dinnerCount = '1';
}

else if($startIn_hrs <= breakFastTime && $endIn_hrs >= lunchTime){
  breakFastCount = '1';
  lunchCount = '1';
  dinnerCount = '0';
}

else if($startIn_hrs <= lunchTime && $endIn_hrs >= dinnerTime){
  breakFastCount = '0';
  lunchCount = '1';
  dinnerCount = '1';
}

else if($startIn_hrs <= breakFastTime && $endIn_hrs < lunchTime){
  breakFastCount = '1';
  lunchCount = '0';
  dinnerCount = '0';
}

else if($startIn_hrs <= lunchTime && $endIn_hrs < dinnerTime){
  breakFastCount = '0';
  lunchCount = '1';
  dinnerCount = '0';
}

else if($startIn_hrs > lunchTime && $endIn_hrs >= dinnerTime){
  breakFastCount = '0';
  lunchCount = '0';
  dinnerCount = '1';
}

// alert('b:'+ breakFastCount +' '+ 'l:' + lunchCount +' '+ 'd:' + dinnerCount);

//Food allowance calculations based on date difference
var totalFoodAllowance = ((parseInt($diff_days - 1) + parseInt(breakFastCount)) * breakFast ) +  ((parseInt($diff_days - 1) + parseInt(lunchCount)) * lunch ) +  ((parseInt($diff_days - 1) + parseInt(dinnerCount)) * dinner );

// alert(totalFoodAllowance + 'FoodAllowance');

var startInAmount = '0';
var endInAmount = '0';

if($startIn_hrs < $timeAm){
    var s_Difference = new Date($date1 + ' ' +$timeAm) - new Date($date1 + ' ' +$startIn_hrs);
    $startInDifference = s_Difference/(60*60*1000);
    var startInAmount = $startInDifference * perHourFare;
    // alert(startInAmount + 'StartInAmount');
}

if($endIn_hrs > $timePm){
    var e_Difference = new Date($date2 + ' ' +$endIn_hrs) - new Date($date2 + ' ' +$timePm);
    $endInDifference = e_Difference/(60*60*1000);
    var endInAmount = $endInDifference * perHourFare;
    // alert(endInAmount + 'EndInAmount');
}

if($startIn_hrs > $timePm){
    var s_Difference = new Date('09/22/2019' + ' ' +$timeAm) - new Date('09/21/2019' + ' ' +$startIn_hrs);
    $startInDifference = s_Difference/(60*60*1000);
    var startInAmount = $startInDifference * perHourFare;
    // alert(startInAmount + 'StartInAmount');
} 

if($endIn_hrs < $timeAm){
    var e_Difference = new Date('09/22/2019' + ' ' +$endIn_hrs) - new Date('09/21/2019' + ' ' +$timePm);
    $endInDifference = e_Difference/(60*60*1000);
    var endInAmount = $endInDifference * perHourFare;
    // alert(endInAmount + 'EndInAmount');
}

//Final Total Amount Calculations
// if ($offerPercentage == '0') {
if (document.getElementById('utype').value === 'trial') {
  var totalTimeAmount = parseInt(startInAmount) + parseInt(endInAmount) + parseInt(newAmountWithService) + parseInt(t_amtDriverRoomPerDay) + parseInt(totalFoodAllowance) - parseInt($offerPerc);

  
} else {
  var totalTimeAmount = parseInt(startInAmount) + parseInt(endInAmount) + parseInt(newAmountWithService) + parseInt(t_amtDriverRoomPerDay) + parseInt(totalFoodAllowance) - parseInt($offerPerc);

 
}

// var ttt = driverBataWithServiceCharge - parseInt($offerPerc);


var newAmountMinusOffer2 = parseInt(newAmountWithService) - ((amtDifferencePerDay * driverBataPercentageValue) / 100);

// alert(totalTimeAmount);

var newAmountMinusOffer = parseInt(newAmountWithService) - parseInt($offerPerc);

if(document.getElementById('utype').value === 'trial'){
//   $('#output').val('Rs. '+totalTimeAmount);
  $('.dayAmount1').val('Rs. '+newAmountWithService);
  $('.dayAmount2').val('Rs. '+newAmountMinusOffer2);
  // $('.bataDriver1').val('Rs. '+driverBataWithServiceCharge);
  // $('.bataDriver2').val('Rs. '+secondDriverBataValue);
  $('.rentRoom').val('Rs. '+t_amtDriverRoomPerDay);
  $('.allowanceFood').val('Rs. '+totalFoodAllowance);
  $('.offerPer1').val('Nil');
  $('.offerPer2').val(driverBataPercentageValue+ '%');

  var totalPriceBreakTrial = parseInt(newAmountWithService) + parseInt(t_amtDriverRoomPerDay)+ parseInt(totalFoodAllowance);

  var totalPriceBreakReg = parseInt(newAmountMinusOffer2) + parseInt(t_amtDriverRoomPerDay)+ parseInt(totalFoodAllowance);

  $('.totalPbreak1').val('Rs. '+totalPriceBreakTrial);
  $('.totalPbreak2').val('Rs. '+totalPriceBreakReg);
  $('#output').val('Rs. '+totalPriceBreakTrial);
  $('.user_type').val('trial');
}
else{
  $('#output').val('Rs. '+totalTimeAmount);
  $('.dayAmount1').val('Rs. '+newAmountWithService);
  $('.dayAmount2').val('Rs. '+newAmountMinusOffer2);
  // $('.bataDriver1').val('Rs. '+driverBataWithServiceCharge);
  // $('.bataDriver2').val('Rs. '+secondDriverBataValue);
  $('.rentRoom').val('Rs. '+t_amtDriverRoomPerDay);
  $('.allowanceFood').val('Rs. '+totalFoodAllowance);
  $('.offerPer1').val('Nil');
  $('.offerPer2').val(driverBataPercentageValue+ '%');
  var totalPriceBreakTrial = parseInt(newAmountWithService) + parseInt(t_amtDriverRoomPerDay)+ parseInt(totalFoodAllowance);

  var totalPriceBreakReg = parseInt(newAmountMinusOffer2) + parseInt(t_amtDriverRoomPerDay)+ parseInt(totalFoodAllowance);

  $('.totalPbreak1').val('Rs. '+totalPriceBreakTrial);
  $('.totalPbreak2').val('Rs. '+totalPriceBreakReg);
  $('.user_type').val('registered');
}

});
        </script>


    <script>
    $('#Button').click(function(){
        var number = $('#mobile').val();
        var short_url = $('#short_url').val();
        window.open("https://api.whatsapp.com/send?phone=91"+number+"&text="+short_url+"","_blank");
        window.location.href='confirm-bookings';
        // window.location.href="https://api.whatsapp.com/send?phone=91"+number+"&text="+short_url+"";
    });

    $('#offline').click(function(){
    $('#mode').val('offline');
    });

    $('#online').click(function(){
    $('#mode').val('online');
    });

    </script>
        </body>
        </html>
