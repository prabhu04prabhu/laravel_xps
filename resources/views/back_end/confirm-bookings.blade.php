@extends('layouts.header')
@section('content')
<div class="content-page">
   <div class="content">
      <div class="container-fluid">
         <div class="page-title-box">
            <div class="row align-items-center">
               <div class="col-sm-6">
                  <h4 class="page-title">Confirm Bookings</h4>
               </div>
            </div>
         </div>
         <!-- end row -->
         @if (\Session::has('success'))
         <div class="alert alert-success">

             {!! \Session::get('success') !!}

         </div>
         @endif

         @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
         <div class="row">
            <div class="col-lg-6">
               <div class="card">
                  <div class="card-body">
                        <h4 class="mt-0 header-title text-center">Tariff Details</h4>
                        <hr>                   
                     <form class="" action="{{'confirm'}}" method="POST" id="form-reset-ajax1" enctype="multipart/form-data">
                        @csrf                      
                        <div class="form-group">
                           <label>Enter Booking Number</label>
                           <input type="text" class="form-control booking_number" required name="booking_number" id="booking_number" autocomplete="on"/>
                        </div>
                        <div class="form-group">
                           <label>Amount</label>
                           <input type="number" class="form-control" required name="amount" id="amount"/>
                        </div>
                        <div class="form-group">
                           <label>Percentage</label>
                           <input type="number" class="form-control" required name="percentage" id="percentage"/>
                        </div>
                        <div class="form-group">
                           {{-- <label>Driver Bata</label> --}}
                           <input type="hidden" class="form-control" required name="bata" id="bata"/>
                        </div>
                        <div class="form-group">
                           <label>Per Hour Cost (9 PM - 6 AM)</label>
                           <input type="number" class="form-control" required name="per_hour" id="per_hour"/>
                        </div>
                        <div class="form-group">
                           <label>BreakFast Allowance</label>
                           <input type="number" class="form-control" required name="breakfast" id="breakfast"/>
                        </div>
                        <div class="form-group">
                           <label>Lunch Allowance</label>
                           <input type="number" class="form-control" required name="lunch" id="lunch"/>
                           <input type="hidden" class="form-control" name="transaction_number" id="transaction_number"/>
                        </div>
                        <div class="form-group">
                           <label>Dinner Allowance</label>
                           <input type="number" class="form-control" required name="dinner" id="dinner"/>
                        </div>
                        <div class="form-group">
                                <label>Driver Room Rent</label>
                                <input type="number" class="form-control" required name="room_rent" id="room_rent"/>
                             </div>
                        <div class="row">
                                <div class="form-group col-sm-6">
                                        <label>Trip Start Date</label>
                                        <input id="datepicker1" type="text" name="start_date" required autocomplete="off" class="form-control">
                                     </div>
                                     <div class="form-group col-sm-6">
                                            <label>Trip Start Time</label>
                                            <input type="text" id="timepicker1" class="timepicker1 form-control" name="start_time" autocomplete="off" />
                                         </div>
                        </div>
                       
                        <div class="row">
                                <div class="form-group col-sm-6">
                                        <label>Trip End Date</label>
                                        <input id="datepicker2" type="text" name="end_date" required autocomplete="off" class="form-control">
                                     </div>
                                     <div class="form-group col-sm-6">
                                            <label>Trip End Time</label>
                                            <input type="text" id="timepicker2" class="timepicker2 form-control" name="end_time" autocomplete="off"/>
                                         </div>
                        </div>
                        <div class="row">
                                <div class="form-group col-sm-6">
                                        <div>
                                           <button id="click" type="button" class="btn btn-primary waves-effect waves-light">
                                           Calculate
                                           </button>
                                  
                                  </div>
                                  </div>
                                  <div class="form-group col-sm-6">
                                       <input name="fair" type="text" id="output" required readonly class="center-value">
                                  </div>
                        </div>

                        <div class="row">
                           <div class="col-sm-6">
                              <input type="hidden" class="form-control dayAmount1" name="day_amt1" id=""/>
                           </div>
                           <div class="col-sm-6">
                              <input type="hidden" class="form-control dayAmount2" name="day_amt2" id=""/>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-sm-6">
                              <input type="hidden" class="form-control rentRoom" name="rent_room1" id=""/>
                           </div>
                           <div class="col-sm-6">
                              <input type="hidden" class="form-control rentRoom" name="rent_room2" id=""/>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-sm-6">
                              <input type="hidden" class="form-control allowanceFood" name="fallowance1" id=""/>
                           </div>
                           <div class="col-sm-6">
                              <input type="hidden" class="form-control allowanceFood" name="fallowance2" id=""/>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-sm-6">
                              <input type="hidden" class="form-control offerPer1" name="offerPerc1" id=""/>
                           </div>
                           <div class="col-sm-6">
                              <input type="hidden" class="form-control offerPer2" name="offerPerc2" id=""/>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-sm-6">
                              <input type="hidden" class="form-control totalPbreak1" name="tbreak1" id=""/>
                           </div>
                           <div class="col-sm-6">
                              <input type="hidden" class="form-control totalPbreak2" name="tbreak2" id=""/>
                              <input type="hidden" class="form-control user_type" name="user_type" id=""/>
                             
                           </div>
                        </div>
                        <input type="hidden" name="mode_hidden" value="" id="mode">
                        <div class="mb-2">
                           <input type="file" name="image[]" id="exampleInputFile" multiple class="form-control"/>
                        </div>
                       
                        <button type="submit" class="btn btn-secondary waves-effect waves-light text-centre" id="online">Online</button>
                        <button type="submit" class="btn btn-secondary waves-effect waves-light text-centre" id="offline">offline</button>
                    </form>
                    
                  </div>
               </div>
               <!-- end col -->
            </div>

            <div class="col-lg-6">
                    <div class="card">
                       <div class="card-body">
                            <h4 class="mt-0 header-title center text-center" >Customer Details</h4>
                            <hr>
                         <form action="" id="form-reset-ajax2">
                             <div class="form-group">
                                <label>Customer Name</label>
                                <input type="text" class="form-control" readonly name="fname" id="fname"/>
                             </div>
                             <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" readonly name="email" id="email"/>
                             </div>
                             <div class="form-group">
                                <label>Mobile Number</label>
                                <input type="number" class="form-control" readonly name="mobile_number" id="mobile_number"/>
                             </div>
                             <div class="form-group">
                                <label>Boarding Point</label>
                                <input type="text" class="form-control" readonly name="bpoint" id="bpoint"/>
                             </div>
                             <div class="form-group">
                                <label>Destination Point</label>
                                <input type="text" class="form-control" readonly name="dpoint" id="dpoint"/>
                             </div>
                             <div class="form-group">
                                <label>Boarding Address</label>
                                <input type="text" class="form-control" readonly name="baddress" id="baddress"/>
                             </div>
                             <div class="form-group">
                                <label>Destination Address</label>
                                <input type="text" class="form-control" readonly name="daddress" id="daddress"/>
                             </div>
                             <div class="form-group">
                                <label>User Type</label>
                                <input type="text" class="form-control" readonly name="utype" id="utype"/>
                             </div>
                             <div class="form-group">
                                    <label>Booking Type</label>
                                    <input type="text" class="form-control" readonly name="btype" id="btype"/>
                                 </div>
                             <div class="form-group">
                                    <label>Original Fair</label>
                                    <input type="text" class="form-control" readonly name="fair" id="fair"/>
                                 </div>
                                </form>
                       </div>
                    </div>
                    <!-- end col -->
                 </div>
         </div>
         
          
      </div>
   </div>
</div>
@endsection