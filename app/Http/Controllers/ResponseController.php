<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ResponseModel;
use Ramsey\Uuid\Uuid;
use Session;
use File;

class ResponseController extends Controller
{
    public function index()
    {
        $data2 = ResponseModel::all();
        $data = array(
            'title'     => 'Response',
            'menu'      => 4,
            'title2'    => 'Response'
        );

        return view('admin/response', [
            'tools' => $data,
            'data2' => $data2
        ]);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'foto' => 'required|file|image|mimes:jpeg,png,gif,webp|max:3048',
            'nama' => 'required',
            'pekerjaan' => 'required',
            'komentar' => 'required',
            'bintang' => 'required'
        ]);

        if ($request->hasFile('foto')) {
            $gambar = $request->file('foto');
            $nama = $gambar->getClientOriginalName();
            $tujuan = 'data/respon/';
            $gambar->move($tujuan, $nama);
            ResponseModel::create(
                [
                    'id_response' => Uuid::uuid4()->getHex(),
                    'foto' => $nama,
                    'nama' => $request->nama,
                    'pekerjaan' => $request->pekerjaan,
                    'komentar' => $request->komentar,
                    'bintang' => $request->bintang
                ]
            );
        }

        Session::flash('sukses', 'Data Berhasil Ditambahkan');
        return redirect('response');
    }

    public function update_ket(Request $request)
    {
        $this->validate($request, [
            'nama'   => 'required',
            'pekerjaan'   => 'required',
            'komentar'   => 'required',
            'bintang'   => 'required',
        ]);

        ResponseModel::where('id_response', $request->id)->update([
            'nama' => $request->nama,
            'pekerjaan' => $request->pekerjaan,
            'komentar' => $request->komentar,
            'bintang' => $request->bintang
        ]);

        Session::flash('sukses', 'Keterangan Berhasil Diubah');
        return redirect('response');
    }

    public function update_foto(Request $request)
    {
        $this->validate($request, [
            'foto' => 'required|file|image|mimes:jpeg,png,gif,webp|max:3048',
        ]);

        $gambar = $request->file('foto');
        $nama = $gambar->getClientOriginalName();
        $tujuan = 'data/respon/';
        File::delete($tujuan . $request->lama);
        $gambar->move($tujuan, $nama);

        ResponseModel::where('id_response', $request->id)->update([
            'foto' => $nama
        ]);

        Session::flash('sukses', 'Foto Berhasil Diubah');
        return redirect('response');
    }

    public function delete($id)
    {
        $data = ResponseModel::where('id_response', $id)->get();
        var_dump($data);
        $lama = $data[0]->foto;
        $tujuan = 'data/respon/';
        File::delete($tujuan . $lama);
        ResponseModel::where('id_response', $id)->delete();

        Session::flash('sukses', 'Foto Berhasil Dihapus');
        return redirect('response');
    }
}
