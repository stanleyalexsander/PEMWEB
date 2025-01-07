<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'nama_pengguna' => 'Stanley Alek',
                'email' => 'admin@logistock.com',
                'password' => Hash::make('password123'), // Pastikan mengganti password
                'hak_akses' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pengguna' => 'Bayu Wijaya',
                'email' => 'marketing@logistock.com',
                'password' => Hash::make('password123'), // Pastikan mengganti password
                'hak_akses' => 'petugas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
