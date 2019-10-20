<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('students')->delete();
        
        \DB::table('students')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Jeffry Reese',
                'gender' => 'Female',
                'home_address' => '2047 San Jose, California',
                'contact_number' => '1235896',
                'student_picture' => 'https://via.placeholder.com/150',
                'guardian_name' => 'yoko mai katoa',
                'guardian_contact' => '886-998-0096',
                'relationship_id' => 1,
                'created_at' => NULL,
                'updated_at' => '2019-10-13 10:41:31',
            ),
        ));
        
        
    }
}