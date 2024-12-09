@extends('layouts.header') @section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Edit Capacity</h4>

                    </div>
                    <div class="col-sm-6">
                            <div class="float-right d-none d-md-block">
                                    {{-- <div class="button-items">
                                            <button type="button" class="btn btn-primary waves-effect waves-light" onclick="window.location.href='{{url('add_video')}}'">Add Capacity</button>
                                     
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
                                $id = $_GET['CapacityID'];
                                $result = DB::table('capacitymaster')->where('CapacityID', $id)->get();
                                foreach ($result as $row) {
                                   $CapacityName = $row->CapacityName;
                                   $Description = $row->Description;
                                   $Status = $row->Status;
                                }
                            @endphp
                            <div class="m-b-30">
                                <form action="{{url('edit_capacity_new')}}" enctype="multipart/form-data" method="post">
                                    @csrf
                                    <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Capacity Name</label>
                                            <input required type="text" class="form-control" name="cname" value="{{$CapacityName}}"> 
                                        </div>
                                    </div>
                            <input type="hidden" name="hidden_id" value="{{$id}}">
                            <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Status</label>
                                            <select name="status" class="custom-select">
                                            <option value="Active" <?php if($Status=="Active") echo 'selected="selected"'; ?> >Active</option>
                                            <option value="Inactive" <?php if($Status=="Inactive") echo 'selected="selected"'; ?> >Inactive</option>
                                            </select>
                                            <!-- <input required type="text" class="form-control" name="status" value="{{$Status}}">  -->
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                            <input type="hidden" name="hidden_id" value="{{$id}}">
                            <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Description</label>
                                            <textarea cols="10" rows="4" class="form-control" name="description" value="{{$Description}}"><?php echo $Description; ?></textarea>
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

