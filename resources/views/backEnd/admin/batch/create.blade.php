@extends('backEnd.admin.layout.main')
@section('panel-title')
Add Batch
@endsection
@section('content')

<div class="content">
    <!-- Form validation -->
    <div class="panel panel-flat">
        <div class="panel-body">
            <form class="form-horizontal form-validate-jquery" action="{{route('admin.batch.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label class="control-label col-lg-2"> Course <span class="text-danger">*</span></label>
                    <div class="col-lg-10">
                        <select name="course_id" class="form-control" required="required">
                            <option value="">Select One</option>
                            @foreach ($courses as $course)
                                <option value="{{$course->id}}">{{$course->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-2"> Batch Number <span class="text-danger">*</span></label>
                    <div class="col-lg-10">
                        <input type="text" name="batch_number" class="form-control" required="required" placeholder="Batch Number">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-2"> Weekly Days <span class="text-danger">*</span></label>
                    <div class="col-lg-10">
                        <input type="number" name="weekly" class="form-control" required="required" placeholder="Weekly Days">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-2"> Course Price <span class="text-danger">*</span></label>
                    <div class="col-lg-10">
                        <input type="number" name="course_price" class="form-control" required="required" placeholder="Course Price">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-2"> Total Month <span class="text-danger">*</span></label>
                    <div class="col-lg-10">
                        <input type="number" name="total_month" class="form-control" required="required" placeholder="Total Month">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-2"> Publish Status <span class="text-danger">*</span></label>
                    <div class="col-lg-10">
                        <select name="status" class="form-control" required="required">
                            <option value="">Select One</option>
                            <option value="1">Publish</option>
                            <option value="2">Unpublish</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-4">
                        <button type="submit" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
                        <a href="{{route('admin.batch.index')}}" class="btn btn-default">Back To List <i class="icon-backward2 position-right"></i></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /form validation -->

</div>

@endsection
