<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GaleriModel;
use Ramsey\Uuid\Uuid;
use Session;
use File;

class GaleriController extends Controller
{
    public function index()
    {
        $data2 = GaleriModel::all();
        $data = array(
            'title'     => 'Galeri',
            'menu'      => 3,
            'title2'    => 'Galeri Melancong Wisata'
        );

        return view('admin/galeri', [
            'tools' => $data,
            'data2' => $data2
        ]);
    }
    public function create(Request $request)
    {
        if ($request->tipe == 1) {
            $this->validate($request, [
                'foto' => 'required|file|image|mimes:jpeg,png,gif,webp|max:3048',
                'keterangan' => 'required',
            ]);
            if ($request->hasFile('foto')) {
                $gambar = $request->file('foto');
                $nama = $gambar->getClientOriginalName();
                $tujuan = 'data/galeri/';
                $gambar->move($tujuan, $nama);
                GaleriModel::create(
                    [
                        'id_galeri' => Uuid::uuid4()->getHex(),
                        'foto' => $nama,
                        'keterangan' => $request->keterangan,
                        'tipe' => $request->tipe
                    ]
                );
            }
            $request->session->flash('sukses', 'Data Berhasil Ditambahkan');
            return redirect('galeri');
        } elseif ($request->tipe == 2) {
            $link = $request->foto;
            $link1 = substr($link, 0, 24);
            $link2 = substr($link, 32, 11);
            $link = $link1 . 'embed/' . $link2;
            GaleriModel::create(
                [
                    'id_galeri' => Uuid::uuid4()->getHex(),
                    'foto' => $link,
                    'keterangan' => $request->keterangan,
                    'tipe' => $request->tipe
                ]
            );
            $request->session->flash('sukses', 'Data Berhasil Ditambahkan');
            return redirect('galeri');
        }
    }

    public function update_ket(Request $request)
    {
        $this->validate($request, [
            'keterangan'   => 'required'
        ]);
        GaleriModel::where('id_galeri', $request->id)->update([
            'keterangan' => $request->keterangan,
        ]);
        $request->session->flash('sukses', 'Keterangan Berhasil Diubah');
        return redirect('galeri');
    }

    public function update_foto(Request $request)
    {
        if ($request->tipe == 1) {
            $this->validate($request, [
                'foto' => 'required|file|image|mimes:jpeg,png,gif,webp|max:3048',
            ]);
            $gambar = $request->file('foto');
            $nama = $gambar->getClientOriginalName();
            $tujuan = 'data/galeri/';
            $request->file->delete($tujuan . $request->lama);
            $gambar->move($tujuan, $nama);
            GaleriModel::where('id_galeri', $request->id)->update([
                'foto' => $nama
            ]);
            $request->session->flash('sukses', 'Foto Berhasil Diubah');
            return redirect('galeri');
        } elseif ($request->tipe == 2) {
            $link = $request->foto;
            $link1 = substr($link, 0, 24);
            $link2 = substr($link, 32, 11);
            $link = $link1 . 'embed/' . $link2;
            GaleriModel::where('id_galeri', $request->id)->update([
                'foto' => $link
            ]);
            $request->session->flash('sukses', 'Foto Berhasil Diubah');
            return redirect('galeri');
        }
    }

    public function delete($id)
    {
        $data = GaleriModel::where('id_galeri', $id)->get();
        if ($data[0]->tipe == 1) {

            $lama = $data[0]->foto;
            $tujuan = 'data/galeri/';
            File::delete($tujuan . $lama);
            GaleriModel::where('id_galeri', $id)->delete();

            $request->session->flash('sukses', 'Foto Berhasil Dihapus');
            return redirect('galeri');
        } elseif ($data[0]->tipe == 2) {
            GaleriModel::where('id_galeri', $id)->delete();

            $request->session->flash('sukses', 'Foto Berhasil Dihapus');
            return redirect('galeri');
        }
    }
}
