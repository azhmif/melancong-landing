<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProfilModel;
use Session;
use File;

class AboutController extends Controller
{
    public function index()
    {
        $data2 = ProfilModel::all();
        $data = array(
            'title'     => 'Profile',
            'menu'      => 2,
            'title2'    => 'Profile | About'
        );

        return view('admin/about', [
            'tools' => $data,
            'data2' => $data2
        ]);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'about' => 'required'
        ]);
        $id = $request->id;
        var_dump($request->about);
        $updated = ProfilModel::where('id', $id)->update([
            'about_us'     => $request->about
        ]);

        Session::flash('sukses', 'Foto Berhasil Diubah');
        return redirect('about');
    }
    public function update_foto(Request $request)
    {
        $this->validate($request, [
            'foto' => 'required|file|image|mimes:jpeg,png,gif,webp|max:3048',
        ]);

        $gambar = $request->file('foto');
        $nama = $gambar->getClientOriginalName();
        $tujuan = 'data/about/';
        File::delete($tujuan . $request->lama);
        $gambar->move($tujuan, $nama);

        ProfilModel::where('id', $request->id)->update([
            'foto' => $nama
        ]);

        Session::flash('sukses', 'Foto Berhasil Diubah');
        return redirect('about');
    }
}
