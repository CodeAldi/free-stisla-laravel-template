<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            "name" => "pegawai tata usaha",
            "email" => "tu@gmail.com",
            "password" => bcrypt(123456789),
            "role" => UserRole::tataUsaha,
        ]);
        User::create([
            "name" => "pegawai",
            "email" => "pegawai1@gmail.com",
            "password" => bcrypt(123456789),
            "role" => UserRole::pegawai,
        ]);
        User::create([
            "name" => "kepala bagian",
            "email" => "kabag@gmail.com",
            "password" => bcrypt(123456789),
            "role" => UserRole::kabag,
        ]);
    }
}
