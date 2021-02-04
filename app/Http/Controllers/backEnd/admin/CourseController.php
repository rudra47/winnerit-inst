<?php

namespace App\Http\Controllers\backEnd\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Course;
use Validator;

class CourseController extends Controller
{
    public function index()
    {
        $data['courses'] = Course::where('valid', 1)->get();
        return view('backEnd.admin.course.listData', $data);
    }

    public function create()
    {
        return view('backEnd.admin.course.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($validator->passes()) {
            if ($request->hasFile('image')) {
                $imageName = 'course'.time().'.'.$request->image->extension();  
                $request->image->move(public_path('backEnd/admin/assets/uploads/course'), $imageName);

                Course::create([
                    'name' => $request->name,
                    'description' => $request->description,
                    'image' => $imageName
                ]);
            }else{
                Course::create([
                    'name' => $request->name,
                    'description' => $request->description
                ]);
            }

            toast('Course Created Successfully','success');
            return redirect()->route('admin.course.index');
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
        $data['course'] = Course::where('id', $id)->select('courses.id','courses.name', 'courses.description', 'courses.image', 'courses.status')->first();
        return view('backEnd.admin.course.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            // 'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            // 'status' => 'numeric'
        ]);

        if ($validator->passes()) {
            if ($request->hasFile('image')) {
                $imageName = 'course'.time().'.'.$request->image->extension();  
                $request->image->move(public_path('backEnd/admin/assets/uploads/course'), $imageName);

                Course::where('id', $id)->update([
                    'name' => $request->name,
                    'description' => $request->description,
                    'image' => $imageName,
                    'status' => $request->status
                ]);
            }else{
                Course::where('id', $id)->update([
                    'name' => $request->name,
                    'description' => $request->description,
                    'status' => $request->status
                ]);
            }

            toast('Course Updated Successfully','success');
            return redirect()->route('admin.course.index');
        }
        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }
    }

    public function destroy($id)
    {
        $user = Course::find($id);
        $user->delete();
    }
}
