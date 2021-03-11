<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\models\User;
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
            'name' => 'admin1',
            'email' => 'admin1@gmail.com',
            'profile_image' => 'fotoadmin',
            'level' => 'admin',
            'password' => bcrypt('12345'),
            'remember_token' => Str::random(60),
        ]);

        User::create([
            'name' => 'user1',
            'email' => 'user1@gmail.com',
            'profile_image' => 'fotouser',
            'level' => 'user',            
            'password' => bcrypt('user12345'),
            'remember_token' => Str::random(60),
        ]);
    }
}
