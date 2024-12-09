@extends('layouts.header')
@section('content')
    <div class="content-page">  
        <div class="content">
            <div class="container-fluid">
               <div class="page-title-box">
<div class="row align-items-center">
     <div class="col-sm-6">
<h4 class="page-title">Detailed Customer Info</h4>

</div>
      
</div>
</div>
<!-- end row -->
             
<div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    
                                <form class="" action="">
                                    @csrf

                                    @php
                                        $smtp = DB::table('smtp')->get();
                                        
                                        foreach($smtp as $row){
                                            $host = $row->host;
                                            $user_name = $row->user_name;
                                            $password = $row->password;
                                            $smtp_secure = $row->smtp_secure;
                                            $port = $row->port;
                                            $smtp_id = $row->smtp_id;
                                        }

                                
                                    @endphp
                                        <div class="form-group">
                                            <label>Host</label>
                                        <input type="text" class="form-control" required placeholder="Enter Host Name" name="host" value="{{$host}}"/>
                                        </div>

                                        <div class="form-group">
                                            <label>User Name</label>
                                            <input type="email" class="form-control" required
                                        parsley-type="email" placeholder="Enter a valid e-mail" name="user_name" value="{{$user_name}}"/>
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                        <input type="password" class="form-control" required placeholder="Enter Password" name="password" value="{{$password}}" @if (!empty($password))
                                            readonly
                                        @endif/>
                                        </div>

                                        <div class="form-group">
                                            <label>SMTP Secure</label>
                                        <input type="text" class="form-control" required placeholder="Enter SMTP Secure" name="smtp_secure" value="{{$smtp_secure}}"/>
                                        </div>

                                        <div class="form-group">
                                            <label>Port</label>
                                        <input type="text" class="form-control" required placeholder="Enter Port Number" name="port" value="{{$port}}"/>
                                        </div>
    
                                       
                                       
                                        <div class="form-group">
                                            <div>
                                               
                                                <button type="submit" class="btn btn-primary waves-effect waves-light" @if (!empty($smtp_id))
                                                    disabled
                                                @endif>
                                                    Submit
                                                </button>
                                            </form>
                                                <a href="#" class="btn btn-success" data-toggle="modal" data-target="#bs-example-modal-lg{{$smtp_id}}" @if (empty($smtp_id))
                                                    disabled
                                                @endif>Edit</a>
                                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="bs-example-modal-lg{{$smtp_id}}">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title mt-0" id="myLargeModalLabel">Edit Information</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">

                                                    <form action="{{'smtp_edit'}}" method="post">
                                                        @csrf
                                                            <div class="form-group">
                                                                    <label>Host</label>
                                                                <input type="text" class="form-control" required placeholder="Enter Host Name" name="host" value="{{$host}}"/>
                                                                </div>
                        
                                                                <div class="form-group">
                                                                    <label>User Name</label>
                                                                    <input type="email" class="form-control" required
                                                                parsley-type="email" placeholder="Enter a valid e-mail" name="user_name" value="{{$user_name}}"/>
                                                                </div>
                        
                                                                <div class="form-group">
                                                                    <label>Password</label>
                                                                <input type="password" class="form-control" required placeholder="Enter Password" name="password" 
                                                                </div>
                        
                                                                <div class="form-group">
                                                                    <label>SMTP Secure</label>
                                                                <input type="text" class="form-control" required placeholder="Enter SMTP Secure" name="smtp_secure" value="{{$smtp_secure}}"/>
                                                                </div>
                        
                                                                <div class="form-group">
                                                                    <label>Port</label>
                                                                <input type="text" class="form-control" required placeholder="Enter Port Number" name="port" value="{{$port}}"/>
                                                                </div>

                                                            <input type="hidden" name="hiiden_id" value="{{$smtp_id}}">
                                                                <div class="form-group">
                                                                        <div>
                                                                            <button type="submit" class="btn btn-success waves-effect waves-light">
                                                                                Update
                                                                            </button>
                                                                        </div>
                                                    </div>

                                                </form>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
                                                
                                            </div>
                                        </div>
                                  
    
                                </div>
                            </div>
                        </div> <!-- end col -->
    
                        
                    </div> <!-- end row -->              
            </div> 
        </div> 
    </div> 
@endsection