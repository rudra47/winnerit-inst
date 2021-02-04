<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Staff;
use App\PaymentMethod;
use App\StudentRegistration;
use App\Batch;
use Helper;

class WebController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }
    public function registration()
    {
        $data['staffs'] = Staff::select('staff.name', 'staff.id')->valid()->get();
        $data['paymentMethods'] = PaymentMethod::select('payment_methods.name', 'payment_methods.id')->valid()->get();
        $data['batches'] = Batch::select('batch_number', 'id')
                           ->valid()
                           ->where('status', 1)
                           ->get();
        return view('frontend.registration', $data);
    }

    public function registrationAction(Request $request)
    {
        $input = $request->all();
        $student = StudentRegistration::valid()->orderBy('id', 'DESC')->first();
        $validator = Validator::make($input, [
            'name'              => 'required', 
            'father_name'       => 'required', 
            'mother_name'       => 'required', 
            'mobile_number'     => 'required', 
            'date_of_birth'     => 'required', 
            'batch_id'          => 'required', 
            'gender'            => 'required', 
            'qualification'     => 'required', 
            'payment_getway_id' => 'required', 
            'staff_id'          => 'required'
        ]);

        $batch  = Batch::valid()->where('id', $request->batch_id)->first();

        if ($validator->passes()) {
            StudentRegistration::create([
                'student_id'        => isset($student->student_id) ? $student->student_id+1 : 2000,
                'name'              => $request->name, 
                'father_name'       => $request->father_name, 
                'mother_name'       => $request->mother_name, 
                'mobile_number'     => $request->mobile_number, 
                'date_of_birth'     => $request->date_of_birth, 
                'batch_id'          => $request->batch_id, 
                'gender'            => $request->gender, 
                'qualification'     => $request->qualification, 
                'payment_getway_id' => $request->payment_getway_id, 
                'staff_id'          => $request->staff_id,
                'course_id'         => $batch->course_id,
                'due_amount'        => $batch->course_price,
                'total_amount'      => $batch->course_price,
                'admit_status'      => 0
            ]);

            toast('Registration Successfully','success');
            // return redirect()->route('admin.designation.index');
            return redirect()->route('registrationSuccess');
        }
        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        // return redirect()->route('registration');
    }
    public function registrationSuccess()
    {
        $data['message'] = 'You have successfully done your registration.'; 
        return view('frontend.registrationSeccessPage', $data);
    }
    public function contactUs(Request $request)
    {
        $details = [
            'link' => url('admin/resetPasswordShow/'),
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ];

        \Mail::to("rudra1055@gmail.com")->send(new \App\Mail\ContactUsMail($details));
    }
}
