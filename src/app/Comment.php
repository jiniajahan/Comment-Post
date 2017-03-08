<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Comment extends Model
{
    protected $fillable = ['post_id','body'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
