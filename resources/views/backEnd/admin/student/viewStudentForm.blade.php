<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Admission Form</title>

    <style>
        .header{
            background: #007766;
            padding: 10px 0px;
        }
        .header b{
            margin-left: 50px;
            color: white;
            font-size: 22px;
        }
        .footer{
            background: #007766;
            padding: 5px;
        }
        .footer span{
            margin-left: 50px;
            color: white;
        }
        display-flex, .form-flex, .form-row, .add-info-link {
        display: flex;
        display: -webkit-flex; }

        list-type-ulli, ul {
        list-style-type: none;
        margin: 0;
        padding: 0; }

        figure {
        margin: 0; }

        p {
        margin-bottom: 0px;
        font-size: 15px;
        color: #777; }

        h2 {
        line-height: 1.66;
        margin: 0;
        padding: 0;
        font-weight: 900;
        color: #222;
        font-family: 'Montserrat';
        font-size: 24px;
        text-transform: uppercase;
        text-align: center;
        margin-bottom: 40px; }

        body {
            font-size: 13px;
            line-height: 1.8;
            color: #222;
            font-weight: 600;
            font-family: 'Arial';
            background: #c5e9ff;
            padding: 115px 0;

        }

        a {
        color: #1da0f2; }

        .container {
		width: 680px;
		height: 730px;
        position: relative;
        margin: 0 auto;
        box-shadow: 0px 10px 9.9px 0.1px rgba(0, 0, 0, 0.1);
        background: #fff; }

        .signup-content {
        padding: 10px 0; }

        .signup-form {
        padding: 58px 50px 0px 50px;
        height: 595px;
        overflow-y: auto; }

        label, input {
        display: block;
        width: 100%; }

        label {
        text-transform: uppercase;
        font-weight: 800;
        margin-bottom: 3px; }

        input {
        border: 1px solid black;
        border-radius: 5px;
        box-sizing: border-box;
        padding: 12px 20px;
        font-size: 14px;
        font-weight: bold;
        font-family: 'Montserrat'; 
        }
        
        .form-row {
        margin: 0 -11px; }
        .form-row .form-group, .form-row .form-radio {
        width: 50%;
        padding: 0 11px; 
        }

        .form-group, .form-radio {
        margin-bottom: 23px;
        position: relative; }

        .form-icon {
        position: relative; }

        .add-info-link {
        text-decoration: none;
        text-transform: uppercase;
        font-weight: 900;
        margin-bottom: 16px; }
        .add-info-link .zmdi {
            font-size: 18px;
            padding-right: 14px; }

        .add_info {
		display: none; }

        /*# sourceMappingURL=style.css.map */

    </style>
</head>
<body>
    <div class="main">
        <section class="signup">
            <div class="container">
                <div class="header">
                    <b>Admission Form</b>
					<span style="float: right; color: white; margin-right: 5px; font-size: 20px;"> Date: {{date('d-m-Y')}}</span>
                </div>
                <div class="signup-content">
                    <div style="width: 80%; margin: 0 auto; padding-bottom: 5px;">
                        <img src="{{asset("frontend/img/logo.png")}}" width="150" alt="">
                        
                    </div>
                    <div style="width: 80%; margin: 0 auto; padding-bottom: 5px; margin-top: 15px;">
                        <label>Candidate Name</label>
                        <p style="width: 100%; padding: 10px; border: 1px solid gray;">
                            {{$student->name}}
                        </p>
                    </div>
                    <div style="width: 80%; margin: 0 auto; padding-bottom: 5px; margin-top: 5px;">
                        <label>Father Name</label>
                        <p style="width: 100%; padding: 10px; border: 1px solid gray;">
                            {{$student->name}}
                        </p>
                    </div>
					<div style="width:80%; margin: 0 auto;">
						<div style=" width: 49%; float:left; clear: none">
							<div style="width: 100%;">
								<label>Mother Name</label>
								<p style="width: 100%; padding: 10px; border: 1px solid gray;">
									{{$student->mother_name}}
								</p>
							</div>
							<div style="width: 100%;">
								<label>Mobile Number</label>
								<p style="width: 100%; padding: 10px; border: 1px solid gray;">
									{{$student->mobile_number}}
								</p>
							</div>
							<div style="width: 100%;">
								<label>Contact By</label>
								<p style="width: 100%; padding: 10px; border: 1px solid gray;">
									{{$student->staff_name}}
								</p>
							</div>
							<div style="width: 100%;">
								<label>Course Name</label>
								<p style="width: 100%; padding: 10px; border: 1px solid gray;">
									{{$student->course_name}}
								</p>
							</div>
						</div>
						<div style=" width: 49%; float:right;clear: none">
							<div style="width: 100%;">
								<label>Batch Number</label>
								<p style="width: 100%; padding: 10px; border: 1px solid gray;">
									{{$student->batch_number}}
								</p>
							</div>
							<div style="width: 100%;">
								<label>Course Duration</label>
								<p style="width: 100%; padding: 10px; border: 1px solid gray;">
									{{$student->total_month}} month
								</p>
							</div>
							<div style="width: 100%;">
								<label>Course Price</label>
								<p style="width: 100%; padding: 10px; border: 1px solid gray;">
									{{$student->course_price}}
								</p>
							</div>
							<div style="width: 100%;">
								<label>Date of Birth</label>
								<p style="width: 100%; padding: 10px; border: 1px solid gray;">
									{{date('d-m-Y', strtotime($student->date_of_birth))}}
								</p>
							</div>
						</div>
					</div>
                </div>
                {{-- <div class="footer" style="width: 100%; float: left; bottom: 0;">
                    <span>Winner IT Institute</span>
                    <img src="" alt="">
                </div> --}}
            </div>
        </section>
    </div>
</html>