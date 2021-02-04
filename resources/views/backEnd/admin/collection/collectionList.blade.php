@extends('backEnd.admin.layout.main')
@section('panel-title')
Collection List
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
    <div class="col-md-6 col-md-offset-3">
        
    </div>
    <div class="content col-md-12">
        <div class="panel panel-flat">
            {{-- 
             --}}
            <div class="row">
                <div class="col-md-5">
                    <h1>Collection List <span class="text-success">{{$select_month != null ? '' : 'Of '.date('F')}}</span></h1>
                </div>
                <div class="col-md-7">
                    <form class="form-horizontal form-validate-jquery" action="{{ route('admin.collection.list') }}" method="GET">
                        @csrf
                        <div class="form-group row">
                            <div class="col-lg-4 col-md-offset-2" style="padding-top: 15px;">
                                <select name="month" class="form-control" required="required">
                                    <option value="">Select Month</option>
                                    <option {{$select_month == 1 ? 'selected' : ''}} value="1">January</option>
                                    <option {{$select_month == 2 ? 'selected' : ''}} value="2">February</option>
                                    <option {{$select_month == 3 ? 'selected' : ''}} value="3">March</option>
                                    <option {{$select_month == 4 ? 'selected' : ''}} value="4">April</option>
                                    <option {{$select_month == 5 ? 'selected' : ''}} value="5">May</option>
                                    <option {{$select_month == 6 ? 'selected' : ''}} value="6">June</option>
                                    <option {{$select_month == 7 ? 'selected' : ''}} value="7">July</option>
                                    <option {{$select_month == 8 ? 'selected' : ''}} value="8">August</option>
                                    <option {{$select_month == 9 ? 'selected' : ''}} value="9">September</option>
                                    <option {{$select_month == 10 ? 'selected' : ''}} value="10">October</option>
                                    <option {{$select_month == 11 ? 'selected' : ''}} value="11">November</option>
                                    <option {{$select_month == 12 ? 'selected' : ''}} value="12">December</option>
                                </select>
                            </div>
                            <div class="col-lg-4" style="padding-top: 15px;">
                                <select name="year" class="form-control" required="required">
                                    <option value="">Select Year</option>
                                    <option {{$select_year == 2021 ? 'selected' : ''}} value="2021">2021</option>
                                    <option {{$select_year == 2022 ? 'selected' : ''}} value="2022">2022</option>
                                    <option {{$select_year == 2023 ? 'selected' : ''}} value="2023">2023</option>
                                    <option {{$select_year == 2024 ? 'selected' : ''}} value="2024">2024</option>
                                    <option {{$select_year == 2025 ? 'selected' : ''}} value="2025">2025</option>
                                    <option {{$select_year == 2026 ? 'selected' : ''}} value="2026">2026</option>
                                    <option {{$select_year == 2027 ? 'selected' : ''}} value="2027">2027</option>
                                </select>
                            </div>
                            <div class="col-lg-2" style="padding-top: 8px;">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <table class="table table-bordered table-hover datatable-responsive data-list" id="myTable">
                <thead>
                    <tr>
                        <th width="3%">Sl.</th>
                        <th width="37%">Staff Name</th>
                        <th width="20%">Total Admission</th>
                        <th width="20%">Tatal Form</th>
                        <th width="20%">Total Collection</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!empty($staffData))
                        @foreach ($staffData as $key => $data)
                        <tr key = {{$key}}>
                            <td>{{++$key}}</td>
                            <td><a href="{{ route('admin.collection.staffView', [$data->id]) }}">{{$data->name}} </a></td>
                            <td>{{$data->total_admit_student}}</td>
                            <td>{{$data->total_student_form_fillup}}</td>
                            <td>{{$data->collection_amount}} tk</td>
                        </tr> 
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5" style="text-align: center;">No Data Found!</td>
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
