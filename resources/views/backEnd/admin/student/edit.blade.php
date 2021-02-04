@extends('backEnd.admin.layout.main')
@section('panel-title')
Edit Staff
@endsection
@section('content')
<div class="content">
    <!-- Form validation -->
    <div class="panel panel-flat">
        <div class="panel-body">
            <form class="form-horizontal form-validate-jquery" action="{{route('admin.student.update', [$student->id])}}" method="POST">
                @method("PUT")
                @csrf
                <div class="form-group">
                    <label class="control-label col-lg-2">Student Name <span class="text-danger">*</span></label>
                    <div class="col-lg-10">
                        <input type="text" name="name" class="form-control" value="{{$student->name}}" required="required" placeholder=" Name">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-lg-2">Father Name <span class="text-danger">*</span> </label>
                    <div class="col-lg-10">
                        <input type="text" name="father_name" class="form-control" value="{{$student->father_name}}" required="required" placeholder="Father Name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-2">Mother Name <span class="text-danger">*</span> </label>
                    <div class="col-lg-10">
                        <input type="text" name="mother_name" class="form-control" value="{{$student->mother_name}}" required="required" placeholder="Mother Name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-2">Mobile Number <span class="text-danger">*</span> </label>
                    <div class="col-lg-10">
                        <input type="text" name="mobile_number" class="form-control" value="{{$student->mobile_number}}" required="required" placeholder="Mobile Number">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-2">Date Of Birth <span class="text-danger">*</span> </label>
                    <div class="col-lg-10">
                        <input type="date" name="date_of_birth" class="form-control" value="{{$student->date_of_birth}}" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-2">Batch Number <span class="text-danger">*</span> </label>
                    <div class="col-lg-10">
                        <select name="batch_id" class="form-control">
                            <option value="">Select One</option>
                            @if (count($batches) > 0)    
                                @foreach ($batches as $batch)
                                    <option value="{{$batch->id}}" {{$batch->id == $student->batch_id ? 'selected' : ''}}>{{$batch->batch_number}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
                {{-- {{dd($student->status)}} --}}
                <div class="form-group">
                    <label class="control-label col-lg-2">Gender <span class="text-danger">*</span> </label>
                    <div class="col-lg-10">
                        <select name="gender" class="form-control">
                            <option value="">Select One</option>
                            <option value="1" {{ $student->gender == 1 ? 'selected' : '' }}>Male</option>
                            <option value="2" {{ $student->gender == 2 ? 'selected' : '' }}>Female</option>
                            <option value="3" {{ $student->gender == 3 ? 'selected' : '' }}>Others</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-2">Reference(Staff) Name <span class="text-danger">*</span> </label>
                    <div class="col-lg-10">
                        <select name="staff_id" class="form-control">
                            <option value="">Select One</option>
                            @if (count($staffs) > 0)    
                                @foreach ($staffs as $staff)
                                    <option value="{{$staff->id}}" {{$staff->id == $student->staff_id ? 'selected' : ''}}>{{$staff->name}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-2">Educational Background <span class="text-danger">*</span> </label>
                    <div class="col-lg-10">
                        <select name="qualification" class="form-control">
                            <option value="">Select One</option>
                            <option {{$student->qualification == 'JSC' ? 'selected' : '' }} value="JSC">JSC </option>
                            <option {{$student->qualification == 'SSC' ? 'selected' : '' }} value="SSC">SSC </option>
                            <option {{$student->qualification == 'HSC' ? 'selected' : '' }} value="HSC">HSC </option>	
                            <option {{$student->qualification == 'Honours' ? 'selected' : '' }} value="Honours">Honours </option>	
                            <option {{$student->qualification == 'Masters' ? 'selected' : '' }} value="Masters">Masters  </option>	
                            <option {{$student->qualification == 'Degree' ? 'selected' : '' }} value="Degree">Degree  </option>	
                            <option {{$student->qualification == 'B.A.' ? 'selected' : '' }} value="B.A.">B.A.</option>
                            <option {{$student->qualification == 'BBA' ? 'selected' : '' }} value="BBA">BBA</option>
                            <option {{$student->qualification == 'Diploma' ? 'selected' : '' }} value="Diploma">Diploma</option>
                            <option {{$student->qualification == 'BArch' ? 'selected' : '' }} value="BArch">BArch</option>
                            <option {{$student->qualification == 'BM' ? 'selected' : '' }} value="BM">BM</option>
                            <option {{$student->qualification == 'BFA' ? 'selected' : '' }} value="BFA">BFA</option>
                            <option {{$student->qualification == 'B.Sc.' ? 'selected' : '' }} value="B.Sc.">B.Sc.</option>
                            <option {{$student->qualification == 'M.A.' ? 'selected' : '' }} value="M.A.">M.A.</option>
                            <option {{$student->qualification == 'M.B.A.' ? 'selected' : '' }} value="M.B.A.">M.B.A.</option>
                            <option {{$student->qualification == 'MFA' ? 'selected' : '' }} value="MFA">MFA</option>
                            <option {{$student->qualification == 'M.Sc.' ? 'selected' : '' }} value="M.Sc.">M.Sc.</option>
                            <option {{$student->qualification == 'J.D.' ? 'selected' : '' }} value="J.D.">J.D.</option>
                            <option {{$student->qualification == 'M.D.' ? 'selected' : '' }} value="M.D.">M.D.</option>
                            <option {{$student->qualification == 'Ph.D"' ? 'selected' : '' }} value="Ph.D">Ph.D</option>
                            <option {{$student->qualification == 'LLB' ? 'selected' : '' }} value="LLB">LLB</option>
                            <option {{$student->qualification == 'LLM' ? 'selected' : '' }} value="LLM">LLM</option>
                            <option {{$student->qualification == 'Other' ? 'selected' : '' }} value="Other">Other</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-2">Payment Method<span class="text-danger">*</span> </label>
                    <div class="col-lg-10">
                        <select name="payment_getway_id" class="form-control">
                            <option value="">Select One</option>
                            @if (count($paymentMethods) > 0)    
                                @foreach ($paymentMethods as $paymentMethod)
                                    <option value="{{$paymentMethod->id}}" {{$paymentMethod->id == $student->payment_getway_id ? 'selected' : ''}}>{{$paymentMethod->name}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
                {{-- <div class="form-group">
                    <label class="control-label col-lg-2">Payment Status <span class="text-danger">*</span> </label>
                    <div class="col-lg-10">
                        <select name="payment_status" class="form-control">
                            <option value="">Select One</option>
                            <option value="1" {{ $student->payment_status == 1 ? 'selected' : '' }}>Paid</option>
                            <option value="2" {{ $student->payment_status == 0 ? 'selected' : '' }}>Unpaid</option>
                        </select>
                    </div>
                </div> --}}
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-4">
                        <button type="submit" class="btn btn-primary" id="submit">Update <i class="icon-arrow-right14 position-right"></i></button>
                        <a href="{{ route('admin.student.index')}}" class="btn btn-warning">Back <i class="icon-backward2"></i></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /form validation -->
</div>
@endsection
