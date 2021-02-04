<?php

namespace App\Http\Controllers\backEnd\provider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Toastr;
use App\Admin;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['admins'] = Admin::valid()->get();
        return view('backEnd.provider.admin.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backEnd.provider.admin.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required',
            'email' => 'required|unique:admins',
            // 'phone'   => 'required',
            'address'   => 'required'

        ]);

        // if ($request->role_id == 1) {
        //     Toastr::warning('Access Denied!');
        //     return back();
        // }

        // $x = ImageManager::upload('admin/', 'png', 'employee_image_modal');

        DB::table('admins')->insert([
            'name'          => $request->name,
            'email'         => $request->email,
            'address'       => $request->address,
            'created_at'    => now(),
            'updated_at'    => now(),
        ]);

        Toastr::success('Admin added successfully!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
