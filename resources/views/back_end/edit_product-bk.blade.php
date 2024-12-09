@extends('layouts.header') @section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Edit Product</h4>

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
                                $id = $_GET['ProductID'];
                                $result = DB::table('productmaster')->where('ProductID', $id)->get();
                                foreach ($result as $row) {
                                   $ProductCode = $row->ProductCode;
                                   $ProductModelNo = $row->ProductModelNo;
                                   $Warranty = $row->Warranty;
                                   $TaxID = $row->TaxID;
                                   $Description = $row->Description;
                                   $OnlinePricing = $row->OnlinePricing;
                                   $MRP = $row->MRP;
                                   $PurchasePrice = $row->PurchasePrice;
                                   $Status = $row->Status;
                                   $image = $row->image;
                                   $CategoryID = $row->CategoryID;
                                   $BrandID = $row->BrandID;
                                   $SubBrandID = $row->SubBrandID;
                                }
                            @endphp
                            <div class="m-b-30">
                                <form action="{{url('edit_products')}}" enctype="multipart/form-data" method="post">
                                    @csrf
                                    <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Choose Category</label>
                                            <select class="form-control" name="ca_id">
                                                @php
                                                    $cat_select = DB::table('categorymaster')->get();
                                                @endphp
                                                @foreach ($cat_select as $row_cat)
                                                <option value="{{$row_cat->CategoryID}}" @if ($CategoryID == $row_cat->CategoryID)
                                        selected
                                    @endif>{{$row_cat->CategoryName}}</option>
                                                @endforeach
                                                </select> 
                                        </div>
                                        <input type="hidden" name="hidden_id" value="{{$id}}">
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Choose Brand</label>
                                            <select class="form-control" name="br_id">
                                                @php
                                                    $brand = DB::table('brandmaster')->get();
                                                @endphp
                                                @foreach ($brand as $row_bran)
                                                <option value="{{$row_bran->BrandID}}" @if ($BrandID == $row_bran->BrandID)
                                        selected
                                    @endif>{{$row_bran->BrandName}}</option>
                                                @endforeach
                                                </select> 
                                        </div>
                                    </div>
                                    <input type="hidden" name="hidden_id" value="{{$id}}">
                                </div>
                                

                                <div class="row">
                                     <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Choose Sub Brand</label>
                                            <select class="form-control" name="sub_id">
                                                @php
                                                    $sub = DB::table('subbrand')->get();
                                                @endphp
                                                @foreach ($sub as $row_sub)
                                                <option value="{{$row_sub->SubBrandID}}" @if ($SubBrandID == $row_sub->SubBrandID)
                                        selected
                                    @endif>{{$row_sub->SubBrandName}}</option>
                                                @endforeach
                                                </select> 
                                        </div>
                                    </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Product Code</label>

                                                     <input required type="text" class="form-control" name="ecode"  value="{{$ProductCode}}"> 
                                                      
                                                </div>     
                                            </div>

                                </div>

                                <div class="row">
                                     <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Product Model No</label>

                                                     <input required type="text" class="form-control" name="emodel"  value="{{$ProductModelNo}}"> 
                                                      
                                                </div>     
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Warranty</label>

                                                     <input required type="text" class="form-control" name="ewarranty"  value="{{$Warranty}}"> 
                                                      
                                                </div>     
                                            </div>

                                </div>
                                <div class="row">
                                     <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">TaxID</label>

                                                     <input required type="text" class="form-control" name="etax"  value="{{$TaxID}}"> 
                                                      
                                                </div>     
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Online Pricing</label>

                                                     <input required type="text" class="form-control" name="eprice"  value="{{$OnlinePricing}}"> 
                                                      
                                                </div>     
                                            </div>
                                            <input type="hidden" name="hidden_id" value="{{$id}}">
                                </div>
                                <div class="row">
                                     <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">MRP</label>

                                                     <input required type="text" class="form-control" name="emrp"  value="{{$MRP}}"> 
                                                      
                                                </div>     
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Purchase Price</label>

                                                     <input required type="text" class="form-control" name="epurchase"  value="{{$PurchasePrice}}"> 
                                                      
                                                </div>     
                                            </div>

                                </div>
                                <div class="row">
                                     <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Status</label>
                                                    <select class="form-control" name="estatus">
                                            <option value="Active" <?php if($Status=="Active") echo 'selected="selected"'; ?> >Active</option>
                                            <option value="Inactive" <?php if($Status=="Inactive") echo 'selected="selected"'; ?> >Inactive</option>
                                                </select>


                                                     <!-- <input required type="text" class="form-control" name="estatus"  value="{{$Status}}"> --> 
                                                      
                                                </div>     
                                            </div>

                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Choose Image</label>
                                                        <input type="file" onchange="ValidateSize(this)" class="form-control" name="images[]" accept=".jpg,.png,.gif,.jpeg" value="{{$image}}" @if (!empty($image))
                                                           disabled 
                                                        @else
                                                            required
                                                        @endif>  
                                                    </div>
                                                    <a href="{{$image}}" target="_blank"><img src="{{$image}}" alt="" srcset="" width="42px" height="42px"></a>
                                                    @if (!empty($image))
                                                    <button type="button" onclick="window.location.href='delete_product_image&{{$id}}'">Delete</button>
                                                    @endif
                                                   
                                                </div>
                                                <input type="hidden" name="hidden_id" value="{{$id}}">
                                </div>
                                <div class="row">
                                     <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Description</label>

                                            <textarea cols="10" rows="4" class="form-control" name="edescription"  value="{{$Description}}"><?php echo $Description; ?></textarea>
                                            <!-- <label for="">Description</label>
                                            <input required type="text" class="form-control" name="bdescription"> --> 
                                        </div>
                                    </div> 

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

