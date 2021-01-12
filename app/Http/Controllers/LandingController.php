<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProfilModel;
use App\LayananModel;
use App\ResponseModel;
use App\GaleriModel;
use App\JumbotronModel;
use App\PortofolioModel;
use Illuminate\Support\Facades\Http;

class LandingController extends Controller
{
    public function index()
    {
        $profil = ProfilModel::all();
        $respons = ResponseModel::all();
        $galeri = GaleriModel::all();
        $jumbotron = JumbotronModel::all();
        $portofolio = PortofolioModel::all();
        $layanan = LayananModel::all();

        $apiUrl = env('API_URL');
        $response = Http::get($apiUrl . "web/mobil");
        $mobil = json_decode($response->body());
        $response = Http::get($apiUrl . "web/bus");
        $bus = json_decode($response->body());
        $response = Http::get($apiUrl . "web/wisata");
        $wisata = json_decode($response->body());

        return view('client/dashboard', [
            'profil' => $profil,
            'response' => $respons,
            'galeri' => $galeri,
            'layanan' => $layanan,
            'jumbotron' => $jumbotron,
            'portofolio' => $portofolio,
            'mobil' => $mobil->result->data,
            'bus' => $bus->result->data,
            'wisata' => $wisata->result->data,
        ]);
    }
}
