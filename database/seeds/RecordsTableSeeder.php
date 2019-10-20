<?php

use Illuminate\Database\Seeder;

class RecordsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('records')->delete();
        
        \DB::table('records')->insert(array (
            0 => 
            array (
                'id' => 1,
                'case_title' => 'Bullying',
                'grade_year' => 'Grade 8',
                'complain' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sit amet tortor ac justo tempor hendrerit. Vivamus sit amet blandit risus. Phasellus vel porta dui, in tincidunt purus. Maecenas turpis ex, aliquet in tempus ac, efficitur ac turpis. Maecenas posuere porttitor sollicitudin. 
Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut mattis diam ex. Vestibulum eu lacus ex. Phasellus elementum fermentum enim et sodales. In laoreet auctor venenatis. Donec a luctus leo, a elementum lacus. Nulla ut felis ac urna cursus scelerisque. Fusce metus sem, euismod eget ultricies sit amet, viverra placerat dui.',
                'complainant' => 'test name',
                'penalty' => 'suspension',
                'user_id' => 2,
                'adviser_id' => 1,
                'student_id' => 1,
                'status_id' => 3,
                'created_at' => NULL,
                'updated_at' => '2019-10-16 12:57:39',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}