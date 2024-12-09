@extends('layouts.header')
@section('content')
<div class="content-page">  
        <div class="content">
            <div class="container-fluid">
<!--                <div class="page-title-box">
<div class="row align-items-center">
     <div class="col-sm-6">
<h4 class="page-title"> Product Details</h4>

</div>                          
      
</div>
</div> -->
       <div class="page-title-box">
<div class="row align-items-center">
<div class="col-sm-6">
<h4 class="page-title">Manage Store Locators</h4>

</div>
<div class="col-sm-6">
    <div class="float-right d-none d-md-block">

            <div class="button-items">
                    <button type="button" class="btn btn-primary waves-effect waves-light" onclick="window.location.href='{{url('add_store_location')}}'">Add Locator</button>
                   <!--  <button type="button" class="btn btn-secondary waves-effect" onclick="window.location.href='{{url('editImage')}}'" >Edit</button> -->
             
        </div>
         
     </div>
     
</div>

</div>
</div>
<!-- end row -->

        <div class="row">
            <div class="col-12">
               <div class="card">
                            <div class="card-body">
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

                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr style="text-align:center">
                                        <th>S.No</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>City</th>
                                        <th>Contact Person</th>
                                        <th>Mobile No</th>
                                        <th>Status</th>
                                        <th>View</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                      
                                    </tr>
                                    </thead>


                                    
                                    <tbody>
                                            @php
                                            
                                            $result = DB::table('tbl_storelocator')->Orderby('store_id', 'desc')->get();
 
                                        @endphp
                                         <?php $i = 1; ?>      
                                         @foreach ($result as $row_store)
                                   <tr style="text-align:center">  
                                       <td>{{$i}}</td>
                                       <td>{{$row_store->name}}</td>
                                       <td>{{$row_store->address}}</td>
                                       <td>{{$row_store->city}}</td>
                                       <td>{{$row_store->contact_person}}</td>
                                       <td>{{$row_store->mobile_no}}</td>

                                       <td>
                                          <?php if($row_store->status == 'Active'){?>
                                          <a onclick="return confirm('Are you sure want to Inactive?');" href="un_publish&id={{$row_store->store_id}}"><span class="badge badge-pill badge-success">Active</span></a>
                                        <?php }else{ ?>
                                        <a onclick="return confirm('Are you sure want to Active?');" href="publish&id={{$row_store->store_id}}"><span class="badge badge-pill badge-danger">Inctive</span></a>
                                        <?php } ?>
                                        </td>

                                       <!-- <td>
                                        <?php if($row_store->status == 'Active'){?>
                                                  <a onclick="#" href="#" class="btn btn-success">Active</a>
                                                <?php }else{ ?>
                                                <a onclick="#" href="#" class="btn btn-danger">Inactive</a>
                                                <?php } ?></td> -->

                                       <td><a href="#" class="btn btn-success" data-toggle="modal" data-target="#bs-example-modal-lg2{{$row_store->store_id}}" ><i class="fa fa-eye" aria-hidden="true"></i></a></td>  
                         

                            <?php if(!empty($result)) {?>
                                <div class="modal fade bs-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="bs-example-modal-lg2{{$row_store->store_id}}">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0" id="myLargeModalLabel">Store Details</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                            <div class="row">
                                                    <div class="col-md-6 form-group">
                                                            <label>Name</label>
                                                        <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="{{$row_store->name}}" readonly/>
                                                        </div>
                                                        <div class="col-md-6 form-group">
                                                                <label>Address</label>
                                                                <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="{{$row_store->address}}" readonly/>
                                                                </div>
                                                            </div>
                                                <div class="row">
                                                    <div class="col-md-6 form-group">
                                                            <label>City</label>
                                                        <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="{{$row_store->city}}" readonly/>
                                                        </div>
                                                        <div class="col-md-6 form-group">
                                                                <label>Pincode</label>
                                                                <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="{{$row_store->pincode}}" readonly/>
                                                                </div>
                                                            </div>
                                                     
                                          
                                                            <div class="row">
                                                           
                                                        <div class="col-md-6 form-group">
                                                                <label>Contact Person</label>
                                                                 <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="{{$row_store->contact_person}}" readonly/>
                                                               
                                                            </div>

                                                            <div class="col-md-6 form-group">
                                                                    <label>Mobile No</label>
                                                                <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="{{$row_store->mobile_no}}" readonly/>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-6 form-group">
                                                                    <label>Lan</label>
                                                                <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="{{$row_store->lan}}" readonly/>
                                                                </div>
                                                                <div class="col-md-6 form-group">
                                                                    <label>Lat</label>
                                                                <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="{{$row_store->lat}}" readonly/>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-6 form-group">
                                                                    <label>Map Link</label>
                                                                <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="{{$row_store->map_link}}" readonly/>
                                                                </div>
                                                                <div class="col-md-6 form-group">
                                                                    <label>Status</label>
                                                                <input type="text" class="form-control" required placeholder="Enter Amount" name="type" value="{{$row_store->status}}" readonly/>
                                                                </div>
                                                            </div>
                                                            
                                        </form>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                                        
                                    </div>
                            <?php } ?>
                                       <td><button type="submit" class="btn btn-warning" onclick="window.location.href='edit_store?store_id={{$row_store->store_id}}'">Edit</button></td>
                                       <td><button type="submit" class="btn btn-danger" onclick="window.location.href='delete_store&{{$row_store->store_id}}'">Delete</button></td>
                                       <?php $i++; ?>
                                   </tr>
                                   @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
</div> 
</div> 
    
@endsection
{{-- <style>
.modal-lg{
    max-width: 95% !important;
}
</style> --}}
        