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
                                <form action="{{url('edit_category')}}" enctype="multipart/form-data" method="post">
                                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                    <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            @php
                                                $id = $_GET['id'];
                                                $cat_name = DB::table('gallery_category')->where('cat_id', $id)->get();
                                                foreach ($cat_name as $row) {
                                                    $name = $row->name;
                                                }
                                            @endphp
                                            <label for="">Category Name</label>
                                            <input required type="text" class="form-control" name="category_name" value="<?php echo $name; ?>">

                                            <input type="hidden" name="cat_id_hidden" value="<?php echo $id; ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Choose Image</label>
                                                <input  type="file" class="form-control" name="images[]" multiple>
                                            </div>
                                        </div>

                                   
                                </div>
                                    <div class="col-md-12" style="text-align:center">
                                     
                                            <button type="submit" class="btn btn-primary">Submit</button>

                                            <button type="button" class="btn btn-success"  onclick="window.history.back();">Back</button>
                                         
                                       
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