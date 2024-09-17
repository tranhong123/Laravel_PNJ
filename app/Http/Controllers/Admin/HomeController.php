<?php

namespace App\Http\Controllers\Admin;

use App\Utilities\Constant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getLogin()
    {
        return view('admin.login');
    }

    public function postLogin(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            'level' => 0
        ];
        $remember = $request->remember;
    
        if (Auth::attempt($credentials, $remember)) {
            return redirect()->route('admin.user.index');
        } else {
            return 'Tài khoản mật khẩu không đúng - vui lòng đăng nhập lại';
        }
    }
    
}
