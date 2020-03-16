<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Happy Journey Travels  | Booking Ticket</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('web/images/favicon.ico')}}">

        <link rel="stylesheet" href="{{ asset('web\jquery\jquery-ui.css') }}">

        <!-- extra css  -->
        @yield('other-page-css')

        <!-- App css -->
        <link href="{{ asset('web/css/app.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('web/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('web/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />


        @yield('page-css')

    </head>

    <body class="bg-white" style="padding-bottom: 0px;">

        <!-- Topbar Start -->

            @include('web.layout.navbar.navbar')

        <!-- end Topbar -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->


            {{-- @yield('content') --}}

            <!-- Footer Start -->

                {{-- @include('web.layout.footer.footer') --}}

            <!-- end Footer -->



        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


            {{-- LOGIN MODEL --}}

        <!--  Modal content for the above example -->
        <div class="modal fade bs-example-modal-lg"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg modal-dialog-centered" style="border-radius:25px;">
                <div class="modal-content" style="border-radius: 0.8rem;">
                    {{-- <div class="modal-header">
                        <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div> --}}
                    <div class="modal-body p-0" style="overflow:hidden;border-radius: 0.6rem;" >
                        <div class="row ">
                            <div class="col-6 pr-0">
                                <img src="{{ asset('web\images\login\login-ilistratar.jpg')}}" alt="" width="100%" height="100%">
                            </div>
                            <div class="col-6 mt-3 mb-3 pr-1 mobileNoLayout" id="mobileNoLayout">
                                <div class="row mt-0">
                                    <div class="col-11">
                                        <button type="button" class="close float-right" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-12">
                                        <img src="{{ asset('web\images\redbus\logo_r.png') }}">
                                    </div>
                                    <div class="col-12">
                                            <h3 style="color:#f1556c;">Welcome Into Happy Journey</h3>
                                    </div>
                                </div>
                                {{-- <form method="post" action="#"> --}}
                                    <div class="row mt-3">
                                        <div class="col-11 ">
                                            <div class="form-group">
                                                <input type="number" class="form-control mobileNo"  id="mobileNo"  required name="phone" placeholder="Enter Your Mobile no">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-11 ">
                                            <input type="submit" class="btn btn-danger text-center continue" id="continue" value="CONTINUE" style="width:100%;font-weight:700">
                                        </div>
                                    </div>
                                {{-- </form> --}}
                                <div class="row mt-2">
                                    <div class="col-5">
                                        <hr style="border: 0.5px solid #ddd;">
                                    </div>
                                    <div class="col-1 pl-0 pr-0 mt-1">
                                        <span>OR</span>
                                    </div>
                                    <div class="col-5 pl-0 pr-2">
                                        <hr style="border: 0.5px solid #ddd;">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-6">
                                    <button class="btn bg-white btn-rounded width-lg pt-2 pb-2 " style="border:1px solid #ced4da"><span class="float-left"><img src="{{ asset('web\images\redbus\social-icon\icons-8-google.svg') }}" alt=""></span><span class=" font-weight-bold float-right" style="color:#ff3d00">Google</span></button>
                                    </div>
                                    <div class="col-6">
                                    <button class="btn bg-white btn-rounded width-lg pt-2 pb-2 float-left" style="border:1px solid #ced4da"><span class="float-left"><img src="{{ asset('web\images\redbus\social-icon\facebook-icon.svg')}}" alt=""></span><span class=" font-weight-bold float-right" style="color:#485a96">Facebook</span></button>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-11 text-center">
                                        <p>By signing up, you agree to our <a href="#" class="text-info">Terms & Conditions</a> and <a href="#" class="text-info">Privacy Policy</a></p>
                                    </div>
                                </div>
                            </div>
                            {{-- opt --}}
                            <div class="col-6 mt-3 mb-3 pr-1 optLayout" id="optLayout" style="display:none">
                                <div class="row mt-0">
                                    <div class="col-11">
                                        <button type="button" class="close float-right" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-12">
                                        <img src="{{ asset('web\images\redbus\logo_r.png') }}">
                                    </div>
                                    <div class="col-12">
                                            <h3 style="color:#f1556c;">Sign Into Happy Journey</h3>
                                    </div>
                                </div>
                                <p class="bg-light">To continue, please enter OTP sent to verify mobile number</p>
                                    <div class="row mt-3">
                                        <div class="col-11 ">
                                            <div class="form-group">
                                                <input type="number" class="form-control OTP"  id="OTP"  required name="otp" placeholder="Enter OTP">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-11 ">
                                            <input type="submit" class="btn btn-danger text-center otpvarify" id="otpvarify" value="OTP VARIFY " style="width:100%;font-weight:700">
                                        </div>
                                    </div>
                                <div class="row mt-2 text-center">

                                    <div class="col-12 pl-0 pr-0 mt-1">
                                        <span>OTP Valid FOR 10 Mins</span>
                                    </div>

                                </div>
                                <div class="row mt-2">
                                    <div class="col-12 text-center">
                                    <button class="btn bg-white btn-rounded width-sm pt-2 pb-2 mr-2" style="border:1px solid #ced4da:width:100%" ><span class=" font-weight-bold " style="color:#ff3d00">Onother Way To Login</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

    </body>




        <!-- Vendor js -->
        <script src="{{ asset('web/js/vendor.min.js')}}"></script>

        <!-- extra js -->

        @yield('other-page-js')

        <!-- App js -->
        <script src="{{ asset('web/js/app.min.js')}}"></script>

        @yield('after-js')



</html>


