<?php

use App\ProfilModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProfilModel::create(
            [
                'id'        => 0,
                'email'     => 'Melancongwisata@gmail.com',
                'telepon'   => '+62 813 6591 6997',
                'about_us'  => 'Tentang Kami',
                'foto'      => 'about.jpg',
            ]
        );
    }
}
