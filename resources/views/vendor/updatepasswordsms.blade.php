<!DOCTYPE html>
<html lang="en">


<head>
        <meta charset="utf-8" />
        <title>Reset Password</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured vendor theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        {{-- <link rel="shortcut icon" href="{{asset('admin/images/favicon.ico')}}"> --}}


         <!-- App css -->
         <link href="{{ asset('admin/css/app.min.css') }}" rel="stylesheet" type="text/css" />
         <link href="{{ asset('admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
         <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    </head>

    <body class="authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-4 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-pattern">

                            <div class="card-body p-4">

                                <div class="text-center w-75 m-auto">
                                    <a href="#">
                                        <h3>Blue Bus</h3>
                                    </a>
                                   <p class="text-muted mb-4 mt-3"></p>
                                </div>

                                <form action="{{route('vendor.savepasswordsms')}}" method="POST">
                                    @csrf
                                    @if (Session::has('status'))
                                        <div class="alert alert-danger " style="text-align:center" >{{Session::get('status')}}</div>
                                    @endif
                                    <div class="form-group mb-3" hidden>
                                        <label for="MobileNo">Mobile No.</label>
                                        <input class="form-control" type="number"  name="MobileNo" readonly value="{{ $phone }}" required id="mobileno" placeholder="Enter your MobileNo">
                                        <span class="text-danger">@error('MobileNo') {{  $message }} @enderror</span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="OTP">OTP</label>
                                        <input class="form-control" type="number" name="OTP" value="{{ old('OTP') }}" required id="otp" placeholder="Enter your otp">
                                        <span class="text-danger">@error('OTP') {{  $message }} @enderror</span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="Password">Password</label>
                                        <input class="form-control" type="password" name="Password" value="{{ old('Password') }}" required id="password" placeholder="Enter your Password">
                                        <span class="text-danger">@error('Password') {{  $message }} @enderror</span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="Password">Confirm Password</label>
                                        <input class="form-control" type="Password" name="ConfirmPassword" value="{{ old('ConfirmPassword') }}" required id="confirmPassword" placeholder="Enter your Confirm Password">
                                        <span class="text-danger">@error('ConfirmPassword') {{  $message }} @enderror</span>
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary btn-block" type="submit"> Reset Password </button>
                                    </div>

                                </form>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-white-50">Back to <a href="{{route('vendor')}}" class="text-white ml-1"><b>Log in</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


        <footer class="footer footer-alt">
            2015 - 2018 &copy; UBold theme by <a href="#" class="text-white-50">Coderthemes</a>
        </footer>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

    </body>

<!-- Mirrored from coderthemes.com/ubold/layouts/light/pages-recoverpw.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jan 2019 11:44:23 GMT -->
</html>
