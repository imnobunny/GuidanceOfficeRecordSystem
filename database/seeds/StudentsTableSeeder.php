<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::insert([
            ['name' =>'Jeffry Reese', 'gender'=>'male', 'home_address'=>'2047 San Jose, California', 'contact_number'=>'1235896',
            'guardian_name' => 'yoko mai kato', 'relationship_id' => '2', 'guardian_contact' =>'886-998-096', 'student_picture' => 'https://via.placeholder.com/150'],

            ['name' =>'Lawan Ubon Bunnag', 'gender'=>'Female', 'home_address'=>'2557 New York', 'contact_number'=>'1235896',
            'guardian_name' => 'yoko mai kato', 'relationship_id' => '1', 'guardian_contact' =>'886-998-096', 'student_picture' => 'https://via.placeholder.com/150'],
        ]);
    }
}
