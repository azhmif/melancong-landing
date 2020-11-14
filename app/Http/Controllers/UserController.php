<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserModel;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Contracts\Auth\Guard;

class UserController extends Controller
{
    public function index()
    {
        $data2 = UserModel::all();
        $data = array(
            'title'     => 'User',
            'menu'      => 0,
            'title2'    => 'Melancong Wisata | User'
        );

        return view('admin/user', [
            'tools' => $data,
            'data2' => $data2
        ]);
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $updated = UserModel::where('id', $id)->update([
            'email'     => $request->email,
            'username'   => $request->username,
        ]);

        Session::flash('sukses', 'Data User Berhasil Diganti');
        return redirect('user');
    }
    public function password(Request $request)
    {
        $id = $request->id;
        $baru = Hash::make($request->pass_baru);
        $updated = UserModel::where('id', $id)->update([
            'password'  => $baru,
        ]);

        Session::flash('sukses', 'Password Berhasil Diganti');
        return redirect('user');
    }
}
