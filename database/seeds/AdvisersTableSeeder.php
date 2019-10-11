<?php

use Illuminate\Database\Seeder;
use App\Adviser;

class AdvisersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Adviser::insert([
            ['teacher_name' => 'teacher name 1', 'department' => 'Filipino'],
            ['teacher_name' => 'teacher name 2', 'department' => 'English'],
            ['teacher_name' => 'teacher name 3', 'department' => 'Math'],
            ['teacher_name' => 'teacher name 4', 'department' => 'Social Studies'],
            ['teacher_name' => 'teacher name 5', 'department' => 'Science'],
            ['teacher_name' => 'teacher name 6', 'department' => 'Values'],
            ['teacher_name' => 'teacher name 7', 'department' => 'PE'],
        ]);
    }
}
