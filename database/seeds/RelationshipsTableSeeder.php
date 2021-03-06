<?php

use Illuminate\Database\Seeder;

class RelationshipsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('relationships')->delete();
        
        \DB::table('relationships')->insert(array (
            0 => 
            array (
                'id' => 1,
                'relationship' => 'Mother',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'relationship' => 'Father',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'relationship' => 'Relatives',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'relationship' => 'Sibling',
                'created_at' => '2019-10-19 13:46:30',
                'updated_at' => '2019-10-19 13:46:30',
            ),
        ));
        
        
    }
}