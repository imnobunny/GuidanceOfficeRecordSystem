<?php

use Illuminate\Database\Seeder;

class AdvisersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('advisers')->delete();
        
        \DB::table('advisers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'teacher_name' => 'teacher name 1',
                'department' => 'Filipino',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'teacher_name' => 'teacher name 2',
                'department' => 'English',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'teacher_name' => 'teacher name 3',
                'department' => 'Math',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'teacher_name' => 'teacher name 4',
                'department' => 'Social Studies',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'teacher_name' => 'teacher name 5',
                'department' => 'Science',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'teacher_name' => 'teacher name 6',
                'department' => 'Values',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'teacher_name' => 'teacher name 7',
                'department' => 'PE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}