<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Comments;
class CommentController extends Controller
{
   public function commentstore(Request $request,$post)
    {
    	$this->validate($request,[
    	'comment' => 'required'
    ]);


    $comment = new Comments();
    $comment-> user_id = Auth::id();
    $comment-> post_id = $post;
    $comment->comment = $request->comment;
    $comment->save();

    return redirect()->back()->with('status','Comment added');
    }
}
