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
            'name' => 'Admin User',
            'email' => 'admin@iLam.com',
            'password' => Hash::make('admin123')
        ]);
        $user->assignRole('Admin');

        \App\Models\User::factory(10)->create()->each(
            function ($user) {
                $user->assignRole('User');
            });
    }
}
