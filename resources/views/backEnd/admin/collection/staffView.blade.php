@extends('backEnd.admin.layout.main')
@section('panel-title')
Show Staff
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
            <div class=" col-md-6">
                <table class="table table-striped table-bordered">
                    <tr>
                        <td>
                            @if ($staff->image == null)
                                <img src="{{ asset('backend/admin/assets/images/user/demo.jpg') }}" width="80" alt="">
                            @else
                                <img src="{{ asset('backend/admin/assets/images/user').'/'.$staff->image }}" width="80" alt="">
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>Name:</td>
                        <td>{{$staff->name}}</td>
                    </tr>
                    <tr>
                        <td>Username:</td>
                        <td>{{$staff->user_name}}</td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td>{{$staff->email}}</td>
                    </tr>
                    <tr>
                        <td>Mobile:</td>
                        <td>{{$staff->mobile}}</td>
                    </tr>
                    <tr>
                        <td>Designation:</td>
                        <td>{{$staff->designation_name}}</td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td>
                            @if ($staff->address == null) <span class='text-warning'>NaN</span>
                            @else {{$staff->address}}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td>
                            @if ($staff->gender == 1) Male
                            @elseif($staff->gender == 2) Female
                            @else Others
                            @endif
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            
        });

    </script>
@endsection
