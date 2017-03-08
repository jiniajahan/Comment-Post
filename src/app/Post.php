<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;
use Illuminate\Http\Request;

class Post extends Model
{
    protected $fillable = ['title','description'];
    
    public function comments()
    {
     
        return $this->hasMany(Comment::class);
    }

    public function addComment(Request $request, $body )
    {



    }
}
