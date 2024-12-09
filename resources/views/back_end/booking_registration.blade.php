@extends('layouts.header') @section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Bookings</h4>

                    </div>

                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            @if (\Session::has('success2'))
                            <div class="alert alert-success">

                                {!! \Session::get('success2') !!}

                            </div>
                            @endif
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                <thead>
                                    <tr style="text-align:center">
                                        <th>S.No</th>
                                        <th>Booking No.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile Number</th>
                                        <th>Status</th>
                                        <th>Emergency</th>
                                        <th>View</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php $info = DB::table('booking')->get(); foreach ($info as $val) { $booking_id = $val->booking_id; $updated_at = $val->updated_at; } $info2 = DB::table('booking')->whereNotNull('updated_at')->get(); @endphp
                                    <?php $i = 1; ?>
                                        @foreach ($info2 as $row)
                                        <tr style="text-align:center">
                                            <td>{{$i}}</td>
                                            <td>{{$row->booking_number}}</td>
                                            <td>{{$row->fname}}</td>
                                            <td>{{$row->email}}</td>
                                            <td>{{$row->mobile_number}}</td>

                                            @if ($row->payment == 'F')
                                            <td><span class="badge badge-danger" style="font-size: 14px">Failed</span></td>
                                            @elseif(empty($row->payment))
                                            <td><span class="badge badge-success" style="font-size: 14px">Active</span></td>  
                                            @else
                                            <td><span class="badge badge-success" style="font-size: 14px">Closed</span></td>  
                                            @endif

                                            @if ($row->emergency == 'on')
                                            <td><span class="badge badge-success" style="font-size: 14px">Yes</span></td>
                                            @elseif(empty($row->emergency))
                                            <td><span class="badge badge-danger" style="font-size: 14px">No</span></td>  
                                            @else
                                            <td><span class="badge badge-danger" style="font-size: 14px">No</span></td>  
                                            @endif
                                            {{-- @endif --}}
                                            {{-- <td> <input type="checkbox" id="switch6" switch="primary" checked/>
                                                <label for="switch6" data-on-label="Yes"
                                                        data-off-label="No"></label></td> --}}
                                            <td>
                                                <button class="btn btn-success" data-toggle="modal" data-target="#bs-example-modal-lg{{$row->booking_id}}"><i class="fa fa-eye" aria-hidden="true"></i></button>  </td>

                                                <?php if(!empty($booking_id)) {?>
                                                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="bs-example-modal-lg{{$row->booking_id}}">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Detailed Information</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div class="col-md-6 form-group">
                                                                            <label>Boarding Point</label>
                                                                            <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="{{$row->boarding_point}}" readonly/>
                                                                        </div>
                                                                        <div class="col-md-6 form-group">
                                                                            <label>Destination Point</label>
                                                                            <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="{{$row->destination_point}}" readonly/>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-6 form-group">
                                                                            <label>Boarding Address</label>
                                                                            <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="{{$row->boarding_address}}" readonly/>
                                                                        </div>
                                                                        <div class="col-md-6 form-group">
                                                                            <label>Destination Address</label>
                                                                            <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="{{$row->destination_address}}" readonly/>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-6 form-group">
                                                                            <label>Trip Start</label>
                                                                            <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="{{$row->trip_start}}" readonly/>
                                                                        </div>
                                                                        <div class="col-md-6 form-group">
                                                                            <label>Trip End</label>
                                                                            <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="{{$row->trip_end}}" readonly/>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-6 form-group">
                                                                            <label>Booking Type</label>
                                                                            <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="{{$row->booking_type}}" readonly/>
                                                                        </div>
                                                                        <div class="col-md-6 form-group">
                                                                            <label>Car Type</label>
                                                                            <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="{{$row->car_type}}" readonly/>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-6 form-group">
                                                                            <label>Fair</label>
                                                                            <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="{{$row->fair}}" readonly/>
                                                                        </div>

                                                                        <div class="col-md-6 form-group">
                                                                            <label>Emergency Reason</label>
                                                                            <input type="text" class="form-control" required name="type" value="{{$row->emergency_reason}}" readonly/>
                                                                        </div>
                                                                    </div>
                                                                    @php
                                                                    $info = DB::table('booking')->join('receipt', 'booking.booking_number', '=', 'receipt.booking_id')->where('booking.booking_id', '=', $row->booking_id)->get(); 

                                                                  
                                                                @endphp
                                                                @foreach ($info as $val)
                                                                <a href="storage/receipt/{{ $val->image }}" target="_blank"><img src="storage/receipt/{{ $val->image }}" alt="" srcset="" width="60" height="60"></a>
                                                                @endforeach
                                                  <?php } ?>
                                                                </div>
                                                            </div>
                                                            <!-- /.modal-content -->
                                                        </div>
                                                        <!-- /.modal-dialog -->
                                                    </div>
                                                    <!-- /.modal -->
                                                  

                                          
                                            {{-- <td>
                                                <button class="btn btn-danger" onclick="window.location.href='delete_booking&{{$row->booking_id}}'"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                            </td> --}}
                                        </tr>
                                        <?php $i++ ?>
                                            @endforeach
                                </tbody>

                            </table>

                        </div>

                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
    </div>
</div>

@endsection
{{-- 
<style>
input[switch]:checked + label{
    background-color: #02a499 !important;
}
</style> --}}