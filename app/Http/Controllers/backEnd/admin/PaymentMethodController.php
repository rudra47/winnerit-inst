<?php

namespace App\Http\Controllers\backEnd\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PaymentMethod;
use Validator;

class PaymentMethodController extends Controller
{
    public function index()
    {
        $data['paymentMethods'] = PaymentMethod::valid()->orderBy('id', 'DESC')->get();
        return view('backEnd.admin.paymentMethod.listData',$data); 
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
            PaymentMethod::create([
                'name' => $request->name
            ]);

            toast('Payment Method Created Successfully','success');
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
        $data['paymentMethod'] = PaymentMethod::where('id', $id)->valid()->first();
        // return response()->json($data);
        return view('backEnd.admin.paymentMethod.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required'
        ]);

        if ($validator->passes()) {
            PaymentMethod::where('id', $id)->update([
                'name' => $request->name
            ]);

            toast('Payment Method Update Successfully','success');
            return redirect()->route('admin.paymentMethod.index');
        }
        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }
    }

    public function destroy($id)
    {
        $user = PaymentMethod::find($id);
        $user->delete();
    }
}
