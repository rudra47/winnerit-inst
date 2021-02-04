@extends('backEnd.admin.layout.main')
@section('panel-title')
Staff List
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
        <a href="{{route('admin.staff.create')}}" class="btn btn-primary add-new pull-right">Add New</a>
    </div>
    <div class="content col-md-12">
        <div class="panel panel-flat">
            <table class="table table-bordered table-hover datatable-responsive data-list" id="myTable">
                <thead>
                    <tr>
                        <th width="5">Sl.</th>
                        <th width="10">User Name</th>
                        <th width="10">Name</th>
                        <th width="20">Email</th>
                        <th width="10">Mobile</th>
                        <th width="10">Designation</th>
                        <th width="10">View</th>
                        <th width="10" class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!empty($staffs))
                    @foreach ($staffs as $key => $staff)
                    <tr key = {{$key}}>
                        <td>{{++$key}}</td>
                        <td>{{$staff->user_name}}</td>
                        <td>{{$staff->name}}</td>
                        <td>{{$staff->email}}</td>
                        <td>{{$staff->mobile}}</td>
                        <td>{{$staff->designation_name}}</td>
                        <td>
                            <a href="{{ route('admin.staff.show', [$staff->id]) }}" class="btn btn-success">View</a>
                        </td>
                        <td class="text-center ">
                            {{-- <a link="{{route('admin.designation.edit', [$staff->id])}}" update-link="{{route('admin.designation.update', [$staff->id])}}" class="action-icon edit"><i class="icon-pencil7"></i></a> --}}
                            <a href="{{route('admin.staff.edit', [$staff->id])}}" class="action-icon"><i class="icon-pencil7"></i></a>
                            <a class="action-icon destroy" delete-link="{{route('admin.staff.destroy', [$staff->id])}}">
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
