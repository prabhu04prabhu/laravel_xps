@extends('layouts.header') @section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Edit Appliance</h4>

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
                                $id = $_GET['app_id'];
                                $result = DB::table('tbl_appliance')->where('app_id',$id)->get();                           
                                foreach ($result as $row) {
                                   $name = $row->name;
                                   $per_unit = $row->per_unit;
                                }
                            @endphp
                            <div class="m-b-30">
                                <form action="{{url('edit_appliances')}}" enctype="multipart/form-data" method="post">
                                    @csrf
                                    <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input required type="text" class="form-control" name="appname" value="{{$name}}">
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Per Unit(Hours)</label>
                                            <input required type="text" class="form-control" name="app_per" value="{{$per_unit}}"> 
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

