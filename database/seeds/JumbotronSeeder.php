<?php

use Illuminate\Database\Seeder;
use App\JumbotronModel;
use Ramsey\Uuid\Uuid;

class JumbotronSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $foto = array('slide-1.jpg', 'slide-2.jpg', 'slide-3.jpg');
        $judul = array('Melancong Wisata', 'Pemesanan Tiket Pesawat', 'Paket Tour Wisata');
        for ($a = 0; $a < 3; $a++) {
            JumbotronModel::create(
                [
                    'id_jumbotron'  => Uuid::uuid4()->getHex(),
                    'judul'         => $judul[$a],
                    'foto'          => $foto[$a],
                    'kata'          => '-',
                ]
            );
        }
    }
}
