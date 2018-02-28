<?php

namespace App\Http\Controllers\Auth\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index()
    {
        Return view('admin.auth.login');
    }

    public
    function authenticate(Request $request)
    {
        $this->validate($request, [
            'email' => 'string|required',
            'password' => 'string|required'
        ]);
        if (Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')])) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('auth.admin.login');


    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect()->route('auth.admin.login');
    }
}
