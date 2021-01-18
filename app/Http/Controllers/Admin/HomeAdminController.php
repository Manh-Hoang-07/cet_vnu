<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeAdminController extends Controller
{
    public function index()
    {
        $user = Auth::guard('admin')->user();
        return view('admin.dashboard')->with('user',$user);
    }
}