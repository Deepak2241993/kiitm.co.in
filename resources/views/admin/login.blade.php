@php
 $settings=App\Models\Websitesetting::find(1);
@endphp
<!doctype html>
<html lang="en">

<head>
        
        <meta charset="utf-8" />
        <title>Kiitm || Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="rrwebdevelopment.in" name="kiitm" />
        <meta content="rrwebdevelopment.in" name="RR Web Developmeknt" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{url('/images/settings/logo.png')}}">

        <!-- Bootstrap Css -->
        <link href="{{url('/')}}/admin/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{url('/')}}/admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{url('/')}}/admin/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-primary bg-soft">
                                <div class="row">
                                    
                                    <div class="col-12 align-self-end">
                                        <img src="{{url('/images/settings/'.$settings->web_logo)}}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0"> 
                                
                                <div class="p-2">
                                    <form class="form-horizontal" id="loginform">
        
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" class="form-control" id="email" placeholder="Enter username">
                                        </div>
                
                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <div class="input-group auth-pass-inputgroup">
                                                <input type="password" class="form-control" id="loginpassword" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                                                <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                            </div>
                                      
                                        
                                        <div class="mt-3 d-grid">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit">Log In</button>
                                            <span class="text-danger" ></span>
                                        </div>
            
                                        
                                    </form>
                                </div>
            
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            
                            <div>
                                {{-- <p>Don't have an account ? <a href="auth-register.html" class="fw-medium text-primary"> Signup now </a> </p> --}}
                                <p>© <script>document.write(new Date().getFullYear())</script> Kiitm. Crafted with <i class="mdi mdi-heart text-danger"></i><a href="https://rrwebdevelopmnet.in"> by RR Web Development.</a></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end account-pages -->

        <!-- JAVASCRIPT -->
        <script src="{{url('/')}}/admin/assets/libs/jquery/jquery.min.js"></script>
        <script src="{{url('/')}}/admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{url('/')}}/admin/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{url('/')}}/admin/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{url('/')}}/admin/assets/libs/node-waves/waves.min.js"></script>
        
        <!-- App js -->
        <script src="{{url('/')}}/admin/assets/js/app.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            function login(){
                
            }

</script>
<script>
$("#loginform").validate({
    rules: {
    email: {
    required: true,
    maxlength: 35,
    email: true
    },
    password: {
    required: true,
    minlength: 8
    } 
    },
    messages: {
    email: {
    required: "Email Address",
    maxlength: "Your email not more then  35 characters long."
    },
    password: {
    required: "Please enter password",
    minlength: "Password shoud be atleast 8 digit",
    } 
    },
    submitHandler: function(form) {
    $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    $.ajax({
        method:"post",
        url:"{{url('/login')}}",
        data:{
            email: $('#email').val(),
            password: $('#loginpassword').val(),
            _token: "{{ csrf_token() }}"
        },           
     success: function(response){
        if(response['success']){
            window.location = "{{url('/admin/dashboard')}}";
        }
        else{
            $('.text-danger')=response(['message']);
        }
     }
  }); 

  }
    });
</script>
    </body>


</html>
