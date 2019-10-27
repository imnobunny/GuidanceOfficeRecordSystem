<?php

use Illuminate\Database\Seeder;
use App\History;

class HistoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        History::insert([
            ['user_id'=> 1, 'record_id'=>1, 'changes_made'=>'update the status of case from new to on-going'],
            ['user_id'=>3, 'record_id' => 1, 'changes_made'=>'update the status of case from new to closed']
        ]);
    }
}
