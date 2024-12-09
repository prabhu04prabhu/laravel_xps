<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="utf-8" />
        <title>XPS Battery Store |  Exide Dealers | Amaron Dealers | AMS Batteries | Poweron Dealers | Base Dealers | UPS Dealers | Inverters Salem, Attur, Namakkal</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="assets/images/favicon.png">
        <!-- App favicon -->
<link rel="shortcut icon" href="assets/images/favicon.png">
        

 <!-- App css -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
<link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
<link href="assets/css/style.css" rel="stylesheet" type="text/css" />
  </head>
    <body class="pb-0">
        
        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page account-page-full">
            <div class="text-center">
                        <a href="{{'/'}}" class="logo"><img src="assets/front_end/images/logo.png"  alt="logo"></a>
                    </div><br/>
            <div class="card">
                <div class="card-body">  
                    <div class="p-3">
                        <h4 class="font-18 m-b-5 text-center">Welcome Back !</h4>
                       <!--  <p class="text-muted text-center">Sign in to <b>xpsbatterystore.com</b></p> -->

                        <form class="form-horizontal m-t-30" action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Username">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>

                            <div class="form-group">
                                <label for="userpassword">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" required autocomplete="current-password" placeholder="Enter Password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>

                            <div class="form-group row m-t-20">
                                <div class="col-sm-6">
                                    <div class="login_submit">
                                    <div class="remember_me">
                                        <input type="checkbox" tabindex="3" value="remember-me" id="remember_me">&nbsp;&nbsp;Remember Me
                                    </div>
                                </div>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                                </div>
                            </div>

                            {{-- <div class="form-group m-t-10 mb-0 row">
                                <div class="col-12 m-t-20">
                                        @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                    @endif
                                </div>
                            </div> --}}
                        </form>
                    </div>

                </div>
            </div>
            <div class="m-t-40 text-center">
                {{-- <p>Don't have an account ? <a href="pages-register-2.html" class="font-500 text-primary"> Signup now </a> </p> --}}
                <p>© <?php echo date('Y'); ?> XPS Battery Store.</p>
            </div>
        </div>
        <!-- end wrapper-page -->
        <!-- App's Basic Js  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/metisMenu.min.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/waves.min.js"></script>

 
<!-- App js-->
<script src="assets/js/app.js"></script>

<script type="text/javascript">


//remember me functionality. Note: saving in local storage is not a good practice
$(function() {

    if (localStorage.chkbx && localStorage.chkbx != '') {
        $('#remember_me').attr('checked', 'checked');
        $('#email').val(localStorage.usrname);
        $('#password').val(localStorage.pass);
    } else {
        $('#remember').removeAttr('checked');
        $('#email').val('');
        $('#password').val('');
    }

    $('#remember_me').click(function() {

        if ($('#remember_me').is(':checked')) {
            // save username and password
            localStorage.usrname = $('#email').val();
            localStorage.pass = $('#password').val();
            localStorage.chkbx = $('#remember_me').val();
        } else {
            localStorage.usrname = '';
            localStorage.pass = '';
            localStorage.chkbx = '';
        }
    });
});
</script>
    
    </body>
</html>