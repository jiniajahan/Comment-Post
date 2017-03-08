<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Comment;

class CommentsController extends Controller
{


    public function store(Post $post){

        $this->validate(request(),['body'=>'required|min:2']);
//      $post->addComment(request('body','post_id'));

        return back();
    }
}
