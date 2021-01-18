<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if ($request->getMethod() == 'GET') {
            return view('user.auth.login');
        }

        $credentials = $request->only(['email', 'password']);
        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        } 
        else if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('all.events');
        } else  {
            return redirect()->back()->withInput();
        }
    }

    public function logout() {
        if(Auth::guard('admin')) {
            Auth::logout();
            return redirect()->route('login');
        }
        Auth::logout();
        return redirect()->route('cetinfo');
    }

    public function registration()
    {
        return view('user.auth.registration');
    }

    public function save_registration(Request $request) {
        $user = array();
        $user['name'] = $request->name;
        $user['email'] = $request->email;
        $user['password'] = Hash::make($request->password);

        User::insert($user);
        return redirect()->route('login')->with('success','Đăng ký thành công');
    }
}