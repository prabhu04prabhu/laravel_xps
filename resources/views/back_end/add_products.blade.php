@extends('layouts.header') @section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Add Products</h4>

                    </div>
                    <div class="col-sm-6">
    <div class="float-right d-none d-md-block">

            <div class="button-items">
                    <button type="button" class="btn btn-primary waves-effect waves-light" onclick="window.location.href='{{url('product_details')}}'">View Product Details</button>
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
                                <form id="form" action="{{url('new_products')}}" enctype="multipart/form-data" method="post">
                                    @csrf
                                    <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Choose Category</label>
                                            <select class="form-control" name="c_id">
                                                @php
                                                    $cat_select = DB::table('categorymaster')->where('Status', '=', 'Active')->get();
                                                @endphp
                                                @foreach ($cat_select as $row)
                                                <option value="{{$row->CategoryID}}">{{$row->CategoryName}}</option>
                                                @endforeach
                                                </select> 
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Choose Brand</label>
                                            <select class="form-control" name="b_id" id="b_id" onchange="getsubbrand()">
                                                @php
                                                    $brand = DB::table('brandmaster')->where('Brand_Status', '=', 'Active')->get();
                                                @endphp
                                                @foreach ($brand as $row)
                                                <option value="{{$row->BrandID}}">{{$row->BrandName}}</option>
                                                @endforeach
                                                </select> 
                                        </div>
                                    </div>
                                     <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Choose Sub Brand</label>
                                            <select class="form-control" name="s_id" id="s_id">
                                                <!-- @php
                                                    $sub = DB::table('subbrand')->where('Status', '=', 'Active')->get();
                                                @endphp
                                                @foreach ($sub as $row)
                                                <option value="{{$row->SubBrandID}}">{{$row->SubBrandName}}</option>
                                                @endforeach -->
                                                </select> 
                                        </div>
                                    </div>
                                </div>
                                

                                <div class="row">
                                     <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Product Code</label>

                                                     <input required type="text" class="form-control" name="code"> 
                                                      
                                                </div>     
                                            </div>
                                    <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Product Model No</label>

                                                     <input required type="text" class="form-control" name="model"> 
                                                      
                                                </div>     
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Warranty</label>

                                                     <input required type="text" class="form-control" name="warranty"> 
                                                      
                                                </div>     
                                            </div>

                                </div>
                                <div class="row">
                                     <div class="col-md-6" style="display: none;">
                                                <div class="form-group">
                                                    <label for="">TaxID</label>

                                                     <input  type="text" class="form-control" name="tax"> 
                                                      
                                                </div>     
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Purchase Price</label>

                                                     <input required type="text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="5" class="form-control" name="purchase"> 
                                                      
                                                </div>     
                                            </div>
                                            
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">MRP</label>

                                                     <input required type="text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="5" class="form-control" name="mrp" id="mrp_price"> 
                                                      
                                                </div>     
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Pricing Discount in %</label>

                                                     <input required type="text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,''); " onchange="fetch_online_price()" maxlength="5" class="form-control" name="discount_percentage" id="discount_percentage"> 
                                                      
                                                </div>     
                                            </div>
                                            

                                            

                                </div>
                                
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Online Pricing</label>

                                                <input required type="text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="5" class="form-control" name="price" id="online_price"> 
                                                
                                        </div>     
                                    </div>
                                     <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Status</label>
                                                    <select class="form-control" name="pstatus">
                                                  <option value="Active">Active</option>
                                                  <option value="Inactive">Inactive</option>
                                                </select>

                                                     <!-- <input required type="text" class="form-control" name="pstatus">  -->
                                                      
                                                </div>     
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Avaiability</label>
                                                    <select class="form-control" name="pavailable">
                                                  <option value="Yes">Yes</option>
                                                  <option value="No">No</option>
                                                </select>

                                                     <!-- <input required type="text" class="form-control" name="pstatus">  -->
                                                      
                                                </div>     
                                            </div>
                                           

                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Features</label>
                                            <select class="form-control" name="pfeature">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>

                                                <!-- <input required type="text" class="form-control" name="pstatus">  -->
                                                
                                        </div>     
                                    </div>
                                    <div class="col-md-4">
                                     <div class="form-group">
                                            <label for="">Choose Capacity</label>
                                            <select class="form-control" name="capacity_id">
                                                @php
                                                    $cat_select = DB::table('capacitymaster')->where('Status', '=', 'Active')->get();
                                                @endphp
                                                @foreach ($cat_select as $row)
                                                <option value="{{$row->CapacityID}}">{{$row->CapacityName}}</option>
                                                @endforeach
                                                </select> 
                                        </div>    
                                      </div>
                                      <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Scrab Amount</label>

                                                     <input required type="text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="5" class="form-control" name="scrab_amount"> 
                                                      
                                                </div>     
                                            </div>

                                     <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">Choose Image</label>
                                                        <input required type="file" onchange="ValidateSize(this)" class="form-control" name="images" accept=".jpg,.png,.gif,.jpeg" multiple> 
                                                    </div>
                                                    <p style="color: red;">Note: Accept Files: .png,.jpg,.jpeg<br/>
                                                File size: 800px * 800px</p>
                                                   
                                                </div>
                                           

                                </div>
                               <br/>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Description</label>
                                          <div>

                                                <textarea class="summernote" name="pdescription"></textarea>                                                

                                            </div>
                                        
                            
                                        <!-- <form action="" method="post">
                                            <div>
                                                <textarea id="example" nam style="height:300px;width:600px;"></textarea>

                                            </div>
                                        </form> -->
                                </div>

                                <div class="col-md-6">
                                        <label for="">Specifications</label>
                                            <div>
                                                <textarea class="summernote" name="pspecifications"></textarea>

                                            </div>

                                </div>
                                </div>
                                <div class="clear"></div><br/>
                                    <div class="col-md-12" style="text-align:center">
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-primary">Save</button>

                                            <!-- <button onclick="location.href='add_products'"  class="btn btn-danger">Back</button> -->
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

$(document).ready(function() {
    getsubbrand();
});

// $("#form").submit(function(event) {
//     var form = this;
//         event.preventDefault(); //Stop the submit for now

//         var fileInput = $(this).find("input[type=file]")[0],
//         file = fileInput.files && fileInput.files[0];
//     if( file ) {
//         var img = new Image();
//         img.src = window.URL.createObjectURL( file );
       
//         img.onload = function() {
//             var width = img.naturalWidth,
//                 height = img.naturalHeight;
//         if (width == 800 && height == 800) {
//             form.submit();
//         } else {
//             alert("The image resolution is too low.");
//         }
//         }
//     }
// });

function getsubbrand(){
        $.ajax({
            url: '{{ url('get-subbrand-by-brand') }}',
            method: "post",
            data: {id: document.getElementById("b_id").value,
            _token: '{{ csrf_token() }}'},
            dataType: "json",
            success: function (response) { 
              $("#s_id").empty();
              var obj = response.data;
              for (var index = 0; index < obj.length; index++) {
                $("#s_id").append('<option value=' + obj[index].SubBrandID + ' >' + obj[index].SubBrandName + '</option>');
              }
            }
        });
     
    }
    function fetch_online_price() {
        var mrp = $('#mrp_price').val();
        var discount = $('#discount_percentage').val();
        var price = mrp / 100;
        price = price * discount;
        $('#online_price').val(mrp - price);
    }
</script>
@endsection
