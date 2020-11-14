<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class AuthController extends Controller
{
    public function index()
    {
        $data = array(
            'title'     => 'Login',
        );
        return view('admin/login', ['tools' => $data]);
    }

    public function login(Request $request)
    {
        $auth = $request->only('email', 'password');
        if (auth()->guard('user')->attempt($auth)) {
            return redirect('admin');
        }
        Session::flash('gagal', 'Gagal Login');
        return redirect()->back();
    }

    public function logout(Request $request)
    {
        auth()->guard('user')->logout();
        return redirect('login');
    }
}
