<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            ['username' => 'admin', 'email'=>'admin@gmail.com', 'password'=> Hash::make('123456789'), 'role_id' => 1],
            ['username' => 'user', 'email'=>'user@gmail.com', 'password'=> Hash::make('123456789'), 'role_id' => 2]
        ]);
    }
}
