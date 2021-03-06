<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JumbotronModel;

class JumbotronController extends Controller
{
    public function index()
    {
        $data2 = JumbotronModel::all();
        $data = array(
            'title'     => 'Profile',
            'menu'      => 2,
            'title2'    => 'Profile | Jumbotron'
        );

        return view('admin/jumbotron', [
            'tools' => $data,
            'data2' => $data2
        ]);
    }

    public function update_kata_1(Request $request)
    {
        JumbotronModel::where('id_jumbotron', $request->id1)->update([
            'judul' => $request->judul1,
            'kata'  => $request->kata1,
            'link1' => $request->link11,
            'link2' => $request->link21,
        ]);
        $request->session()->flash('sukses', 'berhasil');
        return redirect('jumbotron');
    }

    public function update_kata_2(Request $request)
    {
        JumbotronModel::where('id_jumbotron', $request->id2)->update([
            'judul' => $request->judul2,
            'kata'  => $request->kata2,
            'link1' => $request->link12,
            'link2' => $request->link22,
        ]);
        $request->session()->flash('sukses', 'berhasil');
        return redirect('jumbotron');
    }

    public function update_kata_3(Request $request)
    {
        JumbotronModel::where('id_jumbotron', $request->id3)->update([
            'judul' => $request->judul3,
            'kata'  => $request->kata3,
            'link1' => $request->link13,
            'link2' => $request->link23,
        ]);
        $request->session()->flash('sukses', 'berhasil');
        return redirect('jumbotron');
    }

    public function update_gambar_1(Request $request)
    {
        $this->validate($request, [
            'gambar1' => 'required|file|image|mimes:jpeg,png,gif,webp|max:10240',
            'lama1' => 'required',
        ]);
        if ($request->hasFile('gambar1')) {
            $gambar = $request->file('gambar1');
            $nama = $gambar->getClientOriginalName();
            $tujuan = 'data/jumbotron/';
            $request->file->delete($tujuan . $request->lama1);
            $gambar->move($tujuan, $nama);
            JumbotronModel::where('id_jumbotron', $request->id1)->update([
                'foto'         => $nama,
            ]);
            $request->session()->flash('sukses', 'berhasil');
            return redirect('jumbotron');
        } else {
            $request->session()->flash('gagal', 'berhasil');
            return redirect('jumbotron');
        }
    }

    public function update_gambar_2(Request $request)
    {
        $this->validate($request, [
            'gambar2' => 'required|file|image|mimes:jpeg,png,gif,webp|max:10240',
            'lama2' => 'required',
        ]);
        if ($request->hasFile('gambar2')) {
            $gambar = $request->file('gambar2');
            $nama = $gambar->getClientOriginalName();
            $tujuan = 'data/jumbotron/';
            $request->file->delete($tujuan . $request->lama2);
            $gambar->move($tujuan, $nama);
            JumbotronModel::where('id_jumbotron', $request->id2)->update([
                'foto'         => $nama,
            ]);
            $request->session()->flash('sukses', 'berhasil');
            return redirect('jumbotron');
        } else {
            $request->session()->flash('gagal', 'berhasil');
            return redirect('jumbotron');
        }
    }

    public function update_gambar_3(Request $request)
    {
        $this->validate($request, [
            'gambar3' => 'required|file|image|mimes:jpeg,png,gif,webp|max:10240',
            'lama3' => 'required',
        ]);
        if ($request->hasFile('gambar3')) {
            $gambar = $request->file('gambar3');
            $nama = $gambar->getClientOriginalName();
            $tujuan = 'data/jumbotron/';
            $request->file->delete($tujuan . $request->lama3);
            $gambar->move($tujuan, $nama);
            JumbotronModel::where('id_jumbotron', $request->id3)->update([
                'foto'         => $nama,
            ]);
            $request->session()->flash('sukses', 'berhasil');
            return redirect('jumbotron');
        } else {
            $request->session()->flash('gagal', 'berhasil');
            return redirect('jumbotron');
        }
    }
}
