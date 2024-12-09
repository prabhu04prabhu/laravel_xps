@extends('layouts.header') @section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Manage Testimonial</h4>

                    </div>
                    <div class="col-sm-6">
                  <div class="float-right d-none d-md-block">

            <div class="button-items">
                    <button type="button" class="btn btn-primary waves-effect waves-light" onclick="window.location.href='{{url('add_testimonial')}}'">Add Testimonial</button>
                  <!--   <button type="button" class="btn btn-secondary waves-effect" onclick="window.location.href='{{url('editImage')}}'" >Edit</button> -->
             
        </div>
                             
                        </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-12"><br/>
                            @if (\Session::has('success'))
                            <div class="alert alert-success">

                                {!! \Session::get('success') !!}

                            </div>
                            @endif

                            @if (\Session::has('success2'))
                            <div class="alert alert-danger">

                                {!! \Session::get('success2') !!}

                            </div>
                            @endif
                            <br/>


                    <div class="card">
                            <div class="card-body">
                                   
                               <!--  <h4 class="mt-0 header-title">Testimonials in Use</h4> -->
                                <p class="text-muted m-b-30">
                                </p>

                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr style="text-align:center">
                                        <th>S.No</th>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th>Content</th>
                                        <th>Image</th>
                                        <!-- <th>Created By</th> -->
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                      
                                    </tr>
                                    </thead>


                                    <tbody>
                                            @php
                                            $result = DB::table('testimonial')->where('type', '!=', '')->Orderby('t_id', 'desc')->get();
                                            foreach ($result as $val) {
                                       $reg = $val->t_id;
                                       //$profile =$val->status;
                                    }
                                        @endphp
                                         <?php $i = 1; ?>      
                                         @foreach ($result as $row)

                                   <tr style="text-align:center">  
                                       <td>{{$i}}</td>
                                       <td>{{$row->name}}</td>
                                       <td>{{$row->designation}}</td>
                                       <td><textarea name="" id="" cols="30" rows="10" style="border: none" readonly>{{$row->content}}</textarea></td>
                                       <td><a href="image/{{$row->image}}" target="_blank"><img src="image/{{$row->image}}" alt="" srcset="" width="42px" height="42px"></a></td>
                                        <!-- <td>{{$row->type}}</td> -->
                                        <td><a href="#" data-toggle="modal" data-target="#bs-example-modal-lg2{{$row->t_id}}"  >
                                <?php if($row->status == 'Approved') { ?>
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
                                       <td><button type="submit" class="btn btn-warning" onclick="window.location.href='edit_testimonial?id={{$row->t_id}}'">Edit</button></td>
                                       <td><button type="submit" class="btn btn-danger" onclick="window.location.href='delete_testimonial&{{$row->t_id}}'">Delete</button></td>
                                       <?php $i++; ?>
                                   </tr>
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

