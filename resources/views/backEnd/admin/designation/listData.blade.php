@extends('backEnd.admin.layout.main')
@section('panel-title')
Designation
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
    <div class="content">
        <div class="panel panel-flat">
            <div class="panel-body">
                <form class="form-horizontal form-validate-jquery" action="{{route('admin.designation.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-lg-2"> Designation Name <span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <input type="text" name="name" id="name" class="form-control" required="required" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="text-left col-md-offset-2">
                            <button type="submit" class="btn btn-primary" id="submit">Submit <i class="icon-arrow-right14 position-right"></i></button>
                            <button type="reset" class="btn btn-danger" id="reset">Reset <i class="icon-reload-alt position-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="panel panel-flat">
            <table class="table table-bordered table-hover datatable-responsive data-list" id="myTable">
                <thead>
                    <tr>
                        <th width="5">Sl.</th>
                        <th >Name</th>
                        <th width="10">Activation</th>
                        <th width="10" class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!empty($designations))
                    @foreach ($designations as $key => $designation)
                    <tr key = {{$key}}>
                        <td>{{++$key}}</td>
                        <td>{{$designation->name}}</td>
                        <td>
                            @if ($designation->valid==1)
                            <span class="label label-success">Active</span>
                            @else 
                            <span class="label label-danger">Inactive</span>
                            @endif
                        </td>
                        <td class="text-center ">
                            {{-- <a link="{{route('admin.designation.edit', [$designation->id])}}" update-link="{{route('admin.designation.update', [$designation->id])}}" class="action-icon edit"><i class="icon-pencil7"></i></a> --}}
                            <a href="{{route('admin.designation.edit', [$designation->id])}}" class="action-icon"><i class="icon-pencil7"></i></a>
                            <a class="action-icon destroy" delete-link="{{route('admin.designation.destroy', [$designation->id])}}">
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
