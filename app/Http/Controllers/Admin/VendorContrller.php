<?php

namespace App\Http\Controllers\Admin;
use App\Model\Vendor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class VendorContrller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Vendor::select()->get();
        return view('admin.vendor-details.index',['vendor_list'=>$data]);
    }

    public function statuschange(Request $request)
    {
        $find_model = Vendor::findorfail($request->id);
        $find_model->status = $request->status;
        $find_model->save();

        if($find_model){
            return "success";
        }else{
            return "error";
        }
    }

    public function create()
    {
        return view('admin.vendor-details.create');
    }

    public function store(request $request)
    {
        // return $request;
        $validator = Validator::make($request->all(), [
            'username' => 'required|max:20',
            'first_name' => 'required',
            'last_name' => 'required',
            'email'   => 'required|email',
            'phone_number'  =>  'required|min:10|max:10',
            'company_name'  =>  'required',
            'address'  =>  'required',
            'city'  =>  'required',
            'state'  =>  'required',
            'password'  =>  'required',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();

        }

        $data = new Vendor;
        $data->username = $request->username;
        $data->password = $request->password;
        $data->first_name = $request->first_name;
        $data->last_name= $request->last_name;
        $data->email = $request->email;
        $data->phone_number = $request->phone_number;
        $data->company_name = $request->company_name;
        $data->profile_picture = "vendor\images\admin-profile\admin_KZsCR.jpg";
        $data->logo = "vendor\images\products\product-1.jpg";
        $data->address = $request->address;
        $data->city = $request->city;
        $data->state = $request->state;
        $data->status = "0";
        $data->remember_token=str_random(60);
        // return $data;
        $data->save();
        return redirect()->route('vendoradmin-detail');
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

    public function edit($id)
    {
        $edit= Vendor::findorfail($id);
        return view('admin.vendor-details.edit',['edit'=>$edit]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|max:20',
            'first_name' => 'required',
            'last_name' => 'required',
            'email'   => 'required|email',
            'phone_number'  =>  'required|min:10|max:10',
            'company_name'  =>  'required',
            'address'  =>  'required',
            'city'  =>  'required',
            'state'  =>  'required',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator);

        }

        $data = Vendor::findorfail($id);
        $data->username = $request->username;
        $data->first_name = $request->first_name;
        $data->last_name= $request->last_name;
        $data->email = $request->email;
        $data->phone_number = $request->phone_number;
        $data->company_name = $request->company_name;
        $data->address = $request->address;
        $data->city = $request->city;
        $data->state = $request->state;
        $data->status = "0";
        // return $data;
        $data->save();
        return redirect()->route('vendoradmin-detail');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(request $request)
    {
        $image=$request->profilepicture;
        $logo=$request->logo;
        unlink(public_path().'/'.$image);
        unlink(public_path().'/'.$logo);
        $removevendor =  Vendor::findorfail($request->id);
        $removevendor->delete();

        // return $delete;
        if($removevendor){
            return "success";
        }else{
            return "error";
        }
    }
}
