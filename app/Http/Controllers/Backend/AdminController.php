<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login ()
    {
        return view ('backend.login');
    }

    public function loginCheck (Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        if(Auth::attempt(['email'=>$email, 'password'=>$password, 'role'=>1])){
            return redirect ('/admin/dashboard');
        }

        else{
            return redirect()->back();
        }
    }

    public function dashboard ()
    {
        if(Auth::user()){
            if(Auth::user()->role ==1){
                return view ('backend.admin.dashboard');
            }
        }

        else{
            return redirect ('/admin/login');
        }
    }
}
