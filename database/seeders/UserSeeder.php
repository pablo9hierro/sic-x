<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Crie um usuário com e-mail e senha específicos
        User::create([
            'name' => 'pablo',
            'email' => 'pablo@gmail.com',
            'password' => Hash::make('senha123'),
        ]);
    }
}
