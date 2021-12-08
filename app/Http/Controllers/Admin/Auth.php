<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Auth extends Controller
{
    //Login---------------------------------
    public function login(){
        $data = [
            'title' => 'Login'
        ];
        return view('admin.auth.login',$data);
    }

    //Logged in-----------------------------
    public function logged_in(Request $request){
        $request->validate([
            'email'    => 'required',
            'password' => 'required'
        ],
        [
            'email.required'    => 'Please Enter Your Email Address',
            'password.required' => 'Please Enter Your Password'
        ]);
        $email = User::where('email',$request->email)->first();
        if($email){
            $password     = $request->password;
            if(Hash::check($password, $email['password'])){
                if($email['is_admin'] ==0){
                    return back()->with('error', 'Sorry, Something went wrong!',3);
                    exit();
                }
                if($email['is_verify'] ==0){
                    return back()->with('error', 'Sorry, Something went wrong!',3);
                    exit();
                }
                $request->session()->push('logged_user', $email['id']);
                return redirect('admin/dashboard');
            }else{
                return back()->with('error','Invalid Email or Password!',3);
            }
        }else{
            return back()->with('error','Invalid Email or Password!',3);
        }
    }

    //Logout
    public function logout(){
        if(Session::has('logged_user')){
            Session::pull('logged_user');
            return redirect('admin')->with('success','You are successfully logged out!',3);
        }
    }
}
