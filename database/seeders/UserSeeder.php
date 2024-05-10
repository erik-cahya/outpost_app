<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'name' => 'Test User',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin123')
            ]
        ];

        foreach ($user as $usr) {
            User::create($usr);
        }
    }
}
