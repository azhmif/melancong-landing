<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProfilModel;
use App\LayananModel;
use App\ResponseModel;
use App\GaleriModel;
use App\JumbotronModel;
use App\PortofolioModel;

class LandingController extends Controller
{
    public function index()
    {
        $profil = ProfilModel::all();
        $layanan = LayananModel::all();
        $response = ResponseModel::all();
        $galeri = GaleriModel::all();
        $jumbotron = JumbotronModel::all();
        $portofolio = PortofolioModel::all();

        return view('client/dashboard', [
            'profil' => $profil,
            'layanan' => $layanan,
            'response' => $response,
            'galeri' => $galeri,
            'jumbotron' => $jumbotron,
            'portofolio' => $portofolio
        ]);
    }
}
