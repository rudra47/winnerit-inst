@extends('backEnd.admin.layout.main')
@section('panel-title')
Course List
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
    <div class="content col-md-12">
        <div class="panel panel-flat">
            <table class="table table-bordered table-hover datatable-responsive data-list" id="myTable">
                <thead>
                    <tr>
                        <th width="3%">Sl.</th>
                        <th width="10%">Student Id</th>
                        <th width="10%">Admission Time</th>
                        <th width="27%">Name</th>
                        <th width="10%">Course Name</th>
                        <th width="10%">Mobile</th>
                        <th width="10%">Refer Name</th>
                        <th width="5%">Gateway</th>
                        <th width="5%">Payment</th>
                        <th width="5%">View</th>
                        <th width="5%" class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!empty($students))
                    @foreach ($students as $key => $student)
                    <tr key = {{$key}}>
                        <td>{{++$key}}</td>
                        <td> {{$student->student_id}} </td>
                        <td>{{$student->created_at->format('d M Y')}}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->course_name}}</td>
                        <td>{{$student->mobile_number}}</td>
                        <td>{{$student->staff_name}}</td>
                        <td>{{$student->payment_methods_name}}</td>
                        <td>
                            {{-- @if ($student->payment_status == 0) btn-danger
                                @elseif ($student->payment_status == 1) btn-success
                                @else btn-warning
                                @endif
                            @else
                                <span class="text-warning"> Unpaid </span>
                            @endif --}}
                            <a href="{{route('admin.student.paymentUpdate', [$student->id])}}" class="btn @if ($student->payment_status == 0) btn-danger @elseif ($student->payment_status == 1) btn-success @else btn-warning @endif btn-xs paymentMethodClass">@if ($student->payment_status == 0) Unpaid @elseif ($student->payment_status == 1) Paid @else Due @endif </a>
                        </td>
                        {{-- <td>
                            @if ($student->status == 1)
                                <span class="text-success"> Published </span>
                            @else
                                <span class="text-warning"> Unpublished </span>
                            @endif
                        </td> --}}
                        <td>
                            <button type="button" class="btn btn-info btn-xs studentViewClass" url="{{route('admin.student.show', [$student->id])}}" data="{{$student->id}}" data-toggle="modal" data-target="#studentView">View </button>
                        </td>
                        <td class="text-center ">
                            <a href="{{route('admin.student.edit', [$student->id])}}" class="action-icon"><i class="icon-pencil7"></i></a>
                            <a class="action-icon destroy" delete-link="{{route('admin.student.destroy', [$student->id])}}">
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

    <!-- Student View -->
    <div id="studentView" class="modal fade"></div>
    <!-- /Student View -->
    <!-- Payment Method -->
    <div id="paymentMethod" class="modal fade"></div>
    <!-- /Payment Method -->

    <script type="text/javascript">
        $('#myTable').DataTable({
            dom: 'lBfrtip',
                "iDisplayLength": 10,
                "lengthMenu": [ 10, 25,30, 50 ],
        });

        $(document).ready(function() {
            $('.studentViewClass').click(function (e) {
                e.preventDefault();
                let studentId = $(this).attr('data');
                let route = $(this).attr('url');
                
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: route,
                    type: 'get', 
                    success: function(result) {
                        $('#studentView').html(result);
                    }
                });
            });
            // $('.paymentMethodClass').click(function (e) {
            //     e.preventDefault();
            //     // let studentId = $(this).attr('data');
            //     let route = $(this).attr('url');

            //     console.log(route);

            //     $.ajaxSetup({
            //         headers: {
            //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //         }
            //     });
            //     $.ajax({
            //         url: route,
            //         type: 'get', 
            //         success: function(result) {
            //             $('#paymentMethod').html(result);
            //         }
            //     });
            // });
        });

    </script>
@endsection
