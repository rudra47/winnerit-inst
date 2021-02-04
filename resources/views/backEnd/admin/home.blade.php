@extends('backEnd.admin.layout.main')

@section('content')

        <div class="col-md-10 col-md-offset-1">
            <div class="row">
                {{-- @foreach ($result as $key => $res)
                    <div class="col-md-4">
                        <!-- Productivity goal -->
                        <div class="panel text-center">
                            <div class="panel-body">
                                <!-- Progress counter -->
                                <div class="content-group-sm">
                                    <div>
                                        <i class="icon-trophy3 text-success" style="top: 22px; font-size: 70px;"></i>
                                    </div>
                                    <div class="mt-1" style="margin-top: 50px;">
                                        <h2 class="mt-15 mb-5">{{$res}}</h2>
                                        <div>{{$key}}</div>
                                        <div class="text-size-small text-muted">87% average</div>
                                    </div>
                                </div>
                                <!-- /progress counter -->

                            <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>
                        </div>
                        <!-- /productivity goal -->
                    </div>
                @endforeach --}}
                <h2 style="text-align: center;">Welcome To Admin Panel</h2>
            </div>       
		</div>
@endsection