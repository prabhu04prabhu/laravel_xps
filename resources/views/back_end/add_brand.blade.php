@extends('layouts.header') @section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Add Brand</h4>

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
                                <form action="{{url('new_brand')}}" enctype="multipart/form-data" method="post">
                                    @csrf
                                    <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Brand Name</label>
                                            <input required type="text" class="form-control" name="bname"> 
                                        </div>
                                    </div>
                                     <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Brand Status</label>
                                            <select class="form-control" name="bstatus">
                                                  <option value="Active">Active</option>
                                                  <option value="Inactive">Inactive</option>
                                                </select>

                                                    <!--  <input required type="text" class="form-control" name="bstatus">  -->
                                                      
                                                </div>     
                                            </div>

                                </div>
                                

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Description</label>

                                            <textarea cols="10" rows="4" class="form-control" name="bdescription"></textarea>
                                            <!-- <label for="">Description</label>
                                            <input required type="text" class="form-control" name="bdescription"> --> 
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
                                   
                                <h4 class="mt-0 header-title">Brand Details</h4>
                                <p class="text-muted m-b-30">
                                      
                                </p>

                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr style="text-align:center">
                                        <th>S.No</th>
                                        <th>Brand Name</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                      
                                    </tr>
                                    </thead>


                                    <tbody>
                                            @php
                                            $result = DB::table('brandmaster')->where('Brand_Status', '!=', '')->get();
 
                                        @endphp
                                         <?php $i = 1; ?>      
                                         @foreach ($result as $row)
                                   <tr style="text-align:center">  
                                       <td>{{$i}}</td>
                                       <td>{{$row->BrandName}}</td>
                                       <td>{{$row->Description}}</td>
                                       <!-- <td><textarea name="" id="" cols="40" rows="5" style="border: none" readonly>{{$row->Description}}</textarea></td> -->
                                       <td>
                                            <?php if($row->Brand_Status == 'Active'){?>
                                                  <span class="badge badge-pill badge-success">Active</span>
                                                  <!-- <a onclick="#" href="#" class="btn btn-success">Yes</a> -->
                                                <?php }else{ ?>
                                                  <span class="badge badge-pill badge-danger">Inctive</span>
                                               <!--  <a onclick="#" href="#" class="btn btn-danger">No</a> -->
                                                <?php } ?>
                                       </td>
                                       <!-- <td>{{$row->Brand_Status}}</td> -->
                                       <td><button type="submit" class="btn btn-warning" onclick="window.location.href='edit_brand?BrandID={{$row->BrandID}}'">Edit</button></td>
                                       <td><button type="submit" class="btn btn-danger" onclick="window.location.href='delete_brand&{{$row->BrandID}}'">Delete</button></td>
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

