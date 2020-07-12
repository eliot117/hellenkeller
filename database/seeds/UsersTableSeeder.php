<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $user = User::create([
            'name' => 'admin',
            'lastname'=>'dark',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        $user->asignarRol(1);
    }
}
