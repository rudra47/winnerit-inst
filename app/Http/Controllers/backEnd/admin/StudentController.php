<?php

namespace App\Http\Controllers\backEnd\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Staff;
use App\Batch;
use App\PaymentMethod;
use App\StudentRegistration;
use Validator;
use PDF;

class StudentController extends Controller
{
    public function index()
    {
        $data['students']=StudentRegistration::join('staff', 'staff.id','=','student_registrations.staff_id')
                        ->join('payment_methods', 'payment_methods.id','=','student_registrations.payment_getway_id')
                        ->join('batches', 'batches.id','=','student_registrations.batch_id')
                        ->join('courses', 'courses.id','=','batches.course_id')
                        ->select('student_registrations.*', 'staff.name as staff_name', 'payment_methods.name as payment_methods_name', 'batches.batch_number', 'courses.name as course_name')
                        ->where('student_registrations.valid', 1)
                        ->orderBy('id', 'DESC')
                        ->get();
                        
        return view('backEnd.admin.student.listData', $data);
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        
    }

    public function show($id)
    {
        $data['student']=StudentRegistration::join('staff', 'staff.id','=','student_registrations.staff_id')
                        ->join('payment_methods', 'payment_methods.id','=','student_registrations.payment_getway_id')
                        ->join('batches', 'batches.id','=','student_registrations.batch_id')
                        ->join('courses', 'courses.id','=','batches.course_id')
                        ->select('student_registrations.*', 'staff.name as staff_name', 'payment_methods.name as payment_methods_name', 'batches.batch_number', 'courses.name as course_name')
                        ->where('student_registrations.id', $id)
                        ->first();
                        
        return view('backEnd.admin.student.viewModal', $data);
    }

    public function edit($id)
    {
        $data['staffs'] = Staff::select('staff.name', 'staff.id')->valid()->get();
        $data['paymentMethods'] = PaymentMethod::select('payment_methods.name', 'payment_methods.id')->valid()->get();
        $data['batches'] = Batch::select('batches.batch_number', 'batches.id')->valid()->get();
        $data['student']=StudentRegistration::find($id);

        return view('backEnd.admin.student.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
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

        if ($validator->passes()) {
            StudentRegistration::where('id', $id)->update([
                'name'              => $request->name,
                'father_name'       => $request->father_name,
                'mother_name'       => $request->mother_name,
                'mobile_number'     => $request->mobile_number,
                'date_of_birth'     => $request->date_of_birth,
                'batch_id'          => $request->batch_id,
                'gender'            => $request->gender,
                'qualification'     => $request->qualification,
                'payment_getway_id' => $request->payment_getway_id,
                'staff_id'          => $request->staff_id
            ]);

            toast('Student Updated Successfully','success');
            return redirect()->route('admin.student.index');
        }
        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }
    }

    public function destroy($id)
    {
        $user = StudentRegistration::find($id);
        $user->delete();
    }
    public function paymentUpdate($id)
    {
        $data['student'] = StudentRegistration::join('batches', 'batches.id','=','student_registrations.batch_id')
                            ->join('courses', 'courses.id','=','batches.course_id')
                            ->select('student_registrations.payment_status', 'student_registrations.due_amount', 'student_registrations.id', 'student_registrations.paid_amount', 'student_registrations.total_amount', 'batches.course_price', 'batches.batch_number', 'courses.name as course_name')
                            ->where('student_registrations.id', $id)
                            ->where('student_registrations.valid', 1)
                            ->first();
                            
        // $data['paymentMethod'] = StudentRegistration::;
        return view('backEnd.admin.student.paymentUpdate', $data);
    }
    public function paymentAction(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'payment_status' => 'required'
        ]);

        if ($validator->passes()) {
            $studentCalculation = StudentRegistration::select('id', 'due_amount', 'paid_amount', 'total_amount')
                            ->where('id', $id)
                            ->where('valid', 1)
                            ->first();
              
            if ($request->payment_status == 1) {
                StudentRegistration::where('id', $id)->update([
                    'payment_status' => $request->payment_status,
                    'paid_amount'    => $studentCalculation->total_amount,
                    'due_amount'     => 0,
                    'admit_status'   => 1,
                ]);
            }elseif($request->payment_status == 2){
                if ($studentCalculation->due_amount == $request->payable_amount) {
                    StudentRegistration::where('id', $id)->update([
                        'payment_status' => 1,
                        'paid_amount'    => $studentCalculation->total_amount,
                        'due_amount'     => 0,
                    ]);
                }elseif($studentCalculation->due_amount > $request->payable_amount){
                    StudentRegistration::where('id', $id)->update([
                        'payment_status' => $request->payment_status,
                        'paid_amount'    => $studentCalculation->paid_amount + $request->payable_amount,
                        'due_amount'     => $studentCalculation->due_amount - $request->payable_amount,
                        'admit_status'   => 1
                    ]);
                }else{
                    return back()->with('toast_error', "You can't take this amount ")->withInput();
                }
            }
            

            toast('Payment Update Successfully','success');
            return redirect()->route('admin.student.index');
        }
        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }
    }
    public function viewStudentForm($id)
    {
        $data['student'] = StudentRegistration::join('staff', 'staff.id','=','student_registrations.staff_id')
            ->join('payment_methods', 'payment_methods.id','=','student_registrations.payment_getway_id')
            ->join('batches', 'batches.id','=','student_registrations.batch_id')
            ->join('courses', 'courses.id','=','batches.course_id')
            ->select('student_registrations.*', 'staff.name as staff_name', 'payment_methods.name as payment_methods_name', 'batches.batch_number', 'batches.total_month', 'batches.course_price', 'courses.id', 'courses.name as course_name')
            ->where('student_registrations.id', $id)
            ->where('student_registrations.valid', 1)
            ->first();
        // dd($data);
        // $data['paymentMethods'] = PaymentMethod::select('payment_methods.name', 'payment_methods.id')->valid()->get();
        // $data['batches'] = Batch::select('batches.batch_number', 'batches.id')->valid()->get();

        // $data = array_merge($data, ['pdf' => true, 'pdf_url'=>Null]);

        $pdf = PDF::loadView('backEnd.admin.student.viewStudentForm', $data);

        $file_name = 'student-form-'.date('Y-m-d').'.pdf';
        return $pdf->stream($file_name);
        
        // return view('backEnd.admin.student.viewStudentFormaa', $data);
        // return $pdf->stream('result.pdf', array('Attachment'=>0));
    }
    public function viewStudentInvoice($id)
    {
        $data['student'] = StudentRegistration::join('staff', 'staff.id','=','student_registrations.staff_id')
            ->join('payment_methods', 'payment_methods.id','=','student_registrations.payment_getway_id')
            ->join('batches', 'batches.id','=','student_registrations.batch_id')
            ->join('courses', 'courses.id','=','batches.course_id')
            ->select('student_registrations.*', 'staff.name as staff_name', 'payment_methods.name as payment_methods_name', 'batches.batch_number', 'batches.total_month', 'batches.course_price', 'courses.id', 'courses.name as course_name')
            ->where('student_registrations.id', $id)
            ->where('student_registrations.valid', 1)
            ->first();
        // dd($data);
        // $data['paymentMethods'] = PaymentMethod::select('payment_methods.name', 'payment_methods.id')->valid()->get();
        // $data['batches'] = Batch::select('batches.batch_number', 'batches.id')->valid()->get();

        // $data = array_merge($data, ['pdf' => true, 'pdf_url'=>Null]);

        $pdf = PDF::loadView('backEnd.admin.student.studentInvoice', $data);

        $file_name = 'student-invoice-'.date('Y-m-d').'.pdf';
        return $pdf->stream($file_name);
        
        // return view('backEnd.admin.student.viewStudentFormaa', $data);
        // return $pdf->stream('result.pdf', array('Attachment'=>0));
    }
}
