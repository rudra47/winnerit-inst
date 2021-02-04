<?php

namespace App\Http\Controllers\backEnd\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Designation;
use App\Staff;
use Validator;
use Auth;
use Str;
use Helper;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['staffs'] = Staff::join('designations', 'designations.id', 'staff.designation_id')
                          ->select('staff.*', 'designations.name as designation_name')
                          ->where('staff.valid', 1)
                          ->orderBy('id', 'DESC')
                          ->get();
        return view('backEnd.admin.staff.listData',$data); 
    }

    public function create()
    {
        $data['designations'] = Designation::select('id', 'name')->valid()->orderBy('id', 'DESC')->get();
        return view('backEnd.admin.staff.create', $data); 
    }

    public function store(Request $request)
    {
        $user_name = Helper::username_generate("witstaff-");
        $password = Helper::password_generate("witst@");

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'mobile' => 'required',
            'designation_id' => 'required|numeric',
            'gender' => 'required|numeric',
        ]);

        if ($validator->passes()) {
            Staff::create([
                'user_name' => $user_name,
                'password' => $password,
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'designation_id' => $request->designation_id,
                'gender' => $request->gender
            ]);

            toast('Staff Created Successfully','success');
            // return redirect()->route('admin.designation.index');
            return redirect()->route('admin.staff.index');
        }
        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }
    }

    public function show($id)
    {
        $data['staff'] = Staff::join('designations', 'designations.id', 'staff.designation_id')
                        ->select('staff.*', 'designations.name as designation_name')
                        ->where('staff.id', $id)
                        ->where('staff.valid', 1)
                        ->orderBy('id', 'DESC')
                        ->first();
                        
        return view('backEnd.admin.staff.show', $data);
    }

    public function edit($id)
    {
        $data['designations'] = Designation::select('id', 'name')->valid()->orderBy('id', 'DESC')->get();
        $data['staff'] = Staff::select('staff.*')
                                ->where('staff.id', $id)
                                ->where('staff.valid', 1)
                                ->orderBy('id', 'DESC')
                                ->first();
        return view('backEnd.admin.staff.edit', $data); 
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'mobile' => 'required',
            'designation_id' => 'required|numeric',
            'gender' => 'required|numeric',
            'password' => 'required'
        ]);

        if ($validator->passes()) {
            Staff::where('id', $id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'designation_id' => $request->designation_id,
                'gender' => $request->gender,
                'password' => $request->password,
            ]);

            toast('Staff Updated Successfully','success');
            // return redirect()->route('admin.designation.index');
            return redirect()->route('admin.staff.index');
        }
        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Staff::find($id);
        $user->delete();
    }
    //change staff or support password
    public function change_pass()
    {
        $data['password'] = Helper::password_generate("witst@");
        return $data;
    }
    
}
