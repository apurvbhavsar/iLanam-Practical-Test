<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        $user = \App\Models\User::create([
            'firstname' => 'Admin',
            'lastname' => 'User',
            'email' => 'admin@iLam.com',
            'phone' => '1234567890',
            'password' => Hash::make('admin123')
        ]);
        $user->assignRole('Admin');

        \App\Models\User::factory(10)->create()->each(
            function ($user) {
                $user->assignRole('User');
            });
    }
}
