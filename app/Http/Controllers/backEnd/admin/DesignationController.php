<?php

namespace App\Http\Controllers\backEnd\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Designation;
use Validator;
use Auth;

class DesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['designations'] = Designation::valid()->orderBy('id', 'DESC')->get();
        return view('backEnd.admin.designation.listData',$data); 
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:designations'
        ]);

        if ($validator->passes()) {
            Designation::create([
                'name' => $request->name
            ]);

            toast('Designation Created Successfully','success');
            // return redirect()->route('admin.designation.index');
            return back();
        }
        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data['designation'] = Designation::where('id', $id)->valid()->first();
        // return response()->json($data);
        return view('backEnd.admin.designation.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required'
        ]);

        if ($validator->passes()) {
            Designation::where('id', $id)->update([
                'name' => $request->name
            ]);

            toast('Designation Update Successfully','success');
            return redirect()->route('admin.designation.index');
        }
        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }
    }

    public function destroy($id)
    {
        $user = Designation::find($id);
        $user->delete();
    }
}
