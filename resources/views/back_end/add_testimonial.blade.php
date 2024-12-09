@extends('layouts.header') @section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Add Testimonial</h4>

                    </div>
                    <div class="col-sm-6">
    <div class="float-right d-none d-md-block">

            <div class="button-items">
                    <button type="button" class="btn btn-primary waves-effect waves-light" onclick="window.location.href='{{url('view_testimonial')}}'">View Testimonial</button>
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

                            <div class="m-b-30">
                             <form id="form" action="{{url('new_testimonial')}}" enctype="multipart/form-data" method="post">
                                    @csrf
                                    <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input required type="text" class="form-control" name="name"> 
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Designation</label>
                                            <input required type="text" class="form-control" name="designation"> 
                                        </div>
                                    </div>
                                </div>
                                

                                <div class="row">
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Company Name</label>

                                                     <input required type="text" class="form-control" name="company_name"> 
                                                      
                                                </div>     
                                            </div>

                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Choose Image</label>
                                                        <input required type="file"  class="form-control" id="upload"name="images[]" accept=".jpg,.png,.jpeg"> 
                                                    </div>
                                            <p id="error1" style="display:none; color:#FF0000;">Invalid File! File Format Must Be jpg, jpeg, png.</p>
                                            <p id="error2" style="display:none; color:#FF0000;">Maximum File Size Limit is 500kb.</p>
                                            <p style="color: red;">Note:<br>
                                                Accept Files: .png,.jpg,.jpeg<br>
                                                File size: 600px * 600px</p>
                                                   
                                                </div>

                                </div>
                                <div class="row">
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Content</label>

                                                    <textarea cols="10" rows="4" class="form-control" name="content"></textarea>
                                                      
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

                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
    </div>
</div>
<script type='text/javascript' src='assets/front_end/js/jquery.js'></script>
<script type="text/javascript">

$("#form").submit(function(event) {
    var form = this;
        event.preventDefault(); //Stop the submit for now

        var fileInput = $(this).find("input[type=file]")[0],
        file = fileInput.files && fileInput.files[0];
    if( file ) {
        var img = new Image();
        img.src = window.URL.createObjectURL( file );
       
        img.onload = function() {
            var width = img.naturalWidth,
                height = img.naturalHeight;
        if (width == 600 && height == 600) {
            form.submit();
        } else {
            alert("The image resolution is too low.");
        }
        }
    }
});
</script>
@endsection
