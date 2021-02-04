<?php

namespace App\Http\Controllers\backEnd\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Validator;
use Hash;
Use Alert;
use App\AdminUserInfo;
use App\Staff;
use App\Admin;
use App\StudentRegistration;
use Helper;


class AdminController extends Controller
{
    public function home()
    {
        // $data['staffData'] = $staffData = Staff::join('student_registrations', 'staff.id', '=', 'student_registrations.staff_id')
        //     ->select('staff.id', 'staff.name', 'student_registrations.admit_status')
        //     ->where('staff.valid',1)
        //     ->where('student_registrations.admit_status',1)
        //     ->orderBy('student_registrations.admit_status', 'DESC')
        //     ->count();
        
        // // $data['admitCount'] = $aa = StudentRegistration::valid()
        // //     ->select('staff_id as s_id')
        // //     ->where('admit_status', 1)
        // //     ->groupBy('s_id')
        // //     ->get();

        // echo "<pre>";
        // print_r($staffData);
        // dd();













        $data['allStaff'] = $allStaff = Staff::select('id', 'name')->valid()->get();

        foreach ($allStaff as $staff) {
            $staff->total_admit = StudentRegistration::select('admit_status')->valid()
                ->where('admit_status', 1)
                ->where('staff_id', $staff->id)
                ->count();
        }
        // dd($allStaff);
        // $totalStaff = $allStaff->toArray();

        // $sort = array();
        // foreach($totalStaff as $k=>$v) {
        //     $sort['total_admit'][$k] = $v['total_admit'];
        //     $sort['name'][$k] = $v['name'];
        // }
        // array_multisort($sort['total_admit'], SORT_DESC, $totalStaff);

        // $array= array_combine($sort['name'], $sort['total_admit']);
        // $data['result'] = array_slice($array, 0, 3); 

        // $allStaff->sortByDesc('id');
        // $allStaff->sortBy(function($item) {
        //     return $item->name;;
        // }, true);

        // dd($allStaff);
    	return view('backEnd.admin.home', $data);
    }

    public function login()
    {
        return view('backEnd.admin.login');
    }

    public function redirectToLogin()
    {
    	return redirect()->route('admin.login');
    }
    
    public function postLogin(Request $request)
    {
    	 $data = array(
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'valid'    => 1
        );

        $remember_me = $request->has('remember_me') ? true : false; 

        if (Auth::guard('admin')->attempt($data, $remember_me)) {
            return redirect()->route('admin.home');
        } else {
            return redirect()->route('admin.login')->with('errors', 'Something is Wrong');
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

    public function resetPassword(){
        return view('backEnd.admin.resetPassword');
    }

    public function resetEmail(Request $request){

        $data =  $request->all();
        $admin = Admin::where('email', '=', $request->email)->first();
        if ($admin === null) {
            toast('Wrong Mail','error');
            return view('backEnd.admin.resetPassword');
        }else{
             $details = [
                'link' => url('admin/resetPasswordShow/'.$admin->id),
                'userName' => $admin->name,
            ];

            \Mail::to($admin->email)->send(new \App\Mail\ResetPassword($details));
            Alert::success("Please cheaqe Your Mail.", "Hi! $admin->name We will send you instructions in email");
            return view('backEnd.admin.resetPassword');
        }

    }

    public function resetPasswordShow($id){

        $data = array(); 
        $data['id'] = $id;
        return view('backEnd.admin.updatePassword',$data); 
    }

    public function updatePassword(Request $request, $id){

        $validator = Validator::make($request->all(), [
            'password' => 'required|confirmed|min:6',
        ]);
        $hashedPassword = Hash::make($request->password);

        if ($validator->passes()) {
          
            Admin::find($id)->update([
                "password"        => $hashedPassword,
            ]);

            return redirect()->route('admin.login');
        }
        if ($validator->fails()) {
        return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }
       
    }
}
