<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
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
