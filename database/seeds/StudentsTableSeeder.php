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
            ['name' =>'Jeffry Reese', 'gender'=>'Male','home_address'=>'2047 San Jose, California', 'contact_number'=>'1235896',
            'student_picture' => 'https://via.placeholder.com/150', 'guardian_name' => 'yoko mai kato', 'guardian_contact' =>'886-998-0096', 'relationship_id' => '1'  
            ],

            ['name' =>'Deborah E. Bunnell', 'gender'=>'Female', 'home_address'=>'2370 Cemetery Street Houston, TX 77027', 'contact_number'=>'215-624-7361',
            'student_picture' => 'https://via.placeholder.com/150', 'guardian_name' => 'Snjezana Loginova', 'guardian_contact' =>'215-624-7361', 'relationship_id' => '2'  
            ],
        ]);
    }
}
