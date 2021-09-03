<?php

namespace App\Http\Controllers\Broadcaster\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('broadcaster.auth.login');
    }
    public function post(Request $req){

        $credentials = $req->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {

            $req->session()->regenerate();

            return redirect()->route('index.navigation.status')->with('success', 'Đăng nhập thành công');
        }

        return back()->withErrors([
            'all' => 'Lỗi xác thực, xin thử lại',
        ]);
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('auth.login.index')->with('warning', 'Đăng xuất thành công');
    }
}
