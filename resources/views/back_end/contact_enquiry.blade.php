@extends('layouts.header')
@section('content')
<div class="content-page">  
        <div class="content">
            <div class="container-fluid">
               <div class="page-title-box">
<div class="row align-items-center">
     <div class="col-sm-6">
<h4 class="page-title"> Contact Enquiry</h4>

</div>                          
      
</div>
</div>
<!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                            @if (\Session::has('success2'))
                            <div class="alert alert-success">

                                {!! \Session::get('success2') !!}

                            </div>
                            @endif
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                            <thead>
                            <tr style="text-align:center">
                                <th>S.No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile No</th>
                                <th>Subject</th>
                                <th>Message</th>
                                {{-- <th>Delete</th> --}}
                            </tr>
                            </thead>


                            <tbody>
                                    @php
                                    $info = DB::table('contact_enquiry')->get();

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
                               <td>{{$row->phone_no}}</td>  
                               <td>{{$row->subject}}</td>
                               <!-- <td>{{$row->message}}</td> -->
                               <td><textarea name="" id="" cols="30" rows="3" style="border: none" readonly>{{$row->message}}</textarea></td> 
                           
                            </td>
                               {{-- <td><button class="btn btn-danger" onclick="window.location.href='delete_info&{{$row->reg_id}}'"><i class="fa fa-trash" aria-hidden="true"></i></button></td>                             --}}
                           </tr>
                           <?php $i++; ?>
                           @endforeach
                            </tbody>

                            
                        </table>

                       
                    </div>

                    
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->      
</div> 
</div> 
</div> 
    
@endsection
{{-- <style>
.modal-lg{
    max-width: 95% !important;
}
</style> --}}
        