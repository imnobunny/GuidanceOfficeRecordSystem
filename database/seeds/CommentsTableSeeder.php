<?php

use Illuminate\Database\Seeder;
use App\Comment;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::insert([
            ['comment'=> 'comment 1', 'record_id'=>1, 'user_id' => 1],
            ['comment'=> 'comment 2', 'record_id'=>1, 'user_id' => 1]
        ]);
    }
}
