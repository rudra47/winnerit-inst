@extends('backEnd.admin.layout.main')
@section('panel-title')
Add Staff
@endsection
@section('content')


<div class="content">

    <!-- Form validation -->
    <div class="panel panel-flat">
        <div class="panel-body">
            <form class="form-horizontal form-validate-jquery" action="{{route('admin.staff.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label class="control-label col-lg-2"> Name <span class="text-danger">*</span></label>
                    <div class="col-lg-10">
                        <input type="text" name="name" class="form-control" required="required" placeholder=" Name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-2"> Email (if have)</label>
                    <div class="col-lg-10">
                        <input type="email" name="email" class="form-control" placeholder=" Email ">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-2"> Mobile <span class="text-danger">*</span></label>
                    <div class="col-lg-10">
                        <input type="text" name="mobile" class="form-control" required="required" placeholder="Mobile">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-2"> Designation <span class="text-danger">*</span></label>
                    <div class="col-lg-10">
                        <select name="designation_id" class="form-control" required="required">
                            <option value="">Select One</option>
                            @foreach ($designations as $designation)
                                <option value="{{$designation->id}}">{{$designation->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-2"> Gender <span class="text-danger">*</span></label>
                    <div class="col-lg-10">
                        <select name="gender" class="form-control" required="required">
                            <option value="">Select One</option>
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                            <option value="3">Other</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-4">
                        <button type="submit" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
                        {{-- <button type="reset" class="btn btn-default" id="reset">Reset <i class="icon-reload-alt position-right"></i></button> --}}
                        <a href="{{route('admin.staff.index')}}" class="btn btn-default">Back To List <i class="icon-backward2 position-right"></i></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /form validation -->
</div>

@endsection
