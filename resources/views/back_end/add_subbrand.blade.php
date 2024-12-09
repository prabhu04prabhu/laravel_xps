@extends('layouts.header') @section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Add Sub Brand</h4>

                    </div>
                    <div class="col-sm-6">
                            <div class="float-right d-none d-md-block">
                        
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

                            <div class="m-b-30">
                                <form action="{{url('new_subbrand')}}" enctype="multipart/form-data" method="post">
                                    @csrf
                                    <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Choose Brand</label>
                                            <select class="form-control" name="BrandID">
                                                @php
                                                    $cat_select = DB::table('brandmaster')->where('Brand_Status', '=', 'Active')->get();
                                                @endphp
                                                @foreach ($cat_select as $row)
                                                <option value="{{$row->BrandID}}">{{$row->BrandName}}</option>
                                                @endforeach
                                                </select> 
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Sub Brand Name</label>
                                            <input required type="text" class="form-control" name="sname">
                                        </div>
                                    </div>
                                </div>
                                

                                <div class="row">
                                     <div class="col-md-6">
                                        <div class="form-group">
                                           <!-- <label for="">Description</label>
                                            <input required type="text" class="form-control" name="sdescription"> -->
                                            <label for="">Description</label>

                                            <textarea cols="10" rows="4" class="form-control" name="sdescription"></textarea>
                                        </div>
                                    </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Sub Brand Status</label>
                                                    <select class="form-control" name="sstatus">
                                                  <option value="Active">Active</option>
                                                  <option value="Inactive">Inactive</option>
                                                </select>

                                                     <!-- <input required type="text" class="form-control" name="sstatus"> --> 
                                                      
                                                </div>     
                                            </div>

                                </div>
                                    <div class="col-md-12" style="text-align:center">
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>


                    <div class="card">
                            <div class="card-body">
                                   
                                <h4 class="mt-0 header-title">Sub Brand Details</h4>
                                <p class="text-muted m-b-30">
                                </p>

                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr style="text-align:center">
                                        <th>S.No</th>
                                        <th>SubBrand Name</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                      
                                    </tr>
                                    </thead>


                                    <tbody>
                                            @php
                                            $result = DB::table('subbrand')->where('Status', '!=', '')->get();
 
                                        @endphp
                                         <?php $i = 1; ?>      
                                         @foreach ($result as $row)
                                   <tr style="text-align:center">  
                                       <td>{{$i}}</td>
                                       <td>{{$row->SubBrandName}}</td>
                                       <td>{{$row->Description}}</td>
                                      <!--  <td><textarea name="" id="" cols="40" rows="5" style="border: none" readonly>{{$row->Description}}</textarea></td> -->
                                      <td>
                                            <?php if($row->Status == 'Active'){?>
                                                  <span class="badge badge-pill badge-success">Active</span>
                                                  <!-- <a onclick="#" href="#" class="btn btn-success">Yes</a> -->
                                                <?php }else{ ?>
                                                  <span class="badge badge-pill badge-danger">Inctive</span>
                                               <!--  <a onclick="#" href="#" class="btn btn-danger">No</a> -->
                                                <?php } ?>
                                       </td>
                                       <!-- <td>{{$row->Status}}</td> -->
                                       <td><button type="submit" class="btn btn-warning" onclick="window.location.href='edit_subbrand?SubBrandID={{$row->SubBrandID}}'">Edit</button></td>
                                       <td><button type="submit" class="btn btn-danger" onclick="window.location.href='delete_subbrand&{{$row->SubBrandID}}'">Delete</button></td>
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
