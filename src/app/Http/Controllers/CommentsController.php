<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Comment;

class CommentsController extends Controller
{


    public function store(Request $request,$post_id, Post $post){
        
        $this->validate(request(),['body'=>'required|min:5']);
        $post->id = $post_id;

        $post->comments()->create([
           'body'=>request('body'),
            'post_id'=>request('post_id')
        ]);

        return back();
    }
}
