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
                                $id = $_GET['SubBrandID'];
                                $result = DB::table('subbrand')->where('SubBrandID', $id)->get();
                                foreach ($result as $row) {
                                   $SubBrandName = $row->SubBrandName;
                                   $Description = $row->Description;
                                   $Status = $row->Status;
                                   $BrandID = $row->BrandID;
                                }
                            @endphp
                            <div class="m-b-30">
                                <form action="{{url('edit_subbrand')}}" enctype="multipart/form-data" method="post">
                                    @csrf
                                    <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Choose Brand</label>
                                            <select class="form-control" name="BrandID">
                                                @php
                                                    $cat_select = DB::table('brandmaster')->get();
                                                @endphp
                                                @foreach ($cat_select as $row_brand)
                                                <option value="{{$row_brand->BrandID}}" @if ($BrandID == $row_brand->BrandID)
                                        selected
                                    @endif>{{$row_brand->BrandName}}</option>
                                                @endforeach
                                                </select> 
                                        </div>
                                    </div>
                            <input type="hidden" name="hidden_id" value="{{$id}}">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Sub Brand Name</label>
                                            <input required type="text" class="form-control" name="sname" value="{{$SubBrandName}}"> 
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Description</label>

                                            <textarea cols="10" rows="4" class="form-control" name="sdescription" value="{{$Description}}"><?php echo $Description; ?></textarea>
                                            <!-- <label for="">Description</label>
                                            <input required type="text" class="form-control" name="sdescription" value="{{$Description}}"> --> 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Brand Status</label>
                                            <select class="form-control" name="sstatus">
                                            <option value="Active" <?php if($Status=="Active") echo 'selected="selected"'; ?> >Active</option>
                                            <option value="Inactive" <?php if($Status=="Inactive") echo 'selected="selected"'; ?> >Inactive</option>
                                                </select>
                                            <!-- <input required type="text" class="form-control" name="sstatus" value="{{$Status}}"> --> 
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

