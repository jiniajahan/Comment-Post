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

    public function index($data, $per_page = 10)
    {
        $model = $this->model;

        if (isset($data['query'])) {
            $model = $model->where('display_name', 'LIKE', "%{$data['query']}%");
        }
        return $model->paginate($per_page);
    }
}
