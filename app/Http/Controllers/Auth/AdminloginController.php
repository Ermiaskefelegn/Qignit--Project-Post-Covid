<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;


class AdminloginController extends Controller
{
    public function __construct(){
        $this->middleware('guest:admin')->except('adminlogout',);
    }

    public function showLoginform(){
        return view('auth.admin-login');
    }

    public function login(Request $request){
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);
        if(Auth::guard('admin')->attempt(['email' =>$request->email,'password'=>$request->password],$request->remember)){
            return redirect()->intended(route('admin.dashboard'));
        }
        return redirect()->back()->withInput($request->only('email','remember'));
    }
    public function adminlogout(){
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }
}
