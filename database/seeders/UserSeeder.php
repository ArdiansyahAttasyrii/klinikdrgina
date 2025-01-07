<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'tempat_lahir' => 'jakarta',
            'tgl_lahir' => '2000-01-01',
            'alamat' => 'jakarta',
            'kontak' => '081234567890',
            'foto' => 'images/default.jpg',
        ]);

        $user->assignRole('admin');

        $pasien = User::create([
            'name' => 'pasien',
            'email'=> 'pasien@gmail.com',
            'password' => Hash::make('pasien123'),
            'tempat_lahir' => 'jakarta',
            'tgl_lahir' => '2000-01-01',
            'alamat' => 'jakarta',
            'kontak' => '081234567890',
            'foto' => 'images/default.jpg',
        ]);

        $pasien->assignRole('pasien');
    }
}
