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
        $admin = User::firstOrCreate(
            ['email' => 'admin@bmga.com'],
            [
                'name' => 'Admin User',
                'email' => 'admin@bmga.com',
                'password' => Hash::make('12345678'), 
            ]
        );

        $admin->assignRole('admin');
    

        $support = User::firstOrCreate(
            ['email' => 'support@bmga.com'],
            [
                'name' => 'Support Staff',
                'password' => Hash::make('12345678'),
            ]
        );

        $support->assignRole('support');

        $user = User::firstOrCreate(
            ['email' => 'user@bmga.com'],
            [
                'name' => 'Demo User',
                'password' => Hash::make('12345678'),
            ]
        );
        
        $user->assignRole('user');
    }
}
