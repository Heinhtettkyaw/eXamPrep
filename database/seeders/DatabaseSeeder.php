<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Lecture;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create(
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'phone' => '09123456778',
                'address' => 'YGN',
                'role' => 'admin',
                'password' => Hash::make('admin123'),
                'gender' => 'male',
                'dob' => '1999-01-01'

            ]
        );

        Lecture::create([
            'lecuture_Name' => 'Hardware',
            'user_id' => '1',
        ]);
    }
}
