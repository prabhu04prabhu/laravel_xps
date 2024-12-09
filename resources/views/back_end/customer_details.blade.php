@if(session()->has('userid'))
   
@else 
 <script>window.location.href="/admin";</script>
@endif

@extends('layouts.header')
@section('content')
<div class="content-page">  
        <div class="content">
            <div class="container-fluid">
               <div class="page-title-box">
<div class="row align-items-center">
     <div class="col-sm-6">
<h4 class="page-title">Customer Details</h4>

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
                                <th>Client ID</th>
                                <th>Email</th>
                                <th>Mobile No</th>
                                <th>Order Id</th>
                                <th>Status</th>
                                {{-- <th>Client Name</th>
                                <th>DOB</th> --}}
                                <th>View</th>
                                {{-- <th>Delete</th> --}}
                            </tr>
                            </thead>


                            <tbody>
                                    @php
                                    $info = DB::table('customer_registration')->whereNotNull('status_code')->get();

                                    foreach ($info as $val) {
                                       $reg = $val->reg_id;
                                    }
                                    
                                @endphp
                                 <?php $i = 1; ?>
                                   @foreach ($info as $row)
                                  
                           <tr style="text-align:center">
                            
                           <td>{{$i}}</td>
                               <td>{{$row->client_id}}</td>  
                               {{-- <td>{{$row->client_name}}</td> --}}
                               <td>{{$row->email}}</td>  
                               <td>{{$row->mobile_number}}</td>  
                               <td>{{$row->transaction_id}}</td>  
                               @if ($row->status_code != 'F')
                                <td><span class="badge badge-success" style="font-size: 14px">Success</span></td>
                                @else
                                <td><span class="badge badge-danger" style="font-size: 14px">Failed</span></td>  
                                @endif
                              
                               <td><a href="#" class="btn btn-success" data-toggle="modal" data-target="#bs-example-modal-lg2{{$row->reg_id}}" ><i class="fa fa-eye" aria-hidden="true"></i></a></td>  
                         

                            <?php if(!empty($reg)) {?>
                                <div class="modal fade bs-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="bs-example-modal-lg2{{$row->reg_id}}">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0" id="myLargeModalLabel">Other Information</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                            <div class="row">
                                                    <div class="col-md-6 form-group">
                                                            <label>Client Name</label>
                                                        <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="{{$row->client_name}}" readonly/>
                                                        </div>
                                                        <div class="col-md-6 form-group">
                                                                <label>DOB</label>
                                                                <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="{{$row->dob}}" readonly/>
                                                                </div>
                                                            </div>
                                                <div class="row">
                                                    <div class="col-md-6 form-group">
                                                            <label>Blood Group</label>
                                                        <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="{{$row->blood_group}}" readonly/>
                                                        </div>
                                                        <div class="col-md-6 form-group">
                                                                <label>Reference</label>
                                                                <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="{{$row->reference}}" readonly/>
                                                                </div>
                                                            </div>
                                                     
                                          
                                                            <div class="row">
                                                                    <div class="col-md-6 form-group">
                                                            <label>Present Address</label>
                                                            <textarea name="" id="" cols="30" rows="3" class="form-control" readonly>{{$row->present_address}}</textarea>
                                                        </div>

                                                        <div class="col-md-6 form-group">
                                                                <label>Permanent Address</label>
                                                                <textarea name="" id="" cols="30" rows="3" class="form-control" readonly>{{$row->permanent_address}}</textarea>
                                                            </div>
                                                            </div>

                                                            <div class="row">
                                                                    <div class="col-md-6 form-group">
                                                                    <label>V.Reg.No</label>
                                                                <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="{{$row->vehicle_reg_no}}" readonly/>
                                                                </div>

                                                                <div class="col-md-6 form-group">
                                                                    <label>Make</label>
                                                                <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="{{$row->make}}" readonly/>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                    <div class="col-md-6 form-group">
                                                                    <label>Model</label>
                                                                <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="{{$row->model}}" readonly/>
                                                                </div>

                                                                <div class="col-md-6 form-group">
                                                                    <label>Fuel</label>
                                                                <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="{{$row->fuel}}" readonly/>
                                                                </div>
                                                            </div>

                                                                <div class="row">
                                                                    <div class="col-md-6 form-group">
                                                                    <label>Occupation</label>
                                                                <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="{{$row->occupation}}" readonly/>
                                                                </div>

                                                                <div class="col-md-6 form-group">
                                                                    <label>Transmission</label>
                                                                <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="{{$row->car_transmission}}" readonly/>
                                                                </div>
                                                                </div>

                                                                <div class="row">
                                                                        <div class="col-md-6 form-group">
                                                                        <label>Insurance</label>
                                                                    <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="{{$row->insurance_status}}" readonly/>
                                                                    </div>

                                                                    <div class="col-md-6 form-group">
                                                                            <label>DL Number</label>
                                                                        <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="{{$row->aadhar_no}}" readonly/>
                                                                        </div>
                                                                </div>

                                                                <div class="row">
                                                                        <div class="col-md-6 form-group">
                                                                        <label>Transaction Ref No</label>
                                                                    <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="{{$row->txn_reference_no}}" readonly/>
                                                                    </div>

                                                                    <div class="col-md-6 form-group">
                                                                            <label>Bank Description</label>
                                                                        <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="{{$row->status_desc}}" readonly/>
                                                                        </div>
                                                                </div>
                                                                <div class="row">
                                                                        <div class="col-md-6 form-group">
                                                                            <label>Bank Ref No.</label>
                                                                            @if ($row->bank_ref_number == "")
                                                                            <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="No Bank Reference" readonly/>
                                                                            @else
                                                                            <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="{{$row->bank_ref_number}}" readonly/>
                                                                            @endif
                                                                            
                                                                        </div>
                                                                        <div class="col-md-6 form-group">
                                                                            <label>Transaction Requested date</label>
                                                                            <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="{{$row->txn_req_date}}" readonly/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                <div class="col-md-6 form-group">
                                                                        <label>Registration copy</label>
                                                                        <a href="{{$row->document_photo}}" target="_blank" style="margin-left: 30px;"><img src="{{$row->document_photo}}" alt="" srcset="" width="100px" height="100px" ></a>
                                                                </div>

                                                                <div class="col-md-6 form-group">
                                                                        <label>Customer Photo</label>
                                                                        <a href="{{$row->customer_photo}}" target="_blank" style="margin-left: 34px;"><img src="{{$row->customer_photo}}" alt="" srcset="" width="100px" height="100px" ></a>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class=" col-md-6 form-group">
                                                                        <label>Vehicle Photo</label>
                                                                        <a href="{{$row->vehicle_photo}}" target="_blank"  style="margin-left: 48px;"><img src="{{$row->vehicle_photo}}" alt="" srcset="" width="100px" height="100px" ></a>
                                                                </div>

                                                                <div class="col-md-6 form-group">
                                                                        <label>Vehicle Photo</label>
                                                                        <a href="{{$row->vehicle_photo}}" target="_blank" style="margin-left: 48px;"><img src="{{$row->vehicle_photo}}" alt="" srcset="" width="100px" height="100px" ></a>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                    <div class="col-md-6 form-group">
                                                                        <label>Insurance Copy</label>
                                                                        <a href="{{$row->insurance_photo}}" target="_blank" style="margin-left: 38px;"><img src="{{$row->insurance_photo}}" alt="" srcset="" width="100px" height="100px" ></a>
                                                                </div>

                                                                {{-- <div class="col-md-6 form-group">
                                                                        <label>DL Document</label>
                                                                        <a href="{{$row->aadhar_document_photo}}" target="_blank" style="margin-left: 48px;"><img src="{{$row->aadhar_document_photo}}" alt="" srcset="" width="100px" height="100px" ></a>
                                                                </div> --}}
                                                            </div>
                                                            
                                        </form>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                                        
                                    </div>
                            <?php } ?>
                           
                            </td>
                               {{-- <td><button class="btn btn-danger" onclick="window.location.href='delete_info&{{$row->reg_id}}'"><i class="fa fa-trash" aria-hidden="true"></i></button></td>                             --}}
                           </tr>
                           <?php $i++; ?>
                           @endforeach
                            </tbody>

                            
                        </table>

                       
                    </div>

                    
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->      
</div> 
</div> 
</div> 
    
@endsection
{{-- <style>
.modal-lg{
    max-width: 95% !important;
}
</style> --}}
        