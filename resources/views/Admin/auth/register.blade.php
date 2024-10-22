
<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Login | Dason - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="backend/assets/images/favicon.ico">

        <!-- preloader css -->
        <link rel="stylesheet" href="backend/assets/css/preloader.min.css" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="backend/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="backend/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="backend/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-topbar="dark">

    <!-- <body data-layout="horizontal"> -->
        <div class="auth-page">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="login-page">
                        <div class="col-xxl-3 col-lg-4 col-md-5">
                            <div class="auth-full-page-content d-flex p-sm-5 p-4">
                                <div class="w-100">
                                    <div class="d-flex flex-column h-100">
                                        <div class="auth-content my-auto">
                                            <div class="mb-4 mb-md-5 text-center">
                                                <a href="index.html" class="d-block auth-logo">
                                                    <img src="frontend/assets/img/g-logo.png" style="background-color: rgba(7, 58, 135, 0.78)" alt="" height="28">
                                                </a>
                                            </div>
                                            <div class="text-center">
                                                <h5 class="mb-0">لوحة التحكم</h5>
                                                <p class="text-muted mt-2">قم بستجيل الدخول الي لوحة التحكم</p>
                                            </div>
                                            @if (session()->has('success')) 
                                                <div class="alert-success">
                                                    {{session()->get('success')}}
                                                </div>
                                            @endif
                                            @if (session()->has('error')) 
                                            <div class="alert-danger">
                                                {{session()->get('error')}}
                                            </div>
                                            @endif
                                            <form class="mt-4 pt-2" method="POST" action="{{route('admin-register')}}">
                                                @csrf

                                                <div class="form-floating form-floating-custom mb-4">
                                                    <input type="text" name="fullname" class="form-control" id="input-username" placeholder="Enter User Name">
                                                    <label for="input-username">الاسم</label>
                                                    <div class="form-floating-icon">
                                                    <i data-feather="users"></i>
                                                    </div>
                                                    @if ($errors->has('fullname')) 
                                                        <span class="text-danger">
                                                            {{ $errors->first('fullname') }} </span>
                                                    @endif
                                                </div>
                                                <div class="form-floating form-floating-custom mb-4">
                                                    <input type="text" name="email" class="form-control" id="input-email" placeholder="Enter User Name">
                                                    <label for="input-email">البريد الالكتروني</label>
                                                    <div class="form-floating-icon">
                                                    <i data-feather="email"></i>
                                                    </div>
                                                    @if ($errors->has('username')) 
                                                    <span class="text-danger">
                                                        {{ $errors->first('username') }} </span>
                                                @endif
                                                </div>

                                                <div class="form-floating form-floating-custom mb-4 auth-pass-inputgroup">
                                                    <input type="password" class="form-control pe-5" id="password-input" name="password" placeholder="Enter Password">
                                                    
                                                    <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0" id="password-addon">
                                                        <i class="mdi mdi-eye-outline font-size-18 text-muted"></i>
                                                    </button>
                                                    <label for="input-password">الرقم السري</label>
                                                    <div class="form-floating-icon">
                                                        <i data-feather="lock"></i>
                                                    </div>
                                                    @if ($errors->has('password')) 
                                                    <span class="text-danger">
                                                        {{ $errors->first('password') }} </span>
                                                @endif
                                                </div>
                                                <div class="mb-3">
                                                    <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">تسجيل الدخول</button>
                                                </div>
                                            </form>
                                            <div class="mt-4 mt-md-5 text-center">
                                                <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Graffiti Resin   . Crafted with <i class="mdi mdi-heart text-danger"></i> by Youssef Ahmed</p>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                            <!-- end auth full page content -->
                        </div>
                        <!-- end col -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container fluid -->
        </div>

        
        

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="backend/assets/libs/jquery/jquery.min.js"></script>
        <script src="backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="backend/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="backend/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="backend/assets/libs/node-waves/waves.min.js"></script>
        <script src="backend/assets/libs/feather-icons/feather.min.js"></script>
        <!-- pace js -->
        <script src="backend/assets/libs/pace-js/pace.min.js"></script>

        <script src="backend/assets/js/pages/pass-addon.init.js"></script>

        <script src="backend/assets/js/pages/feather-icon.init.js"></script>

    </body>

</html>