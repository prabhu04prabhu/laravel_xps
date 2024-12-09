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
<h4 class="page-title">Delivered Orders</h4>

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

                                <table id="datatable1" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr style="text-align:center">
                                        <th>S.No</th>                                        
                                        <th>Brand Name</th>
                                        <th>Model No</th>
                                        <th>Customer Name </th>
                                        <th>Mobile No</th>
                                        <th>Address</th>
                                        <th>Quantity </th>
                                        <th>Amount</th>
                                        <th>Scrap Value</th>
                                        <th>Status</th>
                                      
                                    </tr>
                                    </thead>
                                    <tbody>
                                  <?php
                                   $result = DB::table('ordertrans')
                                  ->join('ordermaster', 'ordermaster.OrderID', '=', 'ordertrans.OrderID')
                                  ->join('productmaster', 'productmaster.ProductID', '=', 'ordertrans.ProductID')
                                  ->join('brandmaster', 'brandmaster.BrandID', '=', 'productmaster.BrandID')
                                  ->where('ordertrans.status','Delivered')->orderBy('OrderTransID', 'desc')->get();
                                  ?>
                                         <?php $i = 1; ?>      
                                         @foreach ($result as $row_product)
                                   <tr style="text-align:center">  
                                       <td>{{$i}}</td>
                                       <td>{{$row_product->BrandName}}</td>
                                       <td>{{$row_product->ProductModelNo}}</td>
                                       <td>{{$row_product->CustomerName}}</td>
                                       <td>{{$row_product->MobileNo}}</td>
                                       <td>{{$row_product->Address}}</td>
                                       <td>{{$row_product->Quantity}}</td>
                                       <td>{{$row_product->Subtotal}}</td>
                                       <td>{{$row_product->ScrabAmount}}</td>
                                       <td><span class="badge badge-pill badge-success">{{$row_product->Status}}</span></td>
                                       
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
        
