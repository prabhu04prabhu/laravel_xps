<!DOCTYPE html>
<html lang="en">
 <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="utf-8" />
        <title>Muyal Mark Castor Oil - Pure Filtered Castor Oil</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="../assets/images/favicon.ico">
        <!-- App favicon -->
<link rel="shortcut icon" href="../assets/images/favicon.ico">
        

 <!-- App css -->
<link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
<link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
<link href="../assets/css/style.css" rel="stylesheet" type="text/css" />
  </head>
    <body class="pb-0">
           <div class="home-btn d-none d-sm-block">
            <a href="index.html" class="text-white"><i class="fas fa-home h2"></i></a>
        </div>
        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page account-page-full">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <a href="index.html" class="logo"><img src="../assets/images/logo-dark.png"  alt="logo"></a>
                    </div>
                    <div class="p-3">
                        <h4 class="font-18 m-b-5 text-center">Reset Password</h4>
                        @if (empty(session('status')))
                        <div class="alert alert-success m-t-30" role="alert">
                                Enter your Email and instructions will be sent to you!
                            </div>
                            @endif
                        @if (session('status'))
                        <div class="alert alert-success m-t-30" role="alert">
                                {{ session('status') }}
                        </div>
                        @endif
                        <form class="form-horizontal m-t-30" method="POST" action="{{ route('password.email') }}">
                                @csrf
                            <div class="form-group">
                                <label for="useremail">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group row m-t-20">
                                <div class="col-12 text-right">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="m-t-40 text-center">
                <p>Remember It ? <a href="{{ route('login') }}" class="font-500 text-primary"> Sign In here </a> </p>
                <p>© 2019 Veltrix. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
            </div>
        </div>

        <!-- App's Basic Js  -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/metisMenu.min.js"></script>
<script src="../assets/js/jquery.slimscroll.js"></script>
<script src="../assets/js/waves.min.js"></script>

 
<!-- App js-->
<script src="../assets/js/app.js"></script>


    
    </body>

</html>