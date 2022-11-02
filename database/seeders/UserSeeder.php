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
        User::truncate();
        User::create([
            'name'=>'adit',
            'nisn'=>'1234567',
            'email'=>'jarwo@gmail.com',
            'kelas'=>'',
            'jurusan'=>'',
            'password'=> bcrypt('1234567'),
            'role'=> 'admin',
            'remember_token'=> Str::random(60),
        ]);
    }
}
