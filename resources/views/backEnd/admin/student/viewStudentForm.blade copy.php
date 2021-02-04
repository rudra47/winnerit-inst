<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
	box-sizing: border-box;
}

input[type=text], select, textarea {
	width: 100%;
	padding: 7px;
	border: 1px solid #ccc;
	border-radius: 4px;
	resize: vertical;
}

label {
	padding: 12px 12px 12px 0;
	display: inline-block;
}

input[type=submit] {
	background-color: #4CAF50;
	color: white;
	padding: 12px 20px;
	border: none;
	border-radius: 4px;
	cursor: pointer;
	float: right;
}

input[type=submit]:hover {
	background-color: #45a049;
}

.container {
	border-radius: 5px;
	background-color: #f2f2f2;
	padding: 20px;
}

.col-25 {
	float: left;
	width: 25%;
	margin-top: 6px;
}

.col-75 {
	float: left;
	width: 75%;
	margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
	content: "";
	display: table;
	clear: both;
}
.mt-3{
		margin-top: 30px!important;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
	.col-25, .col-75, input[type=submit] {
		width: 100%;
		margin-top: 0;
	}
}
</style>
</head>
<body>

<h2>Registered Form</h2>

<div class="container">
	<form action="/action_page.php">
		<div class="row">
			<div class="col-25">
				<label for="fname">Candidate Name: </label>
			</div>
			<div class="col-75">
				<input type="text" id="fname" value="{{$student->name}}" name="firstname" placeholder="Your name..">
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="lname">Father Name</label>
			</div>
			<div class="col-75">
				<input type="text" id="lname" value="{{$student->father_name}}">
			</div>
		</div>
		
		<div class="row">
			<div class="col-25">
				<label for="lname">Mother Name</label>
			</div>
			<div class="col-75">
				<input type="text" id="lname" value="{{$student->mother_name}}">
			</div>
		</div>
		
		<div class="row">
			<div class="col-25">
				<label for="lname">Mother Name</label>
			</div>
			<div class="col-75">
				<input type="text" id="lname" value="{{$student->mobile_number}}">
			</div>
		</div>
		
		<div class="row">
			<div class="col-25">
				<label for="lname">Contact By</label>
			</div>
			<div class="col-75">
				<input type="text" id="lname" value="{{$student->staff_name}}">
			</div>
		</div>
		
		<div class="row">
			<div class="col-25">
				<label for="lname">Course Name</label>
			</div>
			<div class="col-75">
				<input type="text" id="lname" value="{{$student->course_name}}">
			</div>
		</div>
		
		<div class="row">
			<div class="col-25">
				<label for="lname">Batch Number</label>
			</div>
			<div class="col-75">
				<input type="text" id="lname" value="{{$student->batch_number}} Month">
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="lname">Course Duration</label>
			</div>
			<div class="col-75">
				<input type="text" id="lname" value="{{$student->total_month}} Month">
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="lname">Course Price</label>
			</div>
			<div class="col-75">
				<input type="text" id="lname" value="{{$student->course_price}} Month">
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="lname">Date</label>
			</div>
			<div class="col-75">
				<input type="text" id="lname" value="{{$student->created_at}}">
			</div>
		</div>
	</form>
</div>

</body>
</html>
