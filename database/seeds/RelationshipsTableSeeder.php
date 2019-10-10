<?php

use Illuminate\Database\Seeder;
use App\Relationship;

class RelationshipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Relationship::insert([
            ['Relationship' => 'Mother'],
            ['Relationship' => 'Father'],
            ['Relationship' => 'Relatives']
        ]);
    }
}
