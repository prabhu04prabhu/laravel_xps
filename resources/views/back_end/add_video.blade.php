@extends('layouts.header') @section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Add Video Category</h4>

                    </div>
                    <div class="col-sm-6">
                            
                             
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

                            <div class="m-b-30">
                                <form action="{{url('add_video_category')}}" enctype="multipart/form-data" method="post">
                                  @csrf
                                    <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Category Name</label>
                                            <input required type="text" class="form-control" name="category_name">
                                            
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save</button>
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