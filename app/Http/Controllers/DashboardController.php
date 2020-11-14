<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LayananModel;
use App\ResponseModel;

class DashboardController extends Controller
{
    public function index()
    {
        $mobil = LayananModel::where('jenis_layanan', 1)->count();
        $bus = LayananModel::where('jenis_layanan', 2)->count();
        $paket = LayananModel::where('jenis_layanan', 3)->count();
        $respon = ResponseModel::all();
        $data = array(
            'title'     => 'Dashboard',
            'menu'      => 1,
            'title2'    => 'Dashboard'
        );

        return view('admin/dashboard', [
            'tools' => $data,
            'mobil' => $mobil,
            'bus' => $bus,
            'paket' => $paket,
            'respon' => $respon
        ]);
    }
}
