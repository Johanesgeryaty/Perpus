<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Genre;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Genre::create([
            'name' => 'Romantis'
        ]);
        Genre::create([
            'name' => 'Pendidikan'
        ]);
        Genre::create([
            'name' => 'Religius'
        ]);
        Genre::create([
            'name' => 'Comedi'
        ]);
        User::create([
            'name' => 'Ibrahim Rangkuti',
            'nisn' => 1234567,
            'email' => 'ibrahim@gmail.com',
            'kelas' => '11',
            'jurusan' => 'RPL',
            'password' => bcrypt('1234567'),
            'role' => 'admin'
        ]);
        User::create([
            'name' => 'Johanes',
            'nisn' => 1111111,
            'email' => 'johan@gmail.com',
            'kelas' => '11',
            'jurusan' => 'RPL',
            'password' => bcrypt('1111111'),
            'role' => 'user'
        ]);
    }
}
