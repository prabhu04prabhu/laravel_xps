@extends('layouts.header') @section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Add Store Locator</h4>

                    </div>
                    <div class="col-sm-6">
    <div class="float-right d-none d-md-block">

            <div class="button-items">
                    <button type="button" class="btn btn-primary waves-effect waves-light" onclick="window.location.href='{{url('store_location')}}'">View Locations</button>
                    <!-- <button type="button" class="btn btn-secondary waves-effect" onclick="window.location.href='{{url('editImage')}}'" >Edit</button> -->
             
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

                            @php
                                $id = $_GET['store_id'];
                                $result = DB::table('tbl_storelocator')->where('store_id', $id)->get();
                                foreach ($result as $row) {
                                   $name = $row->name;
                                   $address = $row->address;
                                   $city = $row->city;
                                   $pincode = $row->pincode;
                                   $contact_person = $row->contact_person;
                                   $mobile_no = $row->mobile_no;
                                   $lan = $row->lan;
                                   $lat = $row->lat;
                                   $map_link = $row->map_link;
                                   $status = $row->status;
                                }
                            @endphp

                            <div class="m-b-30">
                                <form action="{{url('edit_store')}}" enctype="multipart/form-data" method="post">
                                    @csrf
                                    <div class="row">
                                        <input type="hidden" name="hidden_id" value="{{$id}}">
                                    <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Name</label>

                                                     <input required type="text" class="form-control" name="ename" value="{{$name}}"> 
                                                      
                                                </div>     
                                            </div>

                                    <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Address</label>

                                                    <textarea cols="10" rows="4" class="form-control" name="eaddress" value="{{$address}}">{{$address}}</textarea>
                                                      
                                                </div>     
                                            </div>
                                </div>
                                

                                <div class="row">
                                    <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">City</label>

                                                     <input required type="text" class="form-control" name="ecity" value="{{$city}}"> 
                                                      
                                                </div>     
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Pincode</label>

                                                     <input required type="text" class="form-control" name="epincode" value="{{$pincode}}"> 
                                                      
                                                </div>     
                                            </div>

                                </div>

                                <div class="row">
                                     <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Contact Person</label>

                                                     <input required type="text" class="form-control" name="econtact_person" value="{{$contact_person}}"> 
                                                      
                                                </div>     
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Mobile Number</label>

                                                     <input required type="text" maxlength="10" minlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" class="form-control" name="emobile" value="{{$mobile_no}}"> 
                                                      
                                                </div>     
                                            </div>

                                </div>
                                <div class="row">
                                     <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Lan</label>

                                                     <input required type="text" class="form-control" name="elan" value="{{$lan}}"> 
                                                      
                                                </div>     
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Lat</label>

                                                     <input required type="text" class="form-control" name="elat" value="{{$lat}}"> 
                                                      
                                                </div>     
                                            </div>

                                </div>
                                <div class="row">
                                     <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Map Link</label>

                                                     <input required type="text" class="form-control" name="emap" value="{{$map_link}}"> 
                                                      
                                                </div>     
                                            </div>

                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Status</label>
                                                     <select class="form-control" name="estatus">
                                            <option value="Active" <?php if($status=="Active") echo 'selected="selected"'; ?> >Active</option>
                                            <option value="Inactive" <?php if($status=="Inactive") echo 'selected="selected"'; ?> >Inactive</option>
                                                </select>

                                                     <!-- <input required type="text" class="form-control" name="pstatus">  -->
                                                      
                                                </div>     
                                            </div>

                                </div>
                                <div class="clear"></div><br/>
                                    <div class="col-md-12" style="text-align:center">
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                            
                                             <button type="button" class="btn btn-success"  onclick="window.history.back();">Back</button>

                                            <!-- <button onclick="location.href='store_location'"  class="btn btn-danger">Back</button> -->
                                        </div>
                                    </div>
                                </form>
                            </div>

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
