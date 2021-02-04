<?php

namespace App\Http\Controllers\backEnd\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Batch;
use App\Course;
use Validator;

class BatchController extends Controller
{
    public function index()
    {
        $data['batches'] = Batch::join('courses', 'courses.id','=','batches.course_id')
                        ->select('batches.*','courses.name as course_name')
                        ->where('batches.valid', 1)
                        ->get();
        
        return view('backEnd.admin.batch.listData', $data);
    }

    public function create()
    {
        $data['courses'] = Course::where('status', 1)->where('valid', 1)->get();
        return view('backEnd.admin.batch.create', $data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'course_id'    => 'required',
            'batch_number' => 'required',
            'weekly'       => 'required|numeric',
            'course_price' => 'required|numeric',
            'total_month'  => 'required|numeric',
            'status'       => 'required|numeric'
        ]);

        if ($validator->passes()) {
            Batch::create([
                'course_id'    => $request->course_id,
                'batch_number' => $request->batch_number,
                'weekly'       => $request->weekly,
                'course_price' => $request->course_price,
                'total_month'  => $request->total_month,
                'status'       => $request->status
            ]);
            
            toast('Batch Created Successfully','success');
            return redirect()->route('admin.batch.index');
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
        $data['batch'] = Batch::join('courses', 'courses.id','=','batches.course_id')
                        ->select('batches.*','courses.name as course_name')
                        ->where('batches.id', $id)
                        ->where('batches.valid', 1)
                        ->first();
        $data['courses'] = Course::where('status', 1)->where('valid', 1)->get();
        
        return view('backEnd.admin.batch.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'course_id'    => 'required',
            'batch_number' => 'required',
            'weekly'       => 'required|numeric',
            'course_price' => 'required|numeric',
            'total_month'  => 'required|numeric',
            'status'       => 'required|numeric'
        ]);

        if ($validator->passes()) {
            Batch::where('id', $id)->update([
                'course_id'    => $request->course_id,
                'batch_number' => $request->batch_number,
                'weekly'       => $request->weekly,
                'course_price' => $request->course_price,
                'total_month'  => $request->total_month,
                'status'       => $request->status
            ]);

            toast('Batch Update Successfully','success');
            return redirect()->route('admin.batch.index');
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
        $user = Batch::find($id);
        $user->delete();
    }
}
