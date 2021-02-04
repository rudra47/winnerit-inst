@extends('backEnd.admin.layout.main')
@section('panel-title')
Edit Staff
@endsection
@section('content')
<div class="content">
    <!-- Form validation -->
    <div class="panel panel-flat">
        <div class="panel-body">
            <form class="form-horizontal form-validate-jquery" action="{{route('admin.staff.update', [$staff->id])}}" method="POST">
                @method("PUT")
                @csrf
                <div class="form-group">
                    <label class="control-label col-lg-2"> Name <span class="text-danger">*</span></label>
                    <div class="col-lg-10">
                        <input type="text" name="name" class="form-control" value="{{$staff->name}}" required="required" placeholder=" Name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-2"> Email (if have)</label>
                    <div class="col-lg-10">
                        <input type="email" name="email" class="form-control" value="{{$staff->email}}"  placeholder=" Email ">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-2"> Mobile <span class="text-danger">*</span></label>
                    <div class="col-lg-10">
                        <input type="text" name="mobile" class="form-control" value="{{$staff->mobile}}" required="required" placeholder="Mobile">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-2"> Designation <span class="text-danger">*</span></label>
                    <div class="col-lg-10">
                        <select name="designation_id" class="form-control" required="required">
                            <option value="">Select One</option>
                            @foreach ($designations as $designation)
                                <option value="{{$designation->id}}" {{ $designation->id == $staff->designation_id ? 'selected' : '' }}>{{$designation->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-2"> Gender <span class="text-danger">*</span></label>
                    <div class="col-lg-10">
                        <select name="gender" class="form-control" required="required">
                            <option value="">Select One</option>
                            <option value="1" {{ $staff->gender == 1 ? 'selected' : '' }}>Male</option>
                            <option value="2" {{ $staff->gender == 2 ? 'selected' : '' }}>Female</option>
                            <option value="3" {{ $staff->gender == 3 ? 'selected' : '' }}>Other</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-2"> Password <span class="text-danger">*</span></label>
                    <div class="col-lg-8">
                        <input type="text" name="password" id="password" class="form-control" value="{{$staff->password}}" required="required" placeholder="Password">
                    </div>
                    <div class="col-lg-2">
                        <span class="btn btn-success" link="{{ route('admin.change_pass') }}"  id="change_pass">Change Password</span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-4">
                        <button type="submit" class="btn btn-primary" id="submit">Update <i class="icon-arrow-right14 position-right"></i></button>
                        <a href="{{ route('admin.staff.index')}}" class="btn btn-warning">Back <i class="icon-backward2"></i></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /form validation -->
</div>
@endsection
