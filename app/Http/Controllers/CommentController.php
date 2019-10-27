<?php

namespace App\Http\Controllers;
use App\Record;
use App\Comment;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    //add comment
    public function addcomment(Request $request, $id)
    {
        
        $this->validate($request, [
            'comment' => 'required',
            'record_id' => 'required',
            'user_id' => 'required'
        ]);
        
        $add_comment = new Comment;
        $add_comment->comment = $request->input('comment');
        $add_comment->user_id = $request->input('user_id'); 
        $add_comment->record_id = $request->input('record_id');

        $add_comment->save();

        return back()->with("success", "new comment was added");
        
    }
}
