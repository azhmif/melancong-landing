<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ResponseModel;

class DashboardController extends Controller
{
    public function index()
    {
        $respon = ResponseModel::all();
        $data = array(
            'title'     => 'Dashboard',
            'menu'      => 1,
            'title2'    => 'Dashboard'
        );

        return view('admin/dashboard', [
            'tools' => $data,
            'respon' => $respon
        ]);
    }
}
