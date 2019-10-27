<?php

use Illuminate\Database\Seeder;

class HistoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Histories')->delete();
        
        \DB::table('Histories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'record_id' => 1,
                'changes_made' => 'update the status of case from new to on-going',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 3,
                'record_id' => 1,
                'changes_made' => 'update the status of case from new to closed',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'record_id' => 57,
                'changes_made' => 'Created new record with title shinee',
                'created_at' => '2019-10-26 07:36:41',
                'updated_at' => '2019-10-26 07:36:41',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 1,
                'record_id' => 57,
                'changes_made' => 'edited the details of the case',
                'created_at' => '2019-10-26 07:46:10',
                'updated_at' => '2019-10-26 07:46:10',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 1,
                'record_id' => 57,
                'changes_made' => 'edited the details of the case',
                'created_at' => '2019-10-26 07:47:27',
                'updated_at' => '2019-10-26 07:47:27',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 1,
                'record_id' => 57,
                'changes_made' => 'shinee has been restored',
                'created_at' => '2019-10-26 07:55:07',
                'updated_at' => '2019-10-26 07:55:07',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 1,
                'record_id' => 57,
                'changes_made' => 'edited the details of the case',
                'created_at' => '2019-10-26 07:56:56',
                'updated_at' => '2019-10-26 07:56:56',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 1,
                'record_id' => 57,
                'changes_made' => 'edited the details of the case',
                'created_at' => '2019-10-26 07:57:36',
                'updated_at' => '2019-10-26 07:57:36',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 1,
                'record_id' => 57,
                'changes_made' => 'edited the details of the case',
                'created_at' => '2019-10-26 07:59:08',
                'updated_at' => '2019-10-26 07:59:08',
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 4,
                'record_id' => 57,
                'changes_made' => 'edited the details of the case',
                'created_at' => '2019-10-26 08:10:20',
                'updated_at' => '2019-10-26 08:10:20',
            ),
            10 => 
            array (
                'id' => 11,
                'user_id' => 1,
                'record_id' => 57,
                'changes_made' => 'case title shineess has been restored',
                'created_at' => '2019-10-26 08:38:36',
                'updated_at' => '2019-10-26 08:38:36',
            ),
            11 => 
            array (
                'id' => 12,
                'user_id' => 1,
                'record_id' => 57,
                'changes_made' => 'edited the details of the case',
                'created_at' => '2019-10-26 08:40:01',
                'updated_at' => '2019-10-26 08:40:01',
            ),
            12 => 
            array (
                'id' => 14,
                'user_id' => 4,
                'record_id' => 57,
                'changes_made' => 'edited the details of the case',
                'created_at' => '2019-10-26 09:30:27',
                'updated_at' => '2019-10-26 09:30:27',
            ),
            13 => 
            array (
                'id' => 15,
                'user_id' => 1,
                'record_id' => 1,
                'changes_made' => 'case title Bullying has been restored',
                'created_at' => '2019-10-26 13:36:40',
                'updated_at' => '2019-10-26 13:36:40',
            ),
            14 => 
            array (
                'id' => 18,
                'user_id' => 1,
                'record_id' => 1,
                'changes_made' => 'edited the details of the case',
                'created_at' => '2019-10-27 05:08:08',
                'updated_at' => '2019-10-27 05:08:08',
            ),
            15 => 
            array (
                'id' => 19,
                'user_id' => 1,
                'record_id' => 55,
                'changes_made' => 'edited the details of the case',
                'created_at' => '2019-10-27 09:09:22',
                'updated_at' => '2019-10-27 09:09:22',
            ),
        ));
        
        
    }
}