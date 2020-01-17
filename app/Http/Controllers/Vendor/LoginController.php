<?php

namespace App\Http\Controllers\Vendor;

use App\Model\Vendor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vendor.login');
    }

    public function login(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'username'  => 'required|exists:vendor,username',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        // return  bcrypt($request->password);

        $vender_status=Vendor::select('status')->where('username',$request->username)->first();
        if($vender_status->status = "1")
        {
            dd(Auth::guard('vendor')->attempt(['username' => $request->username, 'password' => $request->password]));
            if(Auth::guard('vendor')->attempt(['username' => $request->username, 'password' => $request->password]))
            {
                return "yes";
                return redirect()->intended(route('vendor.index'));
            }else{
                return "no";
            return  redirect()->back()->with(['status','Username/Password is invalid']);
            }
        }else {
            return  redirect()->back()->with(['status','Vendor is Not Active Yet']);
        }

    }

    public function logout()
    {
        $Logout=Auth::guard('vendor')->logout();
        // Auth::logout();

        return  redirect()->route('vendor');
    }
}
