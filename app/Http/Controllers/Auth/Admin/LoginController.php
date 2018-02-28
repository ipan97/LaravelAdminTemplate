<?php

namespace App\Http\Controllers\Auth\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.auth.login');
    }

    public
    function authenticate(Request $request)
    {
        if (Auth::attempt($request->auth)) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('auth.admin.login');
        }
    }

    public
    function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('auth.admin.login');
    }
}
