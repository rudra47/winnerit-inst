@extends('backEnd.admin.layout.main')
@section('panel-title')
Payment Method
@endsection
@section('content')

<div class="content">
    <!-- Form validation -->
    <div class="panel panel-flat">
        <div class="panel-header col-md-12">
            <div class="col-md-offset-4 col-md-4" style="padding: 10px;">
                <table class="table table-bordered">
                    <tr>
                        <th>Batch Number</th>
                        <td>{{$student->batch_number}}</td>
                    </tr>
                    <tr>
                        <th>Course Name</th>
                        <td>{{$student->course_name}}</td>
                    </tr>
                    <tr>
                        <th>Total Amount</th>
                        <td>{{$student->total_amount}}</td>
                    </tr>
                    <tr class="{{$student->payment_status == 2 || $student->payment_status == 0 ? 'text-warning' : ''}}">
                        <th>Total Due</th>
                        <td>{{$student->due_amount}}</td>
                    </tr>
                    <tr class="{{$student->payment_status == 1 ? 'text-success' : ''}}">
                        <th>Total Paid</th>
                        <td>{{$student->paid_amount == null ? 0 : $student->paid_amount}}</td>
                    </tr>
                </table>

            </div>
        </div>
        <div class="panel-body">
            <form class="form-horizontal form-validate-jquery" action="{{route('admin.student.paymentAction', [$student->id])}}" method="POST">
                @csrf
                <div class="form-group">
                    <label class="control-label col-md-2"> Payment Status <span class="text-danger">*</span></label>
                    <div class="col-lg-10">
                        <select name="payment_status" id="payment_status" class="form-control" required="required" {{$student->payment_status == 1 ? 'disabled' : ''}}>
                            <option value="">Select One</option>
                            <option value="0" {{ $student->payment_status == 0 ? 'selected' : '' }}>Unpaid</option>
                            <option value="1" {{ $student->payment_status == 1 ? 'selected' : '' }}>Paid</option>
                            <option value="2" {{ $student->payment_status == 2 ? 'selected' : '' }}>Due</option>
                        </select>
                    </div>
                </div>
                <div class="form-group" id="payable_amount" style="display: {{ $student->payment_status == 2 ? 'block' : 'none' }}">
                    <label class="control-label col-lg-2"> Payable Amount <span class="text-danger">*</span></label>
                    <div class="col-lg-10">
                        <input type="text" name="payable_amount" class="form-control" value="{{$student->due_amount}}" required="required" placeholder="Payable Amount">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        @if ($student->payment_status != 1)
                            <button type="submit" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
                        @endif
                        {{-- <button type="reset" class="btn btn-default" id="reset">Reset <i class="icon-reload-alt position-right"></i></button> --}}
                        <a href="{{route('admin.student.index')}}" class="btn btn-default">Back To List <i class="icon-backward2 position-right"></i></a>

                        <a href="{{route('admin.student.viewStudentForm', [$student->id])}}" target="_blank" class="btn btn-info">View Form</a>
                        <a href="{{route('admin.student.viewStudentInvoice', [$student->id])}}" target="_blank" class="btn btn-success">Payment Invoice </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /form validation -->

</div>

<script>
    $(document).ready(function(e){
        $('#payment_status').change(function() {
            let value = $(this).val();
            if (value == 2) {
                $('#payable_amount').css("display", "block");
            }else{
                $('#payable_amount').css("display", "none");
                // $('#payable_amount').removeAttr("required");
            }
        });
    })
</script>

@endsection
