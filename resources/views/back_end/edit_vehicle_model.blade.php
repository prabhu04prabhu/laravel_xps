@extends('layouts.header') @section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Edit Category</h4>

                    </div>
                    <div class="col-sm-6">
                            <div class="float-right d-none d-md-block">
                        
                                
                                    {{-- <div class="button-items">
                                            <button type="button" class="btn btn-primary waves-effect waves-light" onclick="window.location.href='{{url('add_video')}}'">Add Category</button>
                                     
                                </div> --}}
                                 
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
                                $id = $_GET['m_id'];
                                $result = DB::table('tbl_vehiclemodel')
                                            ->join('tbl_vehiclebrand', 'tbl_vehiclebrand.v_id', '=', 'tbl_vehiclemodel.v_id') 
                                            ->where('tbl_vehiclemodel.m_id',$id)->get();                           
                                foreach ($result as $row) {
                                   $brand_name = $row->brand_name;
                                   $model_name = $row->model_name;
                                   $status = $row->m_status;
                                }
                            @endphp
                            <div class="m-b-30">
                                <form action="{{url('edit_vehiclemodel')}}" enctype="multipart/form-data" method="post">
                                    @csrf
                                    <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Brand Name</label>
                                            <select class="form-control" name="v_id">
                                                @php
                                                    $brand_select = DB::table('tbl_vehiclebrand')->where('status', '=', 'Active')->get();
                                                @endphp
                                                @foreach ($brand_select as $row)
                                                <option value="{{$row->v_id}}">{{$row->brand_name}}</option>
                                                @endforeach
                                                </select> 
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Model Name</label>
                                            <input required type="text" class="form-control" name="mname" value="{{$model_name}}"> 
                                        </div>
                                    </div>
                            <input type="hidden" name="hidden_id" value="{{$id}}">
                                        
                                </div>
                                <div class="row">

                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Status</label>
                                            <select class="form-control" name="mstatus">
                                            <option value="Active" <?php if($status=="Active") echo 'selected="selected"'; ?> >Active</option>
                                            <option value="Inactive" <?php if($status=="Inactive") echo 'selected="selected"'; ?> >Inactive</option>
                                                </select>
                                           
                                        </div>
                                    </div>

                            <input type="hidden" name="hidden_id" value="{{$id}}">
                                </div>
                                
                                    <div class="col-md-12" style="text-align:center">
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-primary">Save</button>

                                            <button type="button" class="btn btn-success"  onclick="window.history.back();">Back</button>
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

