<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
            'name' => 'Admin',
            'role' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('adminlama'),
        ]);
        User::create([
            'name' => 'Laela Diyah Puspita',
            'role' => 'Customer',
            'email' => 'laeladiyahpuspita280203@gmail.com',
            'password' => Hash::make('laela280203'),
        ]);
    }
}
