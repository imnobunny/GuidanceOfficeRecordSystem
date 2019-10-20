<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$3vel906t51jhR6mLGqljPeR569Wg4OYH0wLgX2czFBu5wprtzG9hS',
                'role_id' => 1,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => '2019-10-19 13:24:54',
            ),
            1 => 
            array (
                'id' => 2,
                'username' => 'user',
                'email' => 'user@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$kzq43RzXnv7a6Qc8wpSE4e6C9mDCMAgy21qBj9XgftJbrr8QK5kt2',
                'role_id' => 2,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => '2019-10-19 13:54:07',
            ),
            2 => 
            array (
                'id' => 3,
                'username' => 'sairabunny',
                'email' => 'test@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$dk1qiUrM767rAUFcO8iLIeV1NN9P7qvtJIg4PX8pSSW75UuPxKzpK',
                'role_id' => 1,
                'remember_token' => NULL,
                'created_at' => '2019-10-12 02:20:06',
                'updated_at' => '2019-10-20 01:31:10',
            ),
            3 => 
            array (
                'id' => 4,
                'username' => 'evergreenpany',
                'email' => 'tiffany@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Wa2J8bKttV44nebdUqL3kO38wI1JozfysOlOMuBMJ93.f9EtwEqH.',
                'role_id' => 2,
                'remember_token' => NULL,
                'created_at' => '2019-10-19 05:30:32',
                'updated_at' => '2019-10-19 11:41:53',
            ),
        ));
        
        
    }
}