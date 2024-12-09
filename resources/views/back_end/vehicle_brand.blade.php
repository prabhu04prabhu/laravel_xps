@extends('layouts.header')
@section('content')
<div class="content-page">  
        <div class="content">
            <div class="container-fluid">
<!--                <div class="page-title-box">
<div class="row align-items-center">
     <div class="col-sm-6">
<h4 class="page-title"> Product Details</h4>

</div>                          
      
</div>
</div> -->
       <div class="page-title-box">
<div class="row align-items-center">
<div class="col-sm-6">
<h4 class="page-title">Manage Vehicle Brand</h4>

</div>
<div class="col-sm-6">
    <div class="float-right d-none d-md-block">

            <div class="button-items">
                    <button type="button" class="btn btn-primary waves-effect waves-light" onclick="window.location.href='{{url('add_vehicle_brand')}}'">Add Vehicle</button>
                   <!--  <button type="button" class="btn btn-secondary waves-effect" onclick="window.location.href='{{url('editImage')}}'" >Edit</button> -->
             
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

                             @if (\Session::has('success2'))
                            <div class="alert alert-danger">

                                {!! \Session::get('success2') !!}

                            </div>
                            @endif

                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr style="text-align:center">
                                        <th>S.No</th>
                                        <th>Category Name</th>
                                        <th>Brand Name</th>
                                        <th>Image</th>                                       
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                      
                                    </tr>
                                    </thead>


                                    <tbody>
                                            @php
                                            
                                            $result = DB::table('tbl_vehiclebrand')
                                            ->join('categorymaster', 'categorymaster.CategoryID', '=', 'tbl_vehiclebrand.cat_id')                                            
                                            ->get();
 
                                        @endphp
                                         <?php $i = 1; ?>      
                                         @foreach ($result as $row_product)
                                   <tr style="text-align:center">  
                                       <td>{{$i}}</td>
                                       <td>{{$row_product->CategoryName}}</td>
                                       <td>{{$row_product->brand_name}}</td>
                                       <td><a href="{{$row_product->images}}" target="_blank"><img src="{{$row_product->images}}" alt="" srcset="" width="42px" height="42px"></a></td>
                                       <td>
                                        <?php if($row_product->status == 'Active'){?>
                                                <span class="badge badge-pill badge-success">Active</span>
                                                  <!-- <a onclick="#" href="#" class="btn btn-success">Active</a> -->
                                                <?php }else{ ?>
                                                  <span class="badge badge-pill badge-danger">Inactive</span>
                                                <!-- <a onclick="#" href="#" class="btn btn-danger">Inactive</a> -->
                                                <?php } ?></td>

                            
                                       <td><button type="submit" class="btn btn-warning" onclick="window.location.href='edit_vehicle_brand?v_id={{$row_product->v_id}}'">Edit</button></td>
                                       <td><button type="submit" class="btn btn-danger" onclick="window.location.href='delete_vehiclebrand&{{$row_product->v_id}}'">Delete</button></td>
                                       <?php $i++; ?>
                                   </tr>
                                   @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
</div> 
</div> 
    
@endsection
{{-- <style>
.modal-lg{
    max-width: 95% !important;
}
</style> --}}
        