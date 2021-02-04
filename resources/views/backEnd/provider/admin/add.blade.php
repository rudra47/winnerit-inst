@extends('backEnd.provider.layout.main')
@section('panel-title')
    Add User
@endsection
@section('content')
    <!-- Form horizontal -->
    <div class="panel panel-flat">
        <div class="panel-body">
            <form class="form-horizontal" action="#">
                <fieldset class="content-group">
                    <legend class="text-bold">Basic inputs</legend>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Name</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Email</label>
                        <div class="col-lg-10">
                            <input type="email" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Password</label>
                        <div class="col-lg-10">
                            <input type="password" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Address</label>
                        <div class="col-lg-10">
                            <textarea rows="5" cols="5" class="form-control" placeholder="Default textarea"></textarea>
                        </div>
                    </div>

                </fieldset>

            </form>
        </div>
    </div>
    <!-- /form horizontal -->

@endsection
