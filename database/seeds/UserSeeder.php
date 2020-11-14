<?php

use Carbon\Traits\Timestamp;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $id = Uuid::uuid4()->getHex();
        $pass = Hash::make('12345678');
        DB::table('users')->insert(
            [
                'id'        => $id,
                'username'  => 'Admin',
                'email'     => 'Melancongwisata@gmail.com',
                'password'  => $pass,
            ]
        );
    }
}
