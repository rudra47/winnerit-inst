@extends('backEnd.admin.layout.main')
@section('panel-title')
Batch List
@endsection
@section('content')
    <style type="text/css">
        .btn{
            margin: 7px!important;
            border-radius: 3px;
        }
        .swal2-popup{
            width: 46em;
        }
        .swal2-show>.swal2-header>.swal2-title{
            font-size: 17px!important;
        }
        .swal2-html-container{
            font-size: 17px!important;
        }
        .swal2-icon {
            font-size: 15px!important;
        }
        .swal2-cancel{
            font-size: 16px!important;
        }
        .swal2-confirm {
            font-size: 16px!important;
        }

    </style>
    <div class="header col-md-12">
        <a href="{{route('admin.batch.create')}}" class="btn btn-primary add-new pull-right">Add New</a>
    </div>
    <div class="content col-md-12">
        <div class="panel panel-flat">
            <table class="table table-bordered table-hover datatable-responsive data-list" id="myTable">
                <thead>
                    <tr>
                        <th width="5%">Sl.</th>
                        <th width="5%">Course</th>
                        <th width="18%">Batch Number</th>
                        <th width="15%">Weekly Days</th>
                        <th width="18%">Course Price</th>
                        <th width="15%">Total Month</th>
                        <th width="19%">Publish Status</th>
                        <th width="10%" class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!empty($batches))
                    @foreach ($batches as $key => $batch)
                    <tr key = {{$key}}>
                        <td>{{++$key}}</td>
                        <td>
                            {{$batch->course_name}}
                        </td>
                        <td>{{$batch->batch_number}}</td>
                        <td>{{$batch->weekly}}</td>
                        <td>{{$batch->course_price}}</td>
                        <td>{{$batch->total_month}}</td>
                        <td>
                            @if ($batch->status == 1)
                                <span class="text-success"> Published </span>
                            @else
                                <span class="text-warning"> Unpublished </span>
                            @endif
                        </td>
                        <td class="text-center ">
                            {{-- <a link="{{route('admin.designation.edit', [$batch->id])}}" update-link="{{route('admin.designation.update', [$batch->id])}}" class="action-icon edit"><i class="icon-pencil7"></i></a> --}}
                            <a href="{{route('admin.batch.edit', [$batch->id])}}" class="action-icon"><i class="icon-pencil7"></i></a>
                            <a class="action-icon destroy" delete-link="{{route('admin.batch.destroy', [$batch->id])}}">
                                <i class="icon-trash"></i>
                            </a>
                        </td>
                    </tr> 
                    @endforeach
                @else
                    <tr>
                        <td colspan="5">No Data Found!</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>

    <script type="text/javascript">
        $('#myTable').DataTable({
            dom: 'lBfrtip',
                "iDisplayLength": 10,
                "lengthMenu": [ 10, 25,30, 50 ],
        });

        $(document).ready(function() {
            
        });

    </script>
@endsection
