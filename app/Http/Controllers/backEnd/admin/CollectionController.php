<?php

namespace App\Http\Controllers\backEnd\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Staff;
use App\StudentRegistration;

class CollectionController extends Controller
{
    public function list(Request $request)
    {
        $selected_month = $request->month ? '0'.$request->month : date('m');
        $selected_year = $request->year ? $request->year : date('Y');

        $from_date = $selected_year.'-'.$selected_month.'-'.'01';
        $to_date = $selected_year.'-'.$selected_month.'-'.'31';

        $data['select_month'] = $request->month; 
        $data['select_year'] = $request->year; 
        
        $data['staffData'] = $staffData = Staff::select('id', 'name')->valid()->get();

        foreach ($staffData as $staff) {
            $staff->total_student = StudentRegistration::valid()
                                    ->where('staff_id', $staff->id)
                                    ->whereDate('created_at','>=', $from_date)
                                    ->whereDate('created_at','<=', $to_date)
                                    ->count();
            $staff->collection_amount = StudentRegistration::valid()
                                        ->where('staff_id', $staff->id)
                                        ->whereDate('created_at','>=', $from_date)
                                        ->whereDate('created_at','<=', $to_date)
                                        ->sum('paid_amount');
            $staff->total_student_form_fillup = StudentRegistration::valid()
                                            ->where('staff_id', $staff->id)
                                            ->whereDate('created_at','>=', $from_date)
                                            ->whereDate('created_at','<=', $to_date)
                                            ->where('payment_status', 0)
                                            ->count();
            $staff->total_admit_student = StudentRegistration::valid()
                                        ->where('staff_id', $staff->id)
                                        ->whereDate('created_at','>=', $from_date)
                                        ->whereDate('created_at','<=', $to_date)
                                        ->where('payment_status', '!=', 0)
                                        ->count();
        }

        
        // echo "<pre>";
        // print_r($staffData->toArray());
        return view('backEnd.admin.collection.collectionList', $data);
    }
    public function staffView($id)
    {
        $data['staff'] = Staff::join('designations', 'designations.id', 'staff.designation_id')
                        ->select('staff.*', 'designations.name as designation_name')
                        ->where('staff.id', $id)
                        ->where('staff.valid', 1)
                        ->orderBy('id', 'DESC')
                        ->first();

        return view('backEnd.admin.collection.staffView', $data);
    }
}
