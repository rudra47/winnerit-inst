@extends('backEnd.admin.layout.main')
@section('panel-title')
Edit Payment Method
@endsection
@section('content')


<div class="content">
    <!-- Form validation -->
    <div class="panel panel-flat">
        <div class="panel-body">
            <form class="form-horizontal form-validate-jquery" action="{{route('admin.paymentMethod.update', [$paymentMethod->id])}}" method="POST">
                @method("PUT")
                @csrf
                <div class="form-group">
                    <label class="control-label col-lg-2"> Name <span class="text-danger">*</span></label>
                    <div class="col-lg-10">
                        <input type="text" name="name" value="{{$paymentMethod->name}}" class="form-control" required="required" placeholder="Name">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-4">
                        <button type="submit" class="btn btn-primary" id="submit">Update <i class="icon-arrow-right14 position-right"></i></button>
                        <a href="{{ route('admin.paymentMethod.index')}}" class="btn btn-warning">Back <i class="icon-backward2"></i></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /form validation -->
</div>

@endsection
