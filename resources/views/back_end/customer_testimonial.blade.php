@extends('layouts.header')
@section('content')
<div class="content-page">  
        <div class="content">
            <div class="container-fluid">
               <div class="page-title-box">
<div class="row align-items-center">
     <div class="col-sm-6">
<h4 class="page-title">Customer Testimonials</h4>

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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile No</th>
                                <th>Status</th>
                                {{--<th>Edit</th>--}}
                                <th>Delete</th>
                                {{-- <th>Client Name</th>
                                <th>DOB</th> --}}
                                <th>View</th>
                                {{-- <th>Delete</th> --}}
                            </tr>
                            </thead>


                            <tbody>
                                    @php
                                    $info = DB::table('testimonial')->where('type', '=', 'customer')->get();
                                         
                                    foreach ($info as $val) {
                                       $reg = $val->t_id;
                                       $profile =$val->status;
                                    }
                                    
                                @endphp
                                 <?php $i = 1; ?>
                                   @foreach ($info as $row)
                                  
                           <tr style="text-align:center">
                            
                           <td>{{$i}}</td> 
                               <td>{{$row->name}}</td>  
                               <td>{{$row->email}}</td> 
                               <td>{{$row->mobile}}</td>   
                               <!-- @if ($row->status != 'F')
                                <td><span class="badge badge-success" style="font-size: 14px">Success</span></td>
                                @else
                                <td><span class="badge badge-danger" style="font-size: 14px">Failed</span></td>  
                                @endif -->
                                 <td><a href="#" data-toggle="modal" data-target="#bs-example-modal-lg2{{$row->t_id}}"  >
                                <?php if($profile == 'Approved') { ?>
                                        <span class="badge badge-pill badge-success">Approved</span>
                                <?php } else{ ?>
                                    <span class="badge badge-pill badge-danger">Request</span>
                                 <?php } ?>
                                    </a></td>  
                         

                            <?php if(!empty($reg)) {?>
                                <div class="modal fade bs-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="bs-example-modal-lg2{{$row->t_id}}">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                             <form action="{{url('approve')}}" enctype="multipart/form-data" method="post">
                                                @csrf
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0" id="myLargeModalLabel">Customer Details</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                            <div class="row">
                                                    <div class="col-md-6 form-group">
                                                            <label>Customer Name</label>
                                                        <input type="text" class="form-control" required placeholder="" name="type" value="{{$row->name}}" readonly/>
                                                        </div>
                                                        <div class="col-md-6 form-group">
                                                                <label>Company Name</label>
                                                                <input type="text" class="form-control" required placeholder="" name="type" value="{{$row->company_name}}" readonly/>
                                                                </div>
                                                            </div>
                                                     
                                            <div class="row">
                                                              <div class="col-md-6 form-group">
                                                                <label>Content</label>
                                                                <textarea readonly class="form-control" cols="30" rows="7"  required>{{$row->content}}</textarea>
                                                                <!-- <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="{{$row->content}}" readonly/> -->
                                                                </div>

                                                                <div class="col-md-6 form-group">
                                                                        <label>Customer Photo</label>
                                                                        <a href="<?php echo url('/'); ?>/image/{{$row->image}}" target="_blank" style="margin-left: 34px;"><img src="<?php echo url('/'); ?>/image/{{$row->image}}" alt="" srcset="" width="100px" height="100px" ></a>
                                                                </div>
                                                            </div>
                                                             <input type="hidden" name="edit_id" value="{{$row->t_id}}">
                                                            <div class="modal-footer">
                <button type="submit" class="btn btn-success waves-effect waves-light">Approve</button>
               <!--  <a href="#" data-toggle="modal" data-target="#bs-example-modal-lg4{{$row->t_id}}" type="button" class="btn btn-secondary waves-effect waves-light">Re-Issuse</a> -->
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
            </div>
                                                            
                                        </form>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                                        
                                    </div>
                            <?php } ?>
                           
                            </td>
<!--                             <div class="modal fade bs-example-modal-lg4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="bs-example-modal-lg4{{$row->t_id}}">
                            <form action="{{url('re_issue')}}" enctype="multipart/form-data" method="post">
                                                @csrf
                                    <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0">Please enter Re-issuse details </h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <textarea class="form-control" rows="10" name="comment"></textarea>
                <div class="form-group mb-0 p-t-10 text-right">
                    <div>
                        <input type="hidden" name="reissue_id" value="{{$row->t_id}}">
                        <button type="submit" class="btn btn-success waves-effect waves-light mr-1">
                            Submit
                        </button>
                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>                  
                                        </div>
                                    </form>
                                    </div> -->
                                <!-- </div> --><!-- /.modal -->
                                        
                                    </div>
                            {{--<td><button type="submit" class="btn btn-success" onclick="window.location.href='edit_testimonial?id={{$row->t_id}}'">Edit</button></td>--}}
                                       <td><button type="submit" class="btn btn-danger" onclick="window.location.href='delete_testimonial&{{$row->t_id}}'">Delete</button></td>
                              
                               <td><a href="#" class="btn btn-success" data-toggle="modal" data-target="#bs-example-modal-lg3{{$row->t_id}}" ><i class="fa fa-eye" aria-hidden="true"></i></a></td>  
                         

                            <?php if(!empty($reg)) {?>
                                <div class="modal fade bs-example-modal-lg3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="bs-example-modal-lg3{{$row->t_id}}">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0" id="myLargeModalLabel">Customer Information</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                            <div class="row">
                                                    <div class="col-md-6 form-group">
                                                            <label>Customer Name</label>
                                                        <input type="text" class="form-control" required placeholder="Enter Name" name="type" value="{{$row->name}}" readonly/>
                                                        </div>
                                                        <div class="col-md-6 form-group">
                                                                <label>Company Name</label>
                                                                <input type="text" class="form-control" required placeholder="Company Name" name="type" value="{{$row->company_name}}" readonly/>
                                                                </div>
                                                            </div>
                                                              <div class="row">
                                                    <div class="col-md-6 form-group">
                                                            <label>Mobile No</label>
                                                        <input type="text" class="form-control" required placeholder="Enter Number" name="type" value="{{$row->mobile}}" readonly/>
                                                        </div>
                                                        <div class="col-md-6 form-group">
                                                                <label>Email</label>
                                                                <input type="text" class="form-control" required placeholder="Enter Email" name="type" value="{{$row->email}}" readonly/>
                                                                </div>
                                                            </div>
                                                     
                                            <div class="row">
                                                              <div class="col-md-6 form-group">
                                                                <label>Content</label>
                                                                <textarea class="form-control" cols="30" rows="5"  required >{{$row->content}}</textarea>
                                                                <!-- <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="{{$row->content}}" readonly/> -->
                                                                </div>

                                                                <div class="col-md-6 form-group">
                                                                        <label>Customer Photo</label>
                                                                        <a href="<?php echo url('/'); ?>/image/{{$row->image}}" target="_blank" style="margin-left: 34px;"><img src="<?php echo url('/'); ?>/image/{{$row->image}}" alt="" srcset="" width="100px" height="100px" ></a>
                                                                </div>
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
        