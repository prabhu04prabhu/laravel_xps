@extends('layouts.header')
@section('content')
<div class="content-page">  
        <div class="content">
            <div class="container-fluid">
               <div class="page-title-box">
<div class="row align-items-center">
     <div class="col-sm-6">
<h4 class="page-title">Career Details</h4>

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
                                <th>Resume</th>
                                {{--<th>Status</th>
                                 <th>Client Name</th>
                                <th>DOB</th> --}}
                                <th>View</th>
                                {{-- <th>Delete</th> --}}
                            </tr>
                            </thead>


                            <tbody>
                                    @php
                                    $info = DB::table('career')->get();

                                    foreach ($info as $val) {
                                       $reg = $val->id;
                                    }
                                    
                                @endphp
                                 <?php $i = 1; ?>
                                   @foreach ($info as $row)
                                  
                           <tr style="text-align:center">
                            
                           <td>{{$i}}</td> 
                               <td>{{$row->first_name}}</td>  
                               <td>{{$row->email}}</td> 
                               <td>{{$row->phone}}</td>  
                               <td><a href="{{$row->career_doc}}" target="_blank"><i class="fa fa-file-pdf-o"  aria-hidden="true"></i></a></td> 
                              
                               <td><a href="#" class="btn btn-success" data-toggle="modal" data-target="#bs-example-modal-lg2{{$row->id}}" ><i class="fa fa-eye" aria-hidden="true"></i></a></td>  
                         

                            <?php if(!empty($reg)) {?>
                                <div class="modal fade bs-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="bs-example-modal-lg2{{$row->id}}">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0" id="myLargeModalLabel">Career Details</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                            <div class="row">
                                                    <div class="col-md-6 form-group">
                                                            <label>First Name</label>
                                                        <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="{{$row->first_name}}" readonly/>
                                                        </div>
                                                        <div class="col-md-6 form-group">
                                                                <label>Last Name</label>
                                                                <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="{{$row->last_name}}" readonly/>
                                                                </div>
                                                            </div>
                                                              <div class="row">
                                                    <div class="col-md-6 form-group">
                                                            <label>Mobile No</label>
                                                        <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="{{$row->phone}}" readonly/>
                                                        </div>
                                                        <div class="col-md-6 form-group">
                                                                <label>Email</label>
                                                                <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="{{$row->email}}" readonly/>
                                                                </div>
                                                            </div>
                                                     
                                            <div class="row">
                                                              <div class="col-md-6 form-group">
                                                                <label>State</label>
                                                                <input type="text" class="form-control" required placeholder="" name="type" value="{{$row->state}}" readonly/>
                                                                </div>

                                                              <div class="col-md-6 form-group">
                                                                <label>Key Function Area</label>
                                                                <input type="text" class="form-control" required placeholder="" name="type" value="{{$row->key_function}}" readonly/>
                                                                </div>
                                                            </div>

                                                    <div class="row">
                                                                 <div class="col-md-6 form-group">
                                                                <label>Address</label>
                                                                <input type="text" class="form-control" required placeholder="" name="type" value="{{$row->address}}" readonly/>
                                                                </div>

                                                              <div class="col-md-6 form-group">
                                                                <label>Comments</label>
                                                                <input type="text" class="form-control" required placeholder="" name="type" value="{{$row->comments}}" readonly/>
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
        