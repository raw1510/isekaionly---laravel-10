<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function showLoginForm()
    {
        return view('admin_login');
    }
    
    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        
        $user = DB::table('login_users')->where('username', $username)->where('password', $password)->first();
        if ($user) {
            session(['admin'=>true]);
            return redirect()->route('admin.dashboard');
        }
        else{
            return redirect()->route('admin.login.form')->withErrors(['message'=>'Invalid username and password']);
        }
    
    }
    
    public function sessionDelete(){
        session()->forget('admin');
        return redirect('/admin/login');
    }
}
