<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProfilModel;
use Session;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    public function index()
    {
        $data2 = ProfilModel::all();
        $data = array(
            'title'     => 'Profile',
            'menu'      => 2,
            'title2'    => 'Profile | Contact'
        );

        return view('admin/contact', [
            'tools' => $data,
            'data2' => $data2
        ]);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'email'     => 'required',
            'telepon'   => 'required',
        ]);
        $id = $request->id;
        $updated = ProfilModel::where('id', $id)->update([
            'email'     => $request->email,
            'telepon'   => $request->telepon,
            'facebook'  => $request->facebook,
            'twitter'   => $request->twitter,
            'instagram' => $request->instagram,
            'youtube'   => $request->youtube,
            'whatsapp'  => $request->whatsapp
        ]);

        $request->session->flash('sukses', 'berhasil');
        return redirect('contact');
    }
}
