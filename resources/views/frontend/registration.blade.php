<!DOCTYPE html>
<html>
	<head>
		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>
            WINNER IT | Registration Form
        </title>

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
        
		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/vendor/fontawesome-free/css/all.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/vendor/animate/animate.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('frontend/css/theme.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/css/theme-elements.css')}}">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="{{asset('frontend/vendor/rs-plugin/css/settings.css')}}">
		
		<!-- Demo CSS -->

		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{asset('frontend/css/skins/default.css')}}"> 

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{asset('frontend/css/custom.css')}}">


		<!-- Head Libs -->
        <script src="{{asset('frontend/vendor/modernizr/modernizr.min.js')}}"></script>
        
        <style>
            html .btn-primary:hover, html .btn-primary.hover {
                background-color: #007766;
                border-color: #007766 #007766 #007766;
                color: #FFF;
            }
        </style>    
    </head>
	<body class="loading-overlay-showing" data-plugin-page-transition data-loading-overlay data-plugin-options="{'hideDelay': 500}">
        <div class="col-md-6 offset-md-3">
            <div class="featured-box featured-box-primary text-left mt-5">
                <div class="box-content">
                    <h4 class="color-primary font-weight-semibold text-4 text-uppercase mb-3">Register An Account</h4>
                    <form action="{{ route('registrationAction') }}" id="frmSignUp" method="post" class="needs-validation">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-lg-6">
                                <label class="font-weight-bold text-dark text-2">Name (সার্টিফিকেট অনুযায়ি) <span style="color:red;">*</span> </label>
                                <input type="text" value="" name="name" class="form-control form-control-lg" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="font-weight-bold text-dark text-2">Father Name<span style="color:red;">*</span></label>
                                <input type="text" value="" name="father_name" class="form-control form-control-lg" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-6">
                                <label class="font-weight-bold text-dark text-2">Mother Name<span style="color:red;">*</span></label>
                                <input type="text" value="" name="mother_name" class="form-control form-control-lg" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="font-weight-bold text-dark text-2">Mobile Number<span style="color:red;">*</span></label>
                                <input type="text" value="" name="mobile_number" class="form-control form-control-lg" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-6">
                                <label class="font-weight-bold text-dark text-2">জন্ম তারিখ<span style="color:red;">*</span></label>
                                <input type="date" value="" name="date_of_birth" class="form-control form-control-lg" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="font-weight-bold text-dark text-2">ব্যাচ নাম্বার<span style="color:red;">*</span></label>
                                {{-- <input type="text" value="" name="batch_number" class="form-control form-control-lg" required> --}}
                                <select name="batch_id" class="form-control form-control-lg" required>
                                    <option value="">Select One</option>
                                    @if (count($batches) > 0)    
                                        @foreach ($batches as $batch)
                                            <option value="{{$batch->id}}">{{$batch->batch_number}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-6">
                                <label class="font-weight-bold text-dark text-2">Gender<span style="color:red;">*</span></label>
                                <select name="gender" class="form-control form-control-lg" required>
                                    <option value="">Select One</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                    <option value="3">Others</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="font-weight-bold text-dark text-2">আপনি কার মাধ্যমে ভর্তি নিশ্চিত করছেন ? (Ref. Name) <span style="color:red;">*</span></label>
                                <select name="staff_id" class="form-control form-control-lg" required>
                                    <option value="">Select One</option>
                                    @foreach ($staffs as $staff)
                                        <option value="{{$staff->id}}">{{$staff->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-6">
                                <label class="font-weight-bold text-dark text-2">শিক্ষাগত যোগ্যতা ? <span style="color:red;">*</span></label>
                                <select name="qualification" class="form-control form-control-lg" required>
                                    <option value="">Select One</option>
                                    <option value="JSC">JSC </option>
                                    <option value="SSC">SSC </option>
                                    <option value="HSC">HSC </option>	
                                    <option value="Honours">Honours </option>	
                                    <option value="Masters">Masters  </option>	
                                    <option value="Degree">Degree  </option>	
                                    <option value="B.A.">B.A.</option>
                                    <option value="BBA">BBA</option>
                                    <option value="Diploma">Diploma</option>
                                    <option value="BArch">BArch</option>
                                    <option value="BM">BM</option>
                                    <option value="BFA">BFA</option>
                                    <option value="B.Sc.">B.Sc.</option>
                                    <option value="M.A.">M.A.</option>
                                    <option value="M.B.A.">M.B.A.</option>
                                    <option value="MFA">MFA</option>
                                    <option value="M.Sc.">M.Sc.</option>
                                    <option value="J.D.">J.D.</option>
                                    <option value="M.D.">M.D.</option>
                                    <option value="Ph.D">Ph.D</option>
                                    <option value="LLB">LLB</option>
                                    <option value="LLM">LLM</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="font-weight-bold text-dark text-2">কিভাবে কোর্স ফি দিতে চান ? <span style="color:red;">*</span></label>
                                <select name="payment_getway_id" class="form-control form-control-lg" required>
                                    <option value="">Select One</option>
                                    @foreach ($paymentMethods as $paymentMethod)
                                        <option value="{{$paymentMethod->id}}">{{$paymentMethod->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        {{-- <div class="form-row">
                            <div class="form-group col-lg-6">
                                <label class="font-weight-bold text-dark text-2">Password</label>
                                <input type="password" value="" class="form-control form-control-lg" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="font-weight-bold text-dark text-2">Re-enter Password</label>
                                <input type="password" value="" class="form-control form-control-lg" required>
                            </div>
                        </div> --}}

                        <div class="form-row">
                            <div class="form-group col-lg-12">
                                <input type="submit" value="Apply Now" class="btn btn-primary form-control form-control-lg" data-loading-text="Loading...">
                            </div>
                            <div class="form-group col-lg-9">
                                <label class="text-2" for="terms">ওয়েবসাইট ভিজিট করতে ক্লিক করুন - <a href="http://winneritinst.com/" style="color:#cc0000;">WINNER IT</a></label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Vendor -->
		<script src="{{asset('frontend/vendor/jquery/jquery.min.js')}}"></script>
		<script src="{{asset('frontend/vendor/popper/umd/popper.min.js')}}"></script>
		<script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('frontend/vendor/common/common.min.js')}}"></script>
		<script src="{{asset('frontend/vendor/jquery.lazyload/jquery.lazyload.min.js')}}"></script>
		<script src="{{asset('frontend/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="{{asset('frontend/js/theme.js')}}"></script>
		
		<!-- Current Page Vendor and Views -->
		<script src="{{asset('frontend/vendor/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
		
		<!-- Theme Custom -->
		<script src="{{asset('frontend/js/custom.js')}}"></script>
		
		<!-- Theme Initialization Files -->
		<script src="{{asset('frontend/js/theme.init.js')}}"></script>
	
		<script src="{{asset("frontend/js/examples/examples.gallery.js")}}"></script>

         @stack('script')
    
    </body>
</html>