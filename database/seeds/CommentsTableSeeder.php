<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Comments')->delete();
        
        \DB::table('Comments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'comment' => 'comment 1',
                'user_id' => 1,
                'record_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'comment' => 'comment 2',
                'user_id' => 1,
                'record_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'comment' => 'sasasa',
                'user_id' => 4,
                'record_id' => 1,
                'created_at' => '2019-10-26 10:24:29',
                'updated_at' => '2019-10-26 10:24:29',
            ),
            3 => 
            array (
                'id' => 4,
                'comment' => 'Fusce viverra neque in eros consectetur pellentesque. Nullam luctus fermentum iaculis. Sed auctor mauris fermentum tellus faucibus, eu sagittis turpis interdum. Cras blandit ipsum leo, in sagittis tellus euismod vitae. Nullam euismod mollis lobortis. Nunc sed elit nec velit consectetur aliquam. Phasellus nibh est, malesuada non ornare id, convallis eu dui. Mauris at fringilla massa. Vivamus et ex condimentum, luctus tellus maximus, vehicula eros. Etiam semper leo lectus, eget pharetra velit maximus ut. Sed suscipit luctus leo, nec ultrices lectus consectetur a.',
                'user_id' => 4,
                'record_id' => 1,
                'created_at' => '2019-10-26 10:24:55',
                'updated_at' => '2019-10-26 10:24:55',
            ),
            4 => 
            array (
                'id' => 7,
                'comment' => 'twsr',
                'user_id' => 1,
                'record_id' => 55,
                'created_at' => '2019-10-26 14:05:32',
                'updated_at' => '2019-10-26 14:05:32',
            ),
        ));
        
        
    }
}