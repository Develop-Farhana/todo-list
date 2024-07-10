<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'name' => 'User',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Raj',
                'email' => 'raj@example.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Test',
                'email' => 'test@example.com',
                'password' => Hash::make('password'),
            ],
            // Add more users as needed
        ]);
    }
}
