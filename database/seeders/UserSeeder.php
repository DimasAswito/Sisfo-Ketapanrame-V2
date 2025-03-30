<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'dimasaswito@gmail.com'],
            [
                'name' => 'Aswito',
                'email' => 'dimasaswito@gmail.com',
                'password' => Hash::make('12345678'),
            ]
        );
    }
}