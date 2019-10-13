<?php

use Illuminate\Database\Seeder;
use App\Record;

class RecordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Record::insert([
            [
            'case_title' => 'Bullying', 'grade_year' =>'Grade 8', 'complain' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sit amet tortor ac justo tempor hendrerit. Vivamus sit amet blandit risus. Phasellus vel porta dui, in tincidunt purus. Maecenas turpis ex, aliquet in tempus ac, efficitur ac turpis. Maecenas posuere porttitor sollicitudin. 
            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut mattis diam ex. Vestibulum eu lacus ex. Phasellus elementum fermentum enim et sodales. In laoreet auctor venenatis. Donec a luctus leo, a elementum lacus. Nulla ut felis ac urna cursus scelerisque. Fusce metus sem, euismod eget ultricies sit amet, viverra placerat dui.',
            'complainant' => 'test name', 'penalty' => 'suspension', 'user_id' => '2', 'adviser_id' => '1', 'student_id' => '1', 'status_id' => '2'
            ],
            [
            'case_title' => 'Skipping classes', 'grade_year' =>'Grade 7', 'complain' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sit amet tortor ac justo tempor hendrerit. Vivamus sit amet blandit risus. Phasellus vel porta dui, in tincidunt purus. Maecenas turpis ex, aliquet in tempus ac, efficitur ac turpis. Maecenas posuere porttitor sollicitudin. 
            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut mattis diam ex. Vestibulum eu lacus ex. Phasellus elementum fermentum enim et sodales. In laoreet auctor venenatis. Donec a luctus leo, a elementum lacus. Nulla ut felis ac urna cursus scelerisque. Fusce metus sem, euismod eget ultricies sit amet, viverra placerat dui.',
            'complainant' => 'test name', 'penalty' => 'suspension', 'user_id' => '1', 'adviser_id' => '2', 'student_id' => '2', 'status_id' => '3'
            ],
            [
            'case_title' => 'Smoking inside school premises', 'grade_year' =>'Grade 10', 'complain' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sit amet tortor ac justo tempor hendrerit. Vivamus sit amet blandit risus. Phasellus vel porta dui, in tincidunt purus. Maecenas turpis ex, aliquet in tempus ac, efficitur ac turpis. Maecenas posuere porttitor sollicitudin. 
            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut mattis diam ex. Vestibulum eu lacus ex. Phasellus elementum fermentum enim et sodales. In laoreet auctor venenatis. Donec a luctus leo, a elementum lacus. Nulla ut felis ac urna cursus scelerisque. Fusce metus sem, euismod eget ultricies sit amet, viverra placerat dui.',
            'complainant' => 'test name', 'penalty' => 'suspension', 'user_id' => '1', 'adviser_id' => '2', 'student_id' => '2', 'status_id' => '1'
            ],
        ]);
    }
}
