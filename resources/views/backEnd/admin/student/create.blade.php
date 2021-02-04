@extends('backEnd.admin.layout.main')
@section('panel-title')
Add Course
@endsection
@section('content')


<div class="content">

    <!-- Form validation -->
    <div class="panel panel-flat">
        <div class="panel-body">
            <form class="form-horizontal form-validate-jquery" action="{{route('admin.course.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="control-label col-lg-2"> Name <span class="text-danger">*</span></label>
                    <div class="col-lg-10">
                        <input type="text" name="name" class="form-control" required="required" placeholder=" Name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-2"> Description <span class="text-danger">*</span> </label>
                    <div class="col-lg-10">
                        <textarea name="description" class="form-control" required="required"> </textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-2"> Image </label>
                    <div class="col-lg-10">
                        <input type="file" name="image" class="form-control" >
                    </div>
                </div>
                
                {{-- <div class="form-group">
                    <label class="control-label col-lg-2"> Gender <span class="text-danger">*</span></label>
                    <div class="col-lg-10">
                        <select name="gender" class="form-control" required="required">
                            <option value="">Status</option>
                            <option value="1">Publish</option>
                            <option value="2">Unpublish</option>
                        </select>
                    </div>
                </div> --}}
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-4">
                        <button type="submit" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
                        {{-- <button type="reset" class="btn btn-default" id="reset">Reset <i class="icon-reload-alt position-right"></i></button> --}}
                        <a href="{{route('admin.course.index')}}" class="btn btn-default">Back To List <i class="icon-backward2 position-right"></i></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /form validation -->

</div>

@endsection
