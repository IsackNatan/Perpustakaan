<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'jenis_kelamin' => 'none',
            'jurusan' => 'none',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123123123'),
            'email_verified_at' => now()
        ])->assignRole('admin');

        User::create([
            'name' => 'petugas',
            'jenis_kelamin' => 'Pria',
            'jurusan' => 'Teknik Informatika',
            'email' => 'petugas@gmail.com',
            'password' => bcrypt('123123123'),
            'email_verified_at' => now()
        ])->assignRole('petugas');

        User::create([
            'name' => 'peminjam',
            'jenis_kelamin' => 'Wanita',
            'jurusan' => 'Ekonomi',
            'email' => 'peminjam@gmail.com',
            'password' => bcrypt('123123123'),
            'email_verified_at' => now()
        ])->assignRole('peminjam');
    }
}
