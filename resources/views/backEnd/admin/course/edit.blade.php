@extends('backEnd.admin.layout.main')
@section('panel-title')
Edit Staff
@endsection
@section('content')
<div class="content">
    <!-- Form validation -->
    <div class="panel panel-flat">
        <div class="panel-body">
            <form class="form-horizontal form-validate-jquery" action="{{route('admin.course.update', [$course->id])}}" method="POST">
                @method("PUT")
                @csrf
                <div class="form-group">
                    <label class="control-label col-lg-2"> Name <span class="text-danger">*</span></label>
                    <div class="col-lg-10">
                        <input type="text" name="name" class="form-control" value="{{$course->name}}" required="required" placeholder=" Name">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-lg-2"> Description <span class="text-danger">*</span> </label>
                    <div class="col-lg-10">
                        <textarea name="description" class="form-control" required="required">{{$course->description}} </textarea>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-lg-2"> Image </label>
                    <div class="col-lg-10">
                        @if ($course->image == null)
                            <img src="{{ asset('backEnd/admin/assets/uploads/course/demo.jpg') }}" width="80" alt="">
                        @else
                            <img src="{{ asset('backEnd/admin/assets/uploads/course').'/'.$course->image }}" width="80" alt="">
                        @endif
                        <input type="file" name="image" style="margin-top: 5px;" class="form-control">
                    </div>
                </div>
                {{-- {{dd($course->status)}} --}}
                <div class="form-group">
                    <label class="control-label col-lg-2"> Activation </label>
                    <div class="col-lg-10">
                        <select name="status" class="form-control">
                            <option value="">Select One</option>
                            <option value="1" {{ $course->status == 1 ? 'selected' : '' }}>Publish</option>
                            <option value="2" {{ $course->status == 2 ? 'selected' : '' }}>Unpublish</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-4">
                        <button type="submit" class="btn btn-primary" id="submit">Update <i class="icon-arrow-right14 position-right"></i></button>
                        <a href="{{ route('admin.course.index')}}" class="btn btn-warning">Back <i class="icon-backward2"></i></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /form validation -->
</div>
@endsection
