<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header bg-info">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h6 class="modal-title">Student Info</h6>
        </div>

        <div class="modal-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>{{$student->student_id}}</th>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <th>{{$student->name}}</th>
                    </tr>
                    <tr>
                        <th>Father's Name</th>
                        <th>{{$student->father_name}}</th>
                    </tr>
                    <tr>
                        <th>Mother's Name</th>
                        <th>{{$student->mother_name}}</th>
                    </tr>
                    <tr>
                        <th>Mobile Number</th>
                        <th>{{$student->mobile_number}}</th>
                    </tr>
                    <tr>
                        <th>Date Of Birth</th>
                        <th>{{$student->date_of_birth}}</th>
                    </tr>
                    <tr>
                        <th>Batch Number</th>
                        <th>{{$student->batch_number}}</th>
                    </tr>
                    <tr>
                        <th>Course Name</th>
                        <th>{{$student->course_name}}</th>
                    </tr>
                    <tr>
                        <th>Gender</th>
                        <th>
                            @if ($student->gender == 1)
                                <span> Male </span>
                            @elseif($student->gender == 2)
                                <span> Female </span>
                            @elseif($student->gender == 3)
                                <span> Others </span>
                            @endif
                        </th>
                    </tr>
                    <tr>
                        <th>Qualification</th>
                        <th>{{$student->qualification}}</th>
                    </tr>
                    <tr>
                        <th>Payment Status</th>
                        <th>
                            @if ($student->payment_status == 1)
                                <span class="text-success"> Paid </span>
                            @elseif ($student->payment_status == 2)
                            <span class="text-warning"> Due </span>
                            @else
                                <span class="text-danger"> Unpaid </span>
                            @endif
                        </th>
                    </tr>
                    <tr>
                        <th>Qualification</th>
                        <th>{{$student->qualification}}</th>
                    </tr>
                </thead>
            </table>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>