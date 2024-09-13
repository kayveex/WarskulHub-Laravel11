<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminData = [
            [
                'id' => Str::uuid(),
                'username' => 'administrator01',
                'email' => 'admin01@gmail.com',
                'password' => Hash::make('admin123'),
                'ulang_password' => 'admin123',
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'username' => 'administrator02',
                'email' => 'admin02@gmail.com',
                'password' => Hash::make('admin123'),
                'ulang_password' => 'admin123',
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($adminData as $key => $value) {
            User::create($value);
        }
    }
}
