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
<h4 class="page-title">Enquiry Details</h4>

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

                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                   <thead>
                            <tr style="text-align:center">
                                <th>S.No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile No</th>
                                <th>Message</th>
                                <th>Created Date</th>
                                <th>Delete</th>
                            </tr>
                            </thead>


                            <tbody>
                                    @php
                                    $info = DB::table('send_enquiry')->orderby('id', 'desc')->get();

                                    foreach ($info as $val) {
                                       $reg = $val->id;
                                    }
                                    
                                @endphp
                                 <?php $i = 1; ?>
                                   @foreach ($info as $row)
                                  
                           <tr style="text-align:center">
                            
                           <td>{{$i}}</td> 
                               <td>{{$row->name}}</td>  
                               <td>{{$row->email}}</td> 
                               <td>{{$row->mobile}}</td> 
                               <td>{{$row->message}}</td> 
                               <td>{{$row->created_date}}</td> 
                               
                            <td><button type="submit" class="btn btn-danger" onclick="window.location.href='delete_enquiry&{{$row->id}}'">Delete</button></td>
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
        