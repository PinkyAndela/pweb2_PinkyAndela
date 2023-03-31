<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


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
            'role_id' => '1',
            'name' => 'Pinky',
            'email' => 'pinky@gmail.com',
            'password' => Hash::make('tes'),
        ]);
        User::create([
            'role_id' => '2',
            'name' => 'Adel',
            'email' => 'adel@gmail.com',
            'password' => Hash::make('tes'),
        ]);
    }
}
