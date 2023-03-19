<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'firstname' => 'Danilson',
            'lastname' => 'Kayumbuca',
            'email' => 'artmiss264@gmail.com',
            'password' => bcrypt('124578'),
        ]);
    }
}