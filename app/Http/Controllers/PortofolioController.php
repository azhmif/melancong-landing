<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PortofolioModel;
use Ramsey\Uuid\Uuid;
use File;
use Session;

class PortofolioController extends Controller
{
    public function index()
    {
        $data2 = PortofolioModel::all();
        $data = array(
            'title'     => 'portofolio',
            'menu'      => 6,
            'title2'    => 'Melancong Wisata'
        );

        return view('admin/portofolio', [
            'tools' => $data,
            'data2' => $data2
        ]);
    }
    public function create(Request $request)
    {
        $this->validate($request, [
            'foto' => 'required|file|image|mimes:jpeg,png,gif,webp|max:3048',
        ]);
        if ($request->hasFile('foto')) {
            $gambar = $request->file('foto');
            $nama = $gambar->getClientOriginalName();
            $tujuan = 'data/portofolio/';
            $gambar->move($tujuan, $nama);
            PortofolioModel::create(
                [
                    'id_portofolio' => Uuid::uuid4()->getHex(),
                    'foto' => $nama,
                    'judul' => $request->judul,
                    'subjudul' => $request->subjudul,
                    'penjelasan' => $request->penjelasan
                ]
            );
        }
        Session::flash('sukses', 'Data Berhasil Ditambahkan');
        return redirect('portofolio');
    }

    public function update_ket(Request $request)
    {
        $this->validate($request, [
            'keterangan'   => 'required'
        ]);
        PortofolioModel::where('id_portofolio', $request->id)->update([
            'keterangan' => $request->keterangan,
        ]);
        Session::flash('sukses', 'Keterangan Berhasil Diubah');
        return redirect('portofolio');
    }

    public function update_foto(Request $request)
    {
        $this->validate($request, [
            'foto' => 'required|file|image|mimes:jpeg,png,gif,webp|max:3048',
        ]);
        $gambar = $request->file('foto');
        $nama = $gambar->getClientOriginalName();
        $tujuan = 'data/portofolio/';
        File::delete($tujuan . $request->lama);
        $gambar->move($tujuan, $nama);
        PortofolioModel::where('id_portofolio', $request->id)->update([
            'foto' => $nama
        ]);
        Session::flash('sukses', 'Foto Berhasil Diubah');
        return redirect('portofolio');
    }

    public function delete($id)
    {
        $data = PortofolioModel::where('id_portofolio', $id)->get();
        $lama = $data[0]->foto;
        $tujuan = 'data/portofolio/';
        File::delete($tujuan . $lama);
        PortofolioModel::where('id_portofolio', $id)->delete();

        Session::flash('sukses', 'Foto Berhasil Dihapus');
        return redirect('portofolio');
    }
}
