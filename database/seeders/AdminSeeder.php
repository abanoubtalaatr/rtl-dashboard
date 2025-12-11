<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Amr',
            'email' => 'amr@admin.com',
            'password' => Hash::make('password'),
            'role' => 'super_admin',
        ]);

        User::create([
            'name' => 'Nagy',
            'email' => 'nagy@admin.com',
            'password' => Hash::make('password'),
            'role' => 'super_admin',
        ]);

        User::create([
            'name' => 'Abanoub',
            'email' => 'abanoub@admin.com',
            'password' => Hash::make('password'),
            'role' => 'super_admin',
        ]);
    }
}
