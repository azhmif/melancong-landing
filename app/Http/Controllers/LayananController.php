<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LayananModel;
use Ramsey\Uuid\Uuid;
use Session;

class LayananController extends Controller
{
    public function index()
    {
        $data2 = LayananModel::all();
        $data = array(
            'title'     => 'Layanan',
            'menu'      => 5,
            'title2'    => 'Layanan'
        );

        return view('admin/layanan', [
            'tools' => $data,
            'data2' => $data2
        ]);
    }

    public function create(Request $request)
    {
        LayananModel::create(
            [
                'id_layanan' => Uuid::uuid4()->getHex(),
                'nama_layanan' => $request->nama_layanan,
                'keterangan' => $request->keterangan
            ]
        );

        Session::flash('sukses', 'Layanan Berhasil Ditambahkan');
        return redirect('layanan');
    }

    public function update(Request $request)
    {
        LayananModel::where('id_layanan', $request->id)->update([
            'nama_layanan' => $request->nama_layanan,
            'keterangan' => $request->keterangan
        ]);

        Session::flash('sukses', 'Layanan Berhasil Diubah');
        return redirect('layanan');
    }

    public function delete($id)
    {
        LayananModel::where('id_layanan', $id)->delete();

        Session::flash('sukses', 'Layanan Berhasil Dihapus');
        return redirect('layanan');
    }
}
