<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $numberOfUsers = 2;
        for ($i = 0; $i<$numberOfUsers; $i++){
            User::create([
                'name' => $i == 0 ? 'admin' : 'user',
                'email' => $i == 0 ? 'admin@admin.com' : 'user@user.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'is_admin' => $i == 0 ?? false,
                'remember_token' => Str::random(10),
            ]);
        }
    }
}
