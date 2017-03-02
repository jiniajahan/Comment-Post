<?php namespace App\Repositories;

use App\Post;
use Illuminate\Pagination\Paginator;

class PostRepository
{
    protected $model;

    public function __construct(Post $post)
    {
        $this->model = $post;
    }

    public function index()
    {
     
    }
}
